<!DOCTYPE html>
<html>
<head>
	<title>List user</title>
</head>
<body>
	<?php 
	include 'server.php';
	$sql = "SELECT * FROM users";
	$result = mysqli_query($db, $sql);
	?>
	<a href="login.php">Products</a>
	<h1>List</h1>
	<?php 
		include 'server.php';
		if($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$id = $row['id'];
				echo $row['id'].' - '.$row['username'].' - '.$row['email'].' - '.$row['password'];
				echo " <a href='delete.php?id=$id'>DELETE</a>";
				echo " <a href='edit.php?id=$id'>EDIT</a>";
				echo "<br>";
			}
		} else {
			echo "No products";
		}
	
	?>
	
</body>
</html>