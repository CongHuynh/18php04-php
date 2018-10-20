<?php 
	class Productcate {
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		function InsertProductcate($name){
			$sql = "INSERT INTO categories (name) VALUES ('$name')";
			return mysqli_query($this->conn, $sql);
		}
		function getListProductcate(){
			$sql = "SELECT * FROM categories";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function deleteProductcate($id){
			$sql = "DELETE FROM categories WHERE id = $id";
			return mysqli_query($this->conn, $sql);

		}
		
	}
?>