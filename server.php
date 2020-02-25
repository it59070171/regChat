<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'regadmin');

	// initialize variables
	$Firstname = "";
    $Lastname = "";
    $Username = "";
    $Password = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];

        mysqli_query($db, "INSERT INTO user (Firstname, Lastname, Username, Password) VALUES ('$Firstname', '$Lastname', '$Username', '$Password')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: dbcon.php');
    }
    
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
    
        mysqli_query($db, "UPDATE user SET Firstname='$Firstname', Lastname='$Lastname', Username='$Username', Password='$Password' WHERE id=$id");
        $_SESSION['message'] = "Address updated!"; 
        header('location: dbcon.php');
    }

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM user WHERE id=$id");
        $_SESSION['message'] = "Address deleted!"; 
        header('location: dbcon.php');
    }

?>