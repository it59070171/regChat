<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
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

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body style="background-color: whitesmoke;">
    <br><br>
    <img src="https://images.vexels.com/media/users/3/139911/isolated/preview/1afb4038427b2bd8edd275940aea269d-chat-service-icon-by-vexels.png"
        alt="" style="width:6%;">
    <h1 style="font-family: FCActiveRegular;text-align: center;">ระบบแอดมินแชทบอทไลน์ สจล.</h1>
    <hr>
    <br>

    <div class="ui centered card">
        <div class="ui card">
            <div class="center aligned content">
                <div class="header" style="font-family: FCActiveRegular;font-size:20px;">เข้าสู่ระบบ</div>
            </div>
            <div class="content">
                <!-- <div class="center aligned header">Log in</div> -->
                <div class="center aligned description">
                    <form class="ui form" id="login-form">
                        <div class="field">
                            <!-- <label>First Name</label> -->
                            <input type="text" name="user_name" id="login-email" placeholder="อีเมลผู้ใช้" required
                                style="font-family: FCActiveRegular;">
                        </div>
                        <div class="field">
                            <!-- <label>Last Name</label> -->
                            <input type="password" name="user_pass" id="login-password" placeholder="รหัสผ่าน" required
                                style="font-family: FCActiveRegular;">
                        </div>
                        <div class="field">
                        </div>
                        <div class="extra content">
                            <button class="fluid ui inverted orange button" 
                                style="font-family: FCActiveRegular;font-size:18px;" type="submit" >ยืนยัน</button>
                        </div>
                        <a id="logout">ออกจากระบบ</a>
                        <!-- <span><script>${user.email}</script></span> -->
                    </form>
                </div>
            </div>


        </div>
    </div>

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
auth.onAuthStateChanged(user =>{
    // console.log(user)
    if (user) {
        console.log('user logged in:', user)
        window.location.replace("Home.php");
    } else {
        console.log('user logged out');
        // window.location.replace("Log_in.php");
    }
})
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js">
    </script>
    <!-- <script src="scripts/index.js"></script> -->
    <script src="scripts/auth.js"></script>

</body>

</html>