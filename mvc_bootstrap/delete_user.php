<?php 
	include 'connectdb.php';
	//include 'view/server/delete_user.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM users WHERE id = $id";
	mysqli_query($connect, $sql);
	//header("Location: view/list_user.php");

?>