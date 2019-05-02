if ($email == "adm@mail.com" && $senha == "adm") {
		$_SESSION['nome'] = $nome;
		$_SESSION['nconta'] = $nconta;
		header("location: admpage.php");
	}	else {
		$_SESSION['nome'] = $nome;
		$_SESSION['nconta'] = $nconta;
		header('location: teste.php');
		exit();	
	}