<?php 
session_start();

	include 'BDConnect.php';
	$user  = $_POST['username'];
	$senha = $_POST['senha'];

	$query 	= mysqli_query($con, "SELECT * FROM usuario WHERE usuario_username = '$user' AND usuario_senha = '$senha'");
	$rows   = mysqli_affected_rows($con);

	if ($rows == 1) {
		while ($registro = mysqli_fetch_array($query)) {
			$_SESSION['usuario_id'] = $registro['usuario_id'];
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			
		}
	}else{
		$_SESSION['Erro_login'] = "<span color='red'>Nome ou senha inválidos</span>";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

 ?>