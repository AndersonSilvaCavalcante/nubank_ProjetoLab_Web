<?php
	include 'conexao.php';
	
	$id = $_GET['id'];
	
	$deletar = "DELETE FROM contap WHERE nconta = '$id'";
	$deletar1 = "DELETE FROM contac WHERE nconta = '$id'";
	$deletar2 = "DELETE FROM cliente WHERE nconta = '$id'";

	if($conn->query($deletar) == true) {
		header('location: vClientes.php');
	}
			
	else{
		echo "Error: ".$deletar."<br>".$deletar->error;
	}
	
	if($conn->query($deletar1) == true) {
		header('location: vClientes.php');
	}
			
	else{
		echo "Error: ".$deletar1."<br>".$deletar1->error;
	}
	if($conn->query($deletar2) == true) {
		header('location: vClientes.php');
	}
			
	else{
		echo "Error: ".$deletar2."<br>".$deletar2->error;
	}
?>