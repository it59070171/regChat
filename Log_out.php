<?php
 
session_start();
session_destroy();
 
echo 'Logged out';
header("location: HomeB4.php");

?>