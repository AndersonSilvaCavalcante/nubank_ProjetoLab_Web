<?php  
include_once 'conexao.php';
?>
<meta charset="utf-8">
 	<?php  
 		include_once'aqinclude/styles.php';
 	?>
 <?php 
 	include_once'barra.php';
  ?>	
  <br>
  <br>
<div class="container col-md-8" style="background-color: #ffff;border:1.5pt solid;border-color: #8b05be; border-radius: 15px;">
	<br>
      <h2 class="rounded mx-auto d-block featurette-heading" style="color: #8b05be;">NuUsuários</h2>
	<table class="table striped">
		<thead>
			<tr>
				<th><h3>Conta</h3></th>
				<th><h3>Nome</h3></th>
				<th><h3>CPF</h3></th>
				<th><h3>Data de nascimento</h3></th>
			</tr>
		</thead>
		<tbody>
			<?php
				include_once 'puxaCliente.php' 
			 ?>
		</tbody>
	</table>
		<a href="cadastrar.php"><button  class="btn" style="background-color: white; border:1.5pt solid;border-radius: 5px; border-color: #8b05be;color: #8b05be;font-weight: bold;height: 7%;transition: 1s;">Cadastrar</button></a>
		<a href="index.php"><button  class="btn" style="background-color:  #8b05be; border:1.5pt solid;border-radius: 5px; border-color: #8b05be;color: white;font-weight: bold;height: 7%;transition: 1s;">Início</button></a>
		<br>
		<br>
</div>