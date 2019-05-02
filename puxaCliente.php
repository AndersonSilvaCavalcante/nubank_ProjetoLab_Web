<?php  
include_once 'conexao.php';

$consulta = $conn->query("select * from cliente");
while ($dados=$consulta->fetch_assoc()) {
	$nconta = $dados['nconta'];
	$nome = $dados['nome'];
	$cpf = $dados['cpf'];
	$datanas = $dados['datanas'];
	$id = $dados['nconta'];
	echo "<br>";
	echo "<tr>";
	echo "<td><h5>$nconta</h5></td><td><h5>$nome</h5></td><td><h5>$cpf</h5></td><td><h5>$datanas</h5></td><td><a href='exConta.php?id=$id'><button class='btn bg-danger' style='color:white;'>Apagar</button></td>";
}
?>