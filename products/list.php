<!DOCTYPE html>
<html>
<head>
	<title>List user - session 5</title>
</head>
<body>
	<?php 
	include 'connectdb.php';
	$sql = "SELECT * FROM products";
	$result = mysqli_query($connect, $sql);
	?>
	<a href="products.php">Products</a>
	<h1>List</h1>
	<?php 
		include 'connectdb.php';
		if($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$id = $row['id'];
				echo $row['id'].' - '.$row['name'].' - '.$row['price'].' - '.$row['description'];
				echo " <a href='delete.php?id=$id'>DELETE</a>";
				echo " <a href='edit.php?id=$id'>EDIT</a>";
				echo "<br>";
			}
		} else {
			echo "No products";
		}
	
		if (isset($_POST['ok'])) 
        {
			@search == $_POST['search'];
			@sql == mysql_query("SELECT * FROM products WHERE products LIKE '%$search%'");
			$num_row = mysql_num_rows($sql);
			if($num_row == 0){
				
			}
		}
	
	?>
	
	<form action="#" method="get">
                Search: <input type="text" name="search" />
                <input type="submit" name="ok" value="search" />
            </form>

</body>
</html>