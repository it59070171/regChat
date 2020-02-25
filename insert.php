<?php
$connect = mysqli_connect("localhost", "root", "", "regadmin");
if(isset($_POST["Name"], $_POST["Lastname"]))
{
 $first_name = mysqli_real_escape_string($connect, $_POST["Name"]);
 $last_name = mysqli_real_escape_string($connect, $_POST["Lastname"]);
 $query = "INSERT INTO adminmember(Name, Lastname) VALUES('$Name', '$Lastname')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
