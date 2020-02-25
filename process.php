<?php 
 
// $host="localhost";
$user="root";
$password="";
$db="regadmin";
 
mysql_connect('localhost',$user,$password);
mysql_select_db($db);
 
if(isset($_POST['ad_username'])){
    
    $uname=$_POST['ad_username'];
    $password=$_POST['ad_password'];
    
    $sql="select * from adminmember where user='".$username."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>