<?php
include 'connectdb.php';
$id =$_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($connect,$sql);
header("Location:products.php");
?>
