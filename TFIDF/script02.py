# coding: utf-8
import firebase_admin
from firebase_admin import credentials
from firebase_admin import firestore

import pythainlp
from pythainlp import word_tokenize
# from pythainlp.corpus import stopwords
from pythainlp.corpus import wordnet
from nltk.stem.porter import PorterStemmer
from nltk.corpus import words
from stop_words import get_stop_words
from sklearn.feature_extraction.text import TfidfVectorizer
import nltk
# nltk.download('words')
import numpy as np
from scipy.sparse import csr_matrix

p_stemmer = PorterStemmer()

def split_word(text):
    tokens = word_tokenize(text,engine='newmm')
    
    # # Remove stop words ภาษาไทย และภาษาอังกฤษ
    # tokens = [i for i in tokens if not i in th_stop and not i in en_stop]
    
    # หารากศัพท์ภาษาไทย และภาษาอังกฤษ
    # English
    tokens = [p_stemmer.stem(i) for i in tokens]
    
    # Thai
    tokens_temp=[]
    for i in tokens:
        w_syn = wordnet.synsets(i)
        if (len(w_syn)>0) and (len(w_syn[0].lemma_names('tha'))>0):
            tokens_temp.append(w_syn[0].lemma_names('tha')[0])
        else:
            tokens_temp.append(i)
    
    tokens = tokens_temp
    
    # ลบตัวเลข
    tokens = [i for i in tokens if not i.isnumeric()]
    
    # ลบช่องว่าง
    tokens = [i for i in tokens if not ' ' in i]

    # tokens_list = [split_word(txt) for txt in text_list]

    return tokens

