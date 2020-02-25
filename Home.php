<?php
// session_start();
// if (!isset($_SESSION["login-email"])) {
//     header("location: Log_in.php");
// }
?>
<html>

<head>
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
        }

        p {
            font-size: 20px;
            color: black;
        }

        span {
            font-size: 20px;
        }

        h1,
        a {
            font-family: 'FCActiveRegular' !important;
            color: black;
        }

        .container {
            position: relative;
            text-align: center;
            color: white;
        }

        .top-left {
            position: absolute;
            top: 20%;
            left: 8px;
        }

        /* .jumbotron {
            background-image: url("bg.png");
            background-size: cover;
            height: 700px;
        } */
    </style>

    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="background-color: whitesmoke;">
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
            <!-- <a href="dbcon.php" style="text-decoration:none"><span style="font-size: 17px;">แก้ไขข้อมูลพนักงาน</span> </a>&nbsp;&nbsp;&nbsp; -->
            <form class="form-inline my-2 my-lg-0" id = "login-form">
                <a id="logout" class="fluid ui inverted orange button">ออกจากระบบ</a>
            </form>
            <span class="navbar-text">
                <!-- <button class="fluid ui inverted orange button" type="submit">Sign up</button> -->
            </span>
        </div>
    </nav>


    <div class="container">
        <!-- <img src="bg.png" alt="bg" width="100%" height="92%"> -->
        <div class="ui grid">
            <div class="eight wide column">
                <br><br>
                <img src="111.png" alt="bg">
            </div>
            <div class="eight wide column">
                <br>
                <!-- <h1>ยินดีต้อนรับ คุณ <script>
                const setupUI =(user) => {
                    if (user){
                        const html = `<div> ${user.email}</div>`;
                        accountDetails.innerHTML = html;
                       
                    } else {

                    }
                }
                </script></h1> -->
                <h1>ยินดีต้อนรับ คุณ Admin!</h1>
                <div class="top-left">
                    <div class="ui three column grid">
                        <div class="column">
                            <a class="ui fluid card" href="AnsQues.php" style="text-decoration:none">
                                <div class="image">
                                    <img src="https://image.freepik.com/free-vector/mobile-phone-template_1347-132.jpg"
                                        width="20%" height="20%">
                                </div>
                                <div class="content">
                                    <div class="center aligned header" style="font-family: FCActiveRegular;">ส่งข้อความ</div>
                                </div>
                            </a>
                        </div>
                        <div class="column">
                            <a class="ui fluid card" href="choosesendQ.php" style="text-decoration:none">
                                <div class="image">
                                    <img src="https://image.freepik.com/free-vector/man-doubting-design_1133-263.jpg"
                                        width="20%" height="20%">

                                </div>
                                <div class="content">
                                    <div class="center aligned header" style="font-family: FCActiveRegular;">เช็คคำถาม</div>
                                </div>
                            </a>
                        </div>
                        <div class="column">
                            <a class="ui fluid card" href="ReplyHistory.php" style="text-decoration:none">
                                <div class="image">
                                    <img src="https://i.imgur.com/CjzQxJ7.jpg"
                                        width="20%" height="20%">
                                </div>
                                <div class="content">
                                    <div class="center aligned header"
                                    style="font-family: FCActiveRegular;">ประวัติการตอบกลับ</div>
                                </div>
                            </a>
                        </div>
                        <span>***</span>
                        <p>ระบบสำหรับประกาศข่าวสาร หรือข้อความเข้าสู่แชทบอทของสำนักทะเบียนและประมวลผล
                            ของสถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง โปรดเลือดเมนูที่ท่านต้องการ
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <hr class="my-4">
        <img src="https://ihost.it.kmitl.ac.th/assets/img/logo.png" alt="" style="width: 30%;"><br>
        <span style="font-size: 15px; color: black;">ไลน์แชทบอท สำนักทะเบียนและประมวลผล
            สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง @KMITLRegChatBot</span>
        <p style="font-size: 15px;">จัดทำโดย นักศึกษาคณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง
        </p><br>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js">
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

            <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.6.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.6.2/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.6.2/firebase-firestore.js"></script>

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
var user = firebase.auth().currentUser;

if (user) {
  // User is signed in.
} else {
    // window.location.href = "Log_in.php";
}
</script>

    <script src="scripts/auth.js"></script>
</body>

</html>