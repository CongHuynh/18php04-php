<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php 
		include 'connectdb.php'; 
		if(isset($_POST['submit'])) {
			$name = $_POST['name'];
			$price = $_POST['price'];
			$description = $_POST['description'];
			$sql = "INSERT INTO products (name, price, description) VALUES ('$name', '$price', '$description')";
			mysqli_query($connect, $sql);
			header("Location: list.php");
			
		}	
	?>
	<h1 >Products</h1>
	<form action="#" name="Products" method="post">
	
		<p>Name:<input type="text" name="name"></p>

		<p>Price:<input type="text" name="price"></p>
		
		<p>Description:<input type="text" name="description"></p>

		<p><input type="submit" name="submit" value="Add"></p>
	</form>
</body>
</html>