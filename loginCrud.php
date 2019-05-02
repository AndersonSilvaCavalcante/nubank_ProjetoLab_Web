<?php 
  
  session_start();


  include_once 'conexao.php';
  

if (empty($_POST['nconta']) ||  empty($_POST['senha'])) {

    header('location: login.php');
    exit();
}

$nconta = mysqli_real_escape_string($conn, $_POST['nconta']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);


$query = $conn->query("select nconta, senha, nome from cliente where nconta = '{$nconta}' and senha =md5('{$senha}')");
$row = mysqli_num_rows($query);


if ($row == 1) {
	
	$_SESSION['ncontas'] = $nconta;
	header('location: pCliente.php');
	
	exit();


}else{

	$_SESSION['nao_autenticado'] = true;
	header('location: cadastrar.php');
	exit();
}
 ?>
