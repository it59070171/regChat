<html>

<head>
    <meta charset="utf-8">
    <title>AddMessage</title>
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

    <br><br>

    <div class="ui centered card" style="width: 60%;">
        <div class="content">
            <div class="header" style="font-family: FCActiveRegular;font-size:25px;">ส่งข้อความประกาศไปสู่หน้าแชทบอท
            </div>
        </div>
        <div class="content">
            <form class="ui form" id="addForm">
                <div class="ui top attached tabular menu" style="font-family: FCActiveRegular;font-size:18px;">
                    <a class="item" href="AddMsg.php">
                        ประกาศทั้งหมด
                    </a>
                    <a class="item active">
                        ประกาศคณะ
                    </a>
                    <a class="item" href="AddM3.php">
                        ประกาศรหัสนักศึกษา
                    </a>
                    <div class="right menu">
                        <div class="item">
                        </div>
                    </div>
                </div>
                <div class="ui bottom attached segment">
                    <!-- <label for="" style="font-size:20px;"><b>นักศึกษาคณะ :</b></label>&nbsp; -->
                    <select class="ui dropdown" style="font-size:15px;">
                        <option value="">เลือกคณะ</option>
                        <option value="IT">เทคโนโลยีสารสนเทศ</option>
                        <option value="EN">วิศวกรรมศาสตร์</option>
                        <option value="ID">สถาปัตยกรรมศาสตร์</option>
                        <option value="ART">ศิลปกรรมศาสตร์</option>
                        <option value="IN">คุรุอุตสาหกรรม</option>
                        <option value="FAM">บริหาธุรกิจ</option>
                        <option value="AGR">เทคโนโลยีการเกษตร</option>
                    </select>
                    <div class="field"><br>
                        <!-- <label>กรุณากรอกข้อความ :</label> -->
                        <!-- <input type="text" name="notice_all" value=""> -->
                        <input type="file" name="myFile">
                        <textarea name="notice_all" value="notice_all" placeholder="กรุณากรอกข้อความ"></textarea>
                    </div>
                    <button class="ui right floated button" style="font-family: FCActiveRegular;font-size:15px;"
                        type="submit">ยืนยัน</button>
                </div>

            </form>
        </div>
    </div>


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
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-analytics.js"></script>

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyCHpnh3NcLATYgtPkL6Q2ExNm-fKeYErZI",
        authDomain: "linechat-41a72.firebaseapp.com",
        databaseURL: "https://linechat-41a72.firebaseio.com",
        projectId: "linechat-41a72",
        storageBucket: "linechat-41a72.appspot.com",
        messagingSenderId: "577084523082",
        appId: "1:577084523082:web:cdfceb325b7e6e5c02dcb3",
        measurementId: "G-K6NY960NSF"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
</script>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/7.2.3/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/7.2.3/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.3.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.3.5/firebase-firestore.js"></script>
<script src="app.js" charset="utf-8"></script>

</html>