<?php 
	include 'server.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM users WHERE id = $id";
	mysqli_query($connect, $sql);
	header("Location: listuser.php");

?>