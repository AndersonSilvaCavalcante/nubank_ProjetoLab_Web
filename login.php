<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
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
	 	<div class="rounded mx-auto d-block  container col-md-3">
      <h2 class="rounded mx-auto d-block featurette-heading" style="color: #8b05be;">Entre na NuConta</h2>
    </div>
    <br>
	<div class="container col-md-5 center block">
  	<form method="POST" action="loginCrud.php" class="form-group">
    <input type="number" class="form-control" name="nconta" placeholder="Conta" required="">
    <br>
    <input type="password" class="form-control" name="senha" placeholder="Senha" required="" maxlength="4" minlength="4">
    <br>
    <input type="submit" name="" value="Entrar" class="btn" style="background-color: white; border:1.5pt solid;border-radius: 5px; border-color: #8b05be;color: #8b05be;font-weight: bold;height: 7%;transition: 1s;">
    <a href="cadastrar.php">Ainda não é usuário?&nbsp;<STRONG>Cadastre-se</STRONG></a>
    <div id="" class="container " style="position: relative; ">
    <?php 
      if (isset($_SESSION['nao_autenticado'])):
    ?>
    <div class="aviso"">
      <p class="text">Senha ou email estão incorretos</p>
    </div>
      <?php 
        unset($_SESSION['nao_autenticado']);
          endif;
      ?>
  </div>
  </form>
</div>
</body>
</html>