<?php
include_once'conexao.php';
$query = $conn->query("select nconta from cliente");
$row = mysqli_num_rows($query);


if ($row == 15) {
	
	echo "sorry";
	
	exit();


}else{

$nome = isset($_POST['nome']) == true ?$_POST['nome']:"";
$senha = isset($_POST['senha']) == true ?$_POST['senha']:"";
$cpf = isset($_POST['cpf']) == true ?$_POST['cpf']:"";
$rg = isset($_POST['rg']) == true ?$_POST['rg']:"";
$dn = isset($_POST['dn']) == true ?$_POST['dn']:"";
$datahora = date('d/m/y');
$senha = md5($senha);

$sql = "insert into cliente(nome, senha, cpf, rg, datanas, datacria) values('$nome', '$senha', '$cpf', '$rg', '$dn', '$datahora')";

$sql2 = "insert into contac(saldo) values (100)";
if ($conn->query($sql) == true) {
	header('Location: vClientes.php');
}else{
	echo "Error: ".$sql."<br>".$conn->error;
}
if ($conn->query($sql2) == true) {
	header('Location: vClientes.php');
}else{
	echo "Error: ".$sql2."<br>".$conn->error;
}$conn->close();
	}

 ?>