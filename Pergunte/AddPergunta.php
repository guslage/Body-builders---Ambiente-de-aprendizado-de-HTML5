<?php 
	
	include '../BDConnect.php';
	
	$pergunta  = $_POST['pergunta'];
	$descricao = str_replace("\n", "<br>", $_POST['descricao']);
	$id 	   = $_POST['usuario_id'];	

	$data = date("Y-m-d");

	$insert = mysqli_query($con, "INSERT INTO post VALUES(null, '$pergunta', '$descricao', '$data', 0, $id)");
	$pesquisaId = mysqli_query($con, "SELECT * FROM post WHERE post_id = (SELECT MAX(post_id) FROM post)");
	$fetchId = mysqli_fetch_array($pesquisaId);

	$postId = $fetchId['post_id'];

	header("location: Pergunta.php?perguntaId=".$fetchId['post_id']."");

 ?>
