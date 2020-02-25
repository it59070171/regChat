<html>

<head>
    <meta charset="utf-8">
    <title>Check Question</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <style type="text/css">
        @font-face {
            font-family: 'FCActiveRegular';
            src: url('FCActiveRegular.eot') format('embedded-opentype'), url('FCActiveRegular.woff') format('woff'), url('FCActiveRegular.ttf') format('truetype'), url('FCActiveRegular.svg') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'FCActiveRegular' !important;
            background-color: whitesmoke;
            background-image: url("https://www.transparenttextures.com/patterns/climpek.png");
            /* This is mostly intended for prototyping; please download the pattern and re-host for production environments. Thank you! */
        }

        .topnav-right {
            float: right;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <span class="navbar-brand" href="#"><img src="https://png.pngtree.com/svg/20170103/df0c1bf59f.svg" width="30"
                height="30" class="d-inline-block align-top" alt="">&nbsp;Line Chatbot reg KMITL</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>
            <span class="navbar-text">
                <!-- <button class="fluid ui inverted orange button" type="submit">Sign up</button> -->
                <a href="home.php"><img
                        src="https://www.pinclipart.com/picdir/big/0-9015_orange-house-cliparts-home-icon-png-orange-transparent.png"
                        alt="" style="width:6%;" class="topnav-right"></a>

            </span>
        </div>
    </nav>

    <br>

    <div class="container">
            <h1 style="font-family: FCActiveRegular; text-align: center;">ตรวจสอบคำถามจากผู้ใช้</h1>
            <hr class="my-4"><br>

<a class="ui inverted secondary button" href ="ChooseQ.php">
  ตอบหลายคำถาม
      </a>
            </p>

            <div class="ui cards" id="carddata">
            </div>
            <br>
            <ul id="testdata"></ul>
           
            <div class="ui cards">
                <div class="card guides">
                  <div class="content">
                    <div class="header" style="font-family: FCActiveRegular;">สมหมาย</div>
                    <div class="meta">
                         <span>1 ธ.ค.62</span>
                         <a>03:05 น.</a>
                        </div>
                    <div class="description" style="font-size: 15px;" id="text1">
                      พรุ่งนี้มีประชุมอาเซียน สถาบันปิดเรียนไหมคะ
                    </div>
                  </div>
                  <a href="ReplyPage.php" style="text-decoration:none">
                        <div class="ui bottom attached button" style="font-family: FCActiveRegular;">
                                <i class="reply icon"></i>
                                ตอบกลับ
                              </div>
                            </div>
                  </a>

            <div class="ui cards">
                <div class="card">
                  <div class="content">
                    <div class="header" style="font-family: FCActiveRegular;">สมหมาย</div>
                    <div class="meta">
                         <span>1 ธ.ค.62</span>
                         <a>03:05 น.</a>
                        </div>
                    <div class="description" style="font-size: 15px;">
                      พรุ่งนี้มีประชุมอาเซียน สถาบันปิดเรียนไหมคะ
                    </div>
                  </div>
                  <a href="ReplyPage.php" style="text-decoration:none">
                        <div class="ui bottom attached button" style="font-family: FCActiveRegular;">
                                <i class="reply icon"></i>
                                ตอบกลับ
                              </div>
                            </div>
                  </a>
                  
                <div class="card">
                  <div class="content">
                    <div class="header" style="font-family: FCActiveRegular;">สมทรง</div>
                    <div class="meta">
                         <span>21 พ.ย.62</span>
                         <a>18:30 น.</a>
                        </div>
                    <div class="description" style="font-size: 15px;">
                      กรุงเทพน้ำท่วม สถาบันเปิดเรียนปกติไหมคะ
                    </div>
                  </div>
                  <div class="ui bottom attached button" style="font-family: FCActiveRegular;">
                    <i class="reply icon"></i>
                    ตอบกลับ
                  </div>
                </div>
                <div class="card">
                  <div class="content">
                    <div class="header" style="font-family: FCActiveRegular;">สมคิด</div>
                    <div class="meta">
                         <span>12 ต.ค.62</span>
                         <a>12:05 น.</a>
                        </div>
                    <div class="description" style="font-size: 15px;">
                      วันรับปริญญาสถาบันเปิดเรียนตามปกติไหมครับ
                    </div>
                  </div>
                  <div class="ui bottom attached button" style="font-family: FCActiveRegular;">
                    <i class="reply icon"></i>
                    ตอบกลับ
                  </div>
                </div>
              </div>

    </div>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-firestore.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.6.2/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyAHYHL-bCA5QMiuI-bqk9uPev18hSJ68oY",
    authDomain: "reg-chat.firebaseapp.com",
    databaseURL: "https://reg-chat.firebaseio.com",
    projectId: "reg-chat",
    storageBucket: "reg-chat.appspot.com",
    messagingSenderId: "251203992436",
    appId: "1:251203992436:web:1f3e9092f165ceea13ca21",
    measurementId: "G-VP7D6X1X9X"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

  //auth and firebase ref
  const auth = firebase.auth();
  const db = firebase.firestore();

//   // update set
//   db.settings({ timestampInSnapshots: true});
</script>

<script>
auth.onAuthStateChanged(user =>{
    // console.log(user)
    if (user) {
        // console.log('user logged in:', user)
    } else {
        console.log('user logged out');
        // window.location.replace("Log_in.php");
    }
})
</script>
    <!-- <script src="scripts/index.js"></script> -->
    <script src="scripts/auth.js"></script>
    <script src="scripts/index.js"></script>


    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>