def tfpredic(testWord):
    # database 1 : คำถามที่ต้องตอบ
    text_list = ['''ฝุ่นเยอะ มหาลัยยังเปิดเรียนใช่ไหม''','''กำหนดการรับนักศึกษา''','''ปีนี้คณะรับนักศึกษากี่คน''', '''สอบเข้า''','''น้ำท่วม เปิดเรียนตามปกติ''',
    '''ย้ายคณะ''','''น้ำท่วมมหาลัยหยุด''','''โอนหน่วยกิต''', '''ประชุมอาเซียน มหาลัยปิดเรียน''','''ลาพักการเรียน''',
    '''เทียบโอนหน่วยกิต''','''เกียรตินิยม''','''เปลี่ยนชื่อ''', '''ถามเรื่องกู้กยศ''',
    '''โควิดระบาด มหาลัยหยุด''','''ไวรัสระบาด มหาลัยปิดเรียน''','''รับนักศึกษากี่คนปีนี้''', '''ปีนี้รับนักศึกษาเยอะ''','''ปีนี้รับ นศ เยอะ''',
    '''วันรับปริญญามีเรียนหรือเปล่า''','''งานรับปริญญา มหาลัยปิดเรียนกี่วัน''', '''มหาลัยหยุดวันรับปริญญาถึงวันไหน''','''สำนักทะเบียนวันนี้เปิดทำการตามปกติ''',
    '''สำนักทะเบียนพรุ่งนี้เปิดทำการตามปกติ''','''สหกิจเทอมนี้ไปทำไม่ได้ ทำยังไง''','''ฝึกงานได้ช่วงไหน''','''หนังสือรับรองจบได้เมื่อไหร่''',
    '''สหกิจศึกษาเลื่อน''','''สหกิจยังทำได้''', '''วันที่ สำนักทะเบียนทำการปกติ''','''กยศ''','''กู้กยศ''','''ก.ย.ศ.''','''กยศ.''','''สอบ''','''สอบโทอิค''','''จ่ายเงิน''',
    '''ไปฝึกงานไม่ได้เทอมนี้ ควรทำอย่างไร''','''น้ำท่วม หยุดเรียน''',
    '''กำหนดการต่างๆของมหาลัยยังเหมือนเดิมใช่''','''วันที่ ปิดปรับปรุงเว็บ reg ''','''ปิดปรับปรุงเว็บสำนักทะเบียนเมื่อไหร่''', '''เลื่อนระยะเวลาสอบ''','''เลื่อนปิดภาคเรียน''',
    '''ซัมเมอร์ยังลงทะเบียนวันเดิม''','''ภาคเรียนที่ 3 ยังลงทะเบียนวันเดิม''','''ภาคเรียนที่สามวันลงทะเบียนเหมือนเดิม''', '''เลื่อนวันปิดเทอม''','''มหาลัยเรียนออนไลน์อย่างไม่มีกำหนด''','''หน่วยกิต''',testWord]
    # database 2 : คำถามที่ไม่ต้องตอบ
    text_list2 = ['''คณะวิทยาศาสต์อยู่ตรงไหน''','''เซเว่นไปทางไหน''','''ไอทีมีเซเว่นไหม''','''ในมอมีเซเว่นที่ไหนบ้าง''','''โรงพยาบาลลาดกระบังไปทางไหน''','''เย็นนี้ทานข้าวไหน''','''วันนี้อาจารย์มีประชุม''','''ระบบช้ามาก''','''ขอดูเกรดเทอมนี้''','''ลงทะเบียนไปแล้วกี่หน่วยกิต''','''เหลืออีกหน่วยกิตกว่าจะจบ''','''เหลือวิชาเลือกต้องลงอีกกี่ตัว''','''หอในไปทางไหน''','''เมื่อไหร่โควิดจะหาย''','''เกรดจะออกครบทุกวิชาเมื่อไหร่''','''วิชา อาจารย์ส่งเกรดหรือยัง''','''สำนักคอมไปทางไหน''','''เมื่อไหร่ระบบคำนวณเกรดจะเสร็จ''','''เว็บล่มบ่อย เป็นอะไรนักหนา''','''ร้านถ่ายเอกสารอยู่ไหน''','''คณะวิศวะไปทางไหน''','''คณะคุรุไปทางไหน''','''แล้วไปเที่ยวกัน''','''ธนาคารอยู่ไหน''','''เกรดจะออกเมื่อไหร่''','''ขอดูตารางเรียนส่วนบุคคล''','''ขอดูตารางสอบส่วนตัว''','''สถาปัตยกรรมศาสตร์ไปทางไหน''','''ตึกพระเทพไปทางไหน''','''ตึกพระจอมเกล้าอยู่ตรงไหน''','''ตึกกลางน้ำอยู่ตรงไหน''','''gpax''','''ผลการเรียน''','''ห้องน้ำไปทางไหนคะ''','''หิวข้าวอยากกินข้าวมากๆๆๆ''','''คณะไอทีอยู่ตรงไหน''','''คะแนนสอบออกเมื่อไหร่''','''มีรายวิชาอะไรส่งเกรดแล้วบ้าง''','''อาจารย์ ออกจากคณะหรือยัง''','''บริหารอยู่ตรงไหน''','''เทคโนเกษตรอยู่ตรงไหน''','''ส่งงานอาจารย์ ที่ไหน''','''มีช่องทางติดต่ออาจารย์''','''ตึกศิลปศาสตร์อยู่ตรงไหน''','''ห้องอธิการบดีอยู่ที่ไหน''','''ห้องอาจารย์อยู่ที่ไหน''','''ผลการเรียนเทอมล่าสุด''','''กินข้าวไปเที่ยวอาบน้ำ''','''กินข้าวกันไหมเย็นนี้อยากกินมาก''','''ตึกโหลอยู่ไหน''',testWord]

    tokens_list = [split_word(txt) for txt in text_list] #รวม 2 List
    tokens_list_j = [','.join(tkn) for tkn in tokens_list]

    tvec = TfidfVectorizer(analyzer=lambda x:x.split(','),)
    t_feat = tvec.fit_transform(tokens_list_j)

    tokens_list2 = [split_word(txt) for txt in text_list2] #ตัดแต่ละประโยคให้เป็นคำ
    tokens_list_j2 = [','.join(tkn) for tkn in tokens_list2] #นำแต่ละคำมารวมกัน ให้คิดเป็นแต่ละประโยค แล้วคั่นด้วย ,

    tvec2 = TfidfVectorizer(analyzer=lambda x:x.split(','),)
    t_feat2 = tvec.fit_transform(tokens_list_j2)
    
    #หาค่า tfidf ของแต่ละคำในประโยค
    score1 = csr_matrix.sum(t_feat[-1,:])
    score2 = csr_matrix.sum(t_feat2[-1,:])

    if score1 < score2 :
        return 1 # database 1 : คำถามที่ต้องตอบ
    else :
        return 2 # database 2 : คำถามที่ไม่ต้องตอบ
            
#-----------------------------------------------------------------

cred = credentials.Certificate('Admin_SDK.json')
firebase_admin.initialize_app(cred)
db = firestore.client()

users_ref = db.collection(u'user_message')
docs = users_ref.stream()

for doc in docs:
    for key in doc.to_dict():
        if 'updateAt' == key:
            DateValue = doc.get(key)
        elif 'message' == key[0:-1]:
            testWord = doc.get(key)
            out = tfpredic(testWord)
            # print(key,testWord,out,doc.id)
            if out == 1:
                data = {
                    # u'UserId': doc.id,   
                    key : testWord,
                    u'updateAt': DateValue
                }
                db.collection(u'ShouldAns').document(doc.id).set(data, merge=True)
            elif out == 2:
                data = {
                    # u'UserId': doc.id,   
                    key: testWord,
                    u'updateAt': DateValue
                }
                db.collection(u'NoAns').document(doc.id).set(data, merge=True)
                
#-----------------------------------------------------------------
