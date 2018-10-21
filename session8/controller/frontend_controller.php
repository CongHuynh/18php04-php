<?php 

	class FrontendController {
		function handleRequest(){
		$action = isset($_GET['action'])?$_GET['action']:'';

			include 'view/frontend/home.php';
		}
	}
?>