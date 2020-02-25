<?php
$connect = mysqli_connect("localhost", "root", "", "regadmin");
if(isset($_POST["UserID"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 $query = "UPDATE adminmember SET ".$_POST["column_name"]."='".$value."' WHERE UserID = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
}
?>
