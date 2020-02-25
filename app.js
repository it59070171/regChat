const db=firebase.firestore();
const form=document.querySelector('#addForm');

db.collection('notice_all').get().then((snapshot)=>{
    snapshot.forEach(doc=>{
        showdata(doc);
    });
});
form.addEventListener('submit',(e)=>{
    e.preventDefault();
    db.collection('notice_all').add({
        notice_all_text:form.notice_all.value
    });
});

// const firebaseConfig = {
//     apiKey: "AIzaSyCHpnh3NcLATYgtPkL6Q2ExNm-fKeYErZI",
//     authDomain: "linechat-41a72.firebaseapp.com",
//     databaseURL: "https://linechat-41a72.firebaseio.com",
//     projectId: "linechat-41a72",
//     storageBucket: "linechat-41a72.appspot.com",
//     messagingSenderId: "577084523082",
//     appId: "1:577084523082:web:cdfceb325b7e6e5c02dcb3",
//     measurementId: "G-K6NY960NSF"
//   };
