<?php
session_start();
$user_name=$_POST['user_name'];//username
$user_pass=$_POST['user_pass'];//password 
// $user_name = $_POST[user_name];
// $user_pass = $_POST[user_pass];


$con=mysqli_connect("localhost","root","","regadmin");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `user` WHERE `Username`='$user_name' && `Password`='$user_pass'");
$count=mysqli_num_rows($result);
if($count==1)
{
	echo "Login success";
	// $_SESSION['log']=1;
	$_SESSION["Username"]=$user_name;
	$_SESSION["Password"]=$user_pass;
		
	header("location: Home.php");

}
else
{
	echo "please fill proper details";
	header("location: Log_in.php");
}


?>