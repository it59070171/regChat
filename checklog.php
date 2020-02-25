<?php
    $user_name = $_POST['user_name'];
    $user_pass = $_POST['user_pass'];

    ob_start();
    $hostname = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "regadmin";
    $tbname = "adminmember";

    mysql_connect($hostname,$user,$pass) or die("Cannot connect to database.");
    mysql_select_db($dbname) or die("Cant find database.");

    $sql = "select * from $tbname where Username='$user_name' and Password='$user_pass' ";
    $dbquery = mysql_db_query($dbname,$sql);

    $num_rows = mysql_num_rows($dbquery);
    if ($num_rows == 1){
        $_SESSION["Username"] = $user_name;
        $_SESSION["Password"] = $user_pass;
        echo 'You are log in';
    }else {
        echo 'Wrong username or password';
    }
?>