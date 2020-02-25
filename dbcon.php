<?php  include('server.php'); 
if (!isset($_SESSION["Username"])) {
    header("location: Log_in.php");
}
?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM user WHERE id=$id");

		$n = mysqli_fetch_array($record);
			 
		if (is_null($n) == false ) {
			$Firstname = $n['Firstname'];
            $Lastname = $n['Lastname'];
            $Username = $n['Username'];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<style>
		 @font-face {
            font-family: 'FCActiveRegular';
            src: url('FCActiveRegular.eot') format('embedded-opentype'), url('FCActiveRegular.woff') format('woff'), url('FCActiveRegular.ttf') format('truetype'), url('FCActiveRegular.svg') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        /* body {
            font-family: 'FCActiveRegular' !important;
		}
		p {
            font-size: 25px;
            color: black;
        } */
	</style>
    <title>User Edit</title>
	<link rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
    
<?php $results = mysqli_query($db, "SELECT * FROM user"); ?>

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
	<div class="container">
	<div class="ui grid">
	<div class="five wide column">
		<form method="post" action="server.php" class="ui form">
		<div class="input-group">
			<label>Firstname</label>
			<input type="text" name="Firstname" value="<?php echo $Firstname; ?>">
		</div>
		<div class="input-group">
			<label>Lastname</label>
			<input type="text" name="Lastname" value="<?php echo $Lastname; ?>">
        </div>
        <div class="input-group">
			<label>Username</label>
			<input type="text" name="Username" value="<?php echo $Username; ?>">
		</div>
		<br>
		<div class="input-group">
        <?php if ($update == true): ?>
	    <button class="ui primary button" type="submit" name="update" style="background: #556B2F;" >update</button>
        <?php else: ?>
	    <button class="ui primary button" type="submit" name="save" >Save</button>
        <?php endif ?>
        </div>
        
        <input type="hidden" name="id" value="<?php echo $id; ?>">

    </form>
  
		</div>
		<div class="eleven wide column">
		<table class="ui celled table">
	<thead>
		<tr>
			<th>Firstname</th>
            <th>Lastname</th>
            <th>Username</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
    
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['Firstname']; ?></td>
            <td><?php echo $row['Lastname']; ?></td>
            <td><?php echo $row['Username']; ?></td>
			<td>
				<a href="dbcon.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
		</div>
		
	</div>
	</div>
	
	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js">
        </script>
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
</html>