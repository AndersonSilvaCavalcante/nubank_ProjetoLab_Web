<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro Cliente</title>
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
	 	<div class="rounded mx-auto d-block  container col-md-3">
      <h2 class="rounded mx-auto d-block featurette-heading" style="color: #8b05be;">Abra uma NuConta</h2>
    </div>
    <br>
	<div class="container col-md-5 center block">
  	<form method="POST" action="pCadastro.php" class="form-group">
  	<label>Nome completo</label>
    <input type="text" class="form-control" name="nome" placeholder="Nome completo" required="" minlenght="8"maxlength="50">
    <br>
    <label>Data de nascimento</label>
    <input type="text" class="form-control" name="dn" placeholder="dd/mm/aaaa" required="" maxlength="10" minlength="10">
    <br>
    <label>CPF</label>
    <input type="text" class="cpf form-control" name="cpf" id="cpf" placeholder="CPF" maxlength="11" minlength="11" required="">
    <br>
    <label>RG</label>
    <input type="text" class="form-control" name="rg" placeholder="RG" maxlength="9" minlength="9" required=""> 
  <!--
  <div class="form-group">
    <label>Endereço</label>
    <input type="text" class="form-control" placeholder="Rua dos Bobos, nº 0">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Cidade</label>
      <input type="text" class="form-control" name="cidad">
    </div>
    <div class="form-group col-md-4">
      <label>UF</label>
   		<input type="text" class="form-control" name="uf">
    </div>
    <div class="form-group col-md-2">
      <label>CEP</label>
      <input type="text" class="form-control" name="cep" >
    </div>
  </div>--> 
  <br>
    <label>Senha</label>
    <input type="password" class="form-control" name="senha" placeholder="Senha" required="">
  <br>
    <input type="submit" name="" value="Cadastrar" class="btn" style="background-color: white; border:1.5pt solid;border-radius: 5px; border-color: #8b05be;color: #8b05be;font-weight: bold;height: 7%;transition: 1s;">
  </div>
  </form>
</div>
<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="jquery/jquery.mask.min.js"></script>
<script type="text/javascript">,
  $('.cpf').mask('000.000.000-00');
</script>
</body>
</html>