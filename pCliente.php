<!DOCTYPE html>
<?php 
include_once'verifica_login.php';
include_once'conexao.php';
 ?>
<html>
<head>
	<title>NuConta</title>
	<?php  
		include_once'aqinclude/styles.php';
	?>
</head>
<body>
<?php  
include_once 'conexao.php';
$id = $_SESSION['ncontas'];
$consulta = $conn->query("select * from cliente where nconta = $id ");
while ($dados=$consulta->fetch_assoc()) {
	$nconta = $dados['nconta'];
	$nome = $dados['nome'];
	$cpf = $dados['cpf'];
	$dn = $dados['datanas'];
	/*echo "<br>";
	echo "<tr>";
	echo "<td>$nconta</td><br><td>$nome</td><br><td>$cpf</td><br><td>$dn</td>";*/
}
$consulta2 = $conn->query("select * from contac where nconta = $id ");
while ($dados=$consulta2->fetch_assoc()) {
	$saldo = $dados['saldo'];
	/*echo "<br>";
	echo "<tr>";
	echo "<td>$saldo</td><br>";*/
}

$query = $conn->query("select * from contap where nconta = $id");
$row = mysqli_num_rows($query);

if ($row == 1 ) {
	
	$tPou= "disabled=''";
	$tPo="name=''";

} else if($row == 0){

	$tPou= "name=''";
	$tPo="disabled=''";
}	
?>
<?php
	include_once'menu.php';

?>
<br>
<div class="container col-md-6" style="background-color: #ffff;border:1.5pt solid;border-color: #8b05be; border-radius: 15px;">
	<br>
      <h2 class="rounded mx-auto d-block featurette-heading" style="color: #8b05be;">NuConta</h2>
    <div class="col-md-5"> 
		<table class="table striped">
			<h5>Saldo</h5>
			<tr>
				<h4>R$<?php echo "$saldo"; ?></h4>
			</tr>
		</table>
	</div>
	<div class="col-md-5">
	<form action="depositar.php" method="POST">
		<h6>Depositar na conta</h6>
			<input type="number" class="form-control" name="deposito" placeholder="Digite um valor">
			<br>
			<input type="submit" value="Depositar" class="btn" style="background-color:  #8b05be; border:1.5pt solid;border-radius: 5px; border-color: #8b05be;color: white;font-weight: bold;height: 7%;transition: 1s;">
		</form>
	</div>
	<br>
	<a href="pPoupanca.php"><button class="btn" style="background-color: white; border:1.5pt solid;border-radius: 5px; border-color: #8b05be;color: #8b05be;font-weight: bold;height: 7%;transition: 1s;" <?php echo "$tPou" ?> >Criar NuPoupança</button></a>
	<a href="pClienteDual.php"><button class="btn" style="background-color: white; border:1.5pt solid;border-radius: 5px; border-color: #8b05be;color: #8b05be;font-weight: bold;height: 7%;transition: 1s;" <?php echo "$tPo" ?> >Ver conta NuPoupança</button></a>
	<br>
<br>
</div>
</body>
</html>