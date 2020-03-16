<?php 

	session_start();

	include "../BDConnect.php";

	$usuarioId = $_GET['usuario_id'];
	$postAutor = $_GET['post_autor'];
	$postId = $_GET['post_id'];

	$descricao = str_replace("\n", "<br>", $_GET['descricao']);

	if ($usuarioId == 0) 
	{
		$_SESSION['usuario_negado'] = "Você precisa estar logado para realizar esta função";
	}
	else
	{	
		$insert = mysqli_query($con, "INSERT INTO post_resposta VALUES(null, '$descricao', 0, '$usuarioId', '$postId')");
	}


	header("location: Pergunta.php?perguntaId=".$postId."");

 ?>