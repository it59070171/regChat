<?php  

$user = 'root';
$pass = '';
$db = 'regadmin';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

echo"Great work!!!";
  
$rslogin = mysql_query("select * from adminmember where (username='$username') and (password='$password')");  
$rowlogin=mysql_fetch_array($rslogin);  
$num_rows = mysql_num_rows($rslogin);   //เช็คว่าค่า user และ password ที่กรอกเข้ามามีอยู่หรือไม่ ถ้าเจอก็ login ได้ 
  
if(empty($num_rows)) {  // ถ้าไม่เจอ record เลย
    echo "username หรือ password ไม่ถูกต้อง   <a href=login.php>แก้ไข</a>";  
  
} else {  
    $_SESSION['sessusername'] = $rowlogin['user'];  
    @header("Location:Home.php");  // redirect ไปหน้า memberzone.php
    exit;  
}  
?> 