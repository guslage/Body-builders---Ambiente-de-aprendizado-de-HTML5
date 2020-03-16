<?php 

	include "../BDConnect.php";

	$operacao = $_GET['op'];
	$usuario_id = $_GET['id'];

	switch ($operacao) {
		case 1:
			
			$deleteUsuario = mysqli_query($con, "DELETE FROM usuario WHERE usuario_id = $usuario_id");

			$deleteUsuario = mysqli_query($con, "DELETE FROM post WHERE post_usuario_id =$usuario_id");

			$deleteUsuario = mysqli_query($con, "DELETE FROM post_reposta WHERE resposta_usuario_id = $usuario_id");

			$deleteUsuario = mysqli_query($con, "DELETE FROM post_reposta_avaliacao WHERE reposta_avaliacao_usuario_id = $usuario_id");

			$deleteUsuario = mysqli_query($con, "DELETE FROM post_avaliacao WHERE resposta_avaliacao_usuario_id = $usuario_id");

			break;

		case 2:

			$updateUsuario = mysqli_query($con, "UPDATE usuario SET usuario_nivelacesso = 1 WHERE usuario_id = $usuario_id");

			break;	
		
	}


	header('Location: ' . $_SERVER['HTTP_REFERER']);
	


 ?>