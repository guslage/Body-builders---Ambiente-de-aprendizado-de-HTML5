<?php 
	session_start();

	include "../BDConnect.php";

	$perguntaId = $_GET['resposta_id'];

	$operacao = $_GET['op'];

	$post_id = $_GET['post_id'];

	$conta_respostas = mysqli_query($con, "SELECT COUNT(resposta_status) AS qtdresp FROM post_resposta WHERE resposta_status = 1 AND resposta_post_id = $post_id");
	$fetch_conta_respostas = mysqli_fetch_array($conta_respostas);

	if ($operacao == 1) 
	{
		$updatePergunta = mysqli_query($con, "UPDATE post_resposta SET resposta_status = 0 WHERE resposta_id = $perguntaId");

		$conta_respostas2 = mysqli_query($con, "SELECT COUNT(resposta_status) AS qtdresp FROM post_resposta WHERE resposta_status = 1 AND resposta_post_id = $post_id");
		$fetch_conta_respostas2 = mysqli_fetch_array($conta_respostas2);

		if ($fetch_conta_respostas2['qtdresp'] == 0) 
		{	
			echo "aaaaaaaaaa";
			$update_post = mysqli_query($con, "UPDATE post SET post_status = 0 WHERE post_id = $post_id");
		}
	}
	else
	{
		$updatePergunta = mysqli_query($con, "UPDATE post_resposta SET resposta_status = 1 WHERE resposta_id = $perguntaId");

		$update_post = mysqli_query($con, "UPDATE post SET post_status = 1 WHERE post_id = $post_id");
	}

	header('Location: ' . $_SERVER['HTTP_REFERER']);

 ?>