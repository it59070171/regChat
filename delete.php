<?php
$connect = mysqli_connect("localhost", "root", "", "regadmin");
if(isset($_POST["UserID"]))
{
 $query = "DELETE FROM adminmember WHERE UserID = '".$_POST["UsreID"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
