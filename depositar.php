<?php 
	include_once'conexao.php';
	include_once'verifica_login.php';

	$id = $_SESSION['ncontas'];
	$consulta2 = $conn->query("select saldo from contac where nconta = $id");
	$dados=$consulta2->fetch_assoc();
	$saldo = $dados['saldo'];

	$depos = $_POST['deposito'];
	$nvalor = $saldo+$depos;

	$sql = "update contac set saldo = $nvalor where nconta = $id";
	if ($conn->query($sql) == true) {
		header('Location: pCliente.php');
	}else{
		echo "Error: ".$sql."<br>".$conn->error;
	}$conn->close();
 ?>