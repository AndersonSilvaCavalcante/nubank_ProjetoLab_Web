<?php

  @session_start();
  if($_SESSION['usuario']!="adm@mail.com") {
		header('location: login.php');
		exit();
	}

?>