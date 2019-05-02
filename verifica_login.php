<?php 

@session_start();


if(!$_SESSION['ncontas']) {
		header('location: login.php');
		exit();
	}
 ?>