<?php
include_once'conexao.php';
include_once'verifica_login.php';
$nconta = $_SESSION['ncontas'];

$sql = "insert into contap(nconta) values('$nconta')";

if ($conn->query($sql) == true) {
	header('Location: pClienteDual.php');
}else{
	echo "Error: ".$sql."<br>".$conn->error;
}$conn->close();
 ?>