<?php 
	include_once'conexao.php';
	include_once'verifica_login.php';

	$id = $_SESSION['ncontas'];
	$consulta = $conn->query("select saldo from contap where nconta = $id");
	$dados=$consulta->fetch_assoc();
	$saldop = $dados['saldo'];

	$consulta2 = $conn->query("select saldo from contac where nconta = $id");
	$dados=$consulta2->fetch_assoc();
	$saldo = $dados['saldo'];
	$tpoup = $_POST['tPoup'];

	if ($saldo > $tpoup ) {
	$nvalorCor = $saldo-$tpoup;
	$nvalorPou = $saldop+$tpoup;


	$sql = "update contac set saldo = $nvalorCor where nconta = $id";
	if ($conn->query($sql) == true) {
		header('Location: pClienteDual.php');
	}else{
		echo "Error: ".$sql."<br>".$conn->error;
	}
	$sql2 = "update contap set saldo = $nvalorPou where nconta = $id";
	if ($conn->query($sql2) == true) {
		header('Location: pClienteDual.php');
	}else{
		echo "Error: ".$sql."<br>".$conn->error;
	}$conn->close();
	}else{
		echo "ops";
	}

 ?>