<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
	<?php 
		$id = $_GET['id'];
		include 'server.php'; 
		$sql = "SELECT * FROM users WHERE id = $id";
		$result = mysqli_query($db, $sql);
		while ($row = $result->fetch_assoc()) {
			$username = $row['username'];
			$password = $row['password'];
			$email = $row['email'];
		}
		if(isset($_POST['edit'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			$sql = "UPDATE users SET username = '$username', password = '$password',
			 email = '$email' WHERE id = $id";
			mysqli_query($db, $sql);
			header("Location: listuser.php");
		}	
	?>
	<h1 align="center">Edit form</h1>
	<form method="post" action="edit.php?flag=1&id=<?= $_REQUEST['id'] ?>">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password" value="<?php echo $password; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="edit">Edit</button>
  	</div>
  </form>
</body>
</html>