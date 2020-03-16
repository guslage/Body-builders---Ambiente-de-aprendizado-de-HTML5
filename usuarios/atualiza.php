<?php 
	
	include "../BDConnect.php";

	$usuario_id = $_POST['id'];

	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$senha = $_POST['senha'];
	$recsenha = $_POST['recsenha'];


	$update = mysqli_query($con, "UPDATE usuario SET usuario_nome = '$nome', usuario_sobrenome = '$sobrenome', usuario_email = '$email', usuario_senha = '$senha', usuario_recuperacao = '$recsenha', usuario_username = '$username' WHERE usuario_id = $usuario_id");

	echo "UPDATE usuario SET usuario_nome = '$nome', usuario_sobrenome = '$sobrenome', usuario_email = '$email', usuario_senha = '$senha', usuario_recuperacao = '$recsenha' WHERE usuario_id = $usuario_id";

	header('Location: ' . $_SERVER['HTTP_REFERER']);

?>