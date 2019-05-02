
<html lang="pt-br">
<head>
	<title>NuBank</title>
	<meta charset="utf-8">
	<?php  
	include_once'aqinclude/styles.php';
	?>
</head>
<body>
	<?php  
		include_once'barra.php';
	?>
	<br>
	<br>
	<br>
	<br>
	<div class="rounded mx-auto d-block  container col-md-3">
      <h2 class="rounded mx-auto d-block featurette-heading" style="color: #8b05be;">NuFuncionário</h2>
    </div>
    <br>
	<div class="rounded mx-auto d-block container col-md-4 ">
      <div class="row" style="color: #8b05be;">
        <div class=" button col-sm-11" style="border:1.5pt solid;border-radius: 5px; border-color: #8b05be;height: 7%;transition: 1s;">
          <a href="login.php" class="divcomlink" style="margin-top: 1.5%; text-decoration:none;outline:0;color: inherit;">
          Conta cliente
        </a>
        </div>
        <br>
        <br>
         <div class=" button col-sm-11" style="border:1.5pt solid;border-radius: 5px; border-color: #8b05be;height: 7%;transition: 1s;">
          <a href="cadastrar.php" class="divcomlink" style="margin-top: 1.5%; text-decoration:none;outline:0;color: inherit;">
          Cadastrar Cliente
        </a>
        </div>
        <br>
        <br>
         <div class=" button col-sm-11" style="border:1.5pt solid;border-radius: 5px; border-color: #8b05be;height: 7%;transition: 1s;">
          <a href="vClientes.php" class="divcomlink" style="margin-top: 1.5%; text-decoration:none;outline:0;color: inherit;">
          Visualizar clientes
        </a>
        </div>
        <!--<br>
        <br>
         <div class=" button col-sm-11" style="border:1.5pt solid;border-radius: 5px; border-color: #F44336;height: 7%;transition: 1s;color: #F44336;">
          <a href="logout.php" class="divcomlink" style="margin-top: 1.5%; text-decoration:none;outline:0;color: inherit;">
          Sair
        </a>
        </div>-->
      </div>   
	 </div>
</body>
</html>