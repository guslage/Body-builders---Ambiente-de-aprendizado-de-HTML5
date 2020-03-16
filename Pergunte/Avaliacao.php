<?php 
	session_start();

	include "../BDConnect.php";

	$post_id    = $_GET['post_id'];

	$usuario_id = $_GET['usuario_id'];

	$post_Autor = $_GET['post_autor'];

	$avaliacao  = $_GET['avaliacao'];

	if ($usuario_id == 0) 
	{
		$_SESSION['usuario_negado'] = "Você precisa estar logado para realizar esta função";
	}
	else
	{
		if ($usuario_id == $post_Autor) 
		{
			$_SESSION['erroAutor'] = "Você não pode avaliar a própria duvida";
		}
		else
		{
			$selectAvaliacao = mysqli_query($con, "SELECT * FROM post_avaliacao WHERE post_avaliacao_usuario_id = $usuario_id AND post_avaliacao_post_id = $post_id");

			$rowsUsuario = mysqli_affected_rows($con);

			if ($rowsUsuario < 1) 
			{
				$insertAvaliacao = mysqli_query($con, "INSERT INTO post_Avaliacao VALUES(null, $avaliacao, $post_id, $usuario_id)");
			}
			else
			{
				$deleteAvaliacao = mysqli_query($con, "DELETE FROM post_avaliacao WHERE post_avaliacao_usuario_id = $usuario_id AND post_avaliacao_post_id = $post_id");
			}
		}
	}
	
	header('Location: ' . $_SERVER['HTTP_REFERER']);
 ?>