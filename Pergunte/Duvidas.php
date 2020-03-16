<?php 
	session_start();
	
	include "../BDConnect.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dúvidas</title>
	<meta charset="utf-8">
	<?php 
		include "codemirrorscripts.html"; 
		include "link_includes.php"; 
	?>
	
</head>
<body style="overflow-x: hidden;">

	<?php include "navbar-top.php"; ?>
	<div id="page-header">
        <h1>Dúvidas</h1>   
    </div>
	<div class="container-fluid">
		<div class="row"></>

			<?php 	
				if (isset($_POST['order'])) 
				{

					switch ($_POST['order']) {
						case 1:
							$select = "SELECT post.*, COUNT(post_avaliacao.post_avaliacao) AS qtd FROM post, post_avaliacao WHERE post.post_id = post_avaliacao.post_avaliacao_post_id AND post_avaliacao.post_avaliacao = '1' GROUP BY post.post_id ORDER BY qtd DESC";

							$filtro = "Avaliação";	
							break;
						
						case 2:
							$select = "SELECT * FROM post ORDER BY post_data DESC";

							$filtro = "Recentes";
							break;

						case 3:
							$select = "SELECT * FROM post WHERE post_status = 1";
							
							$filtro = "Respondidas";
							break;

						default :
							$select = "SELECT post.*, COUNT(post_resposta.resposta_id) AS qtdresp FROM post, post_resposta WHERE post.post_id = post_resposta.resposta_post_id GROUP BY post.post_id ORDER BY qtdresp DESC";

							$filtro = "Populares";
							break;			
					}
				} 
				else
				{
					$select = "SELECT post.*, COUNT(post_resposta.resposta_id) AS qtdresp FROM post, post_resposta WHERE post.post_id = post_resposta.resposta_post_id GROUP BY post.post_id ORDER BY qtdresp DESC";

					$filtro = "Populares";
				}
			?>

			<div class="col-xl-3">
				<div class="row">
					<div class="col-xl-12">
						<div style=" margin-right: -15px; margin-left: -15px;  background-color: #2B7A78; padding: 10px;">
							<div>
								<center>		
								<form method="post">
				    				<span style="color: #E4F1FE; font-size: 2em">Ordenar por</span>

				    				<hr style="background-color: #E4F1FE; margin-top: 5px">
				    				<div style="background-color: #E4F1FE; padding: 10px">
				    				<button class="btn btn-dark" name="order" value="0">Populares</button>	
								    <button class="btn btn-dark" name="order" value="1">Avaliação</button>
								    <button class="btn btn-dark" name="order" value="2">Recentes</button>
								  	<button class="btn btn-dark" name="order" value="3">Respondidas</button>
				    				</div>
				    			</form>
				    			<hr>
				    			<span style="font-size: 2em">Pesquisando por: <?php echo $filtro; ?></span>
								</center>
							</div>
				    	</div>
					</div>
				</div>
				
			</div>
			<div class="col-xl-5" style="margin-bottom: 10px">
				
				<?php 

				$select_perguntas = mysqli_query($con, $select);
				
				while ($fetch_perguntas = mysqli_fetch_array($select_perguntas)) 
				{
					$post_id 	   	= $fetch_perguntas['post_id'];
					$post_pergunta 	= $fetch_perguntas['post_pergunta'];
					$post_data		= $fetch_perguntas['post_data'];
					$post_status      = $fetch_perguntas['post_status'];
					$post_autor		= $fetch_perguntas['post_usuario_id'];

					$select_autor = mysqli_query($con, "SELECT * FROM usuario WHERE usuario_id = $post_autor");

					$fetch_autor = mysqli_fetch_array($select_autor);

					$autor_username = $fetch_autor['usuario_username'];
					$autor_img		= $fetch_autor['usuario_imgperfil'];


					$select_respostas = mysqli_query($con, "SELECT COUNT(resposta_id) AS qtdresp FROM post_resposta WHERE resposta_post_id = $post_id");
					$fetch_respostas = mysqli_fetch_array($select_respostas);


					$select_avaliacao_n = mysqli_query($con, "SELECT COUNT(post_avaliacao) AS qtd_n FROM post_avaliacao WHERE post_avaliacao = 0 AND post_avaliacao_post_id = $post_id");
					
					$fetch_avaliacao_n = mysqli_fetch_array($select_avaliacao_n);

					$select_avaliacao_p = mysqli_query($con, "SELECT COUNT(post_avaliacao) AS qtd_p FROM post_avaliacao WHERE post_avaliacao = 1 AND post_avaliacao_post_id = $post_id");
					
					$fetch_avaliacao_p = mysqli_fetch_array($select_avaliacao_p);

			?>		
					<div class="row" style="border-top:  10px transparent  solid">
						
							<div class="col-xl-12" style="padding: 10px; background-color: white; border: 1px solid #a6a9ad">
								<div class="row">
									<div class="col-xl-5">
										<span style="color: #28A745">
											<i class="far fa-thumbs-up"></i><?php echo $fetch_avaliacao_p['qtd_p']; ?>
										</span>
										/
										<span style="color: #DC3545">
											<i class="far fa-thumbs-down"></i><?php echo $fetch_avaliacao_n['qtd_n']; ?>
										</span>

										<span style="margin-left: 10px">
											<?php echo $fetch_respostas['qtdresp']; ?> comentários
										</span>
									</div>
									<div class="col-xl-5">
										<a href="Pergunta.php?perguntaId=<?php echo $post_id; ?>">
										<?php echo $post_pergunta; ?>
										</a>
									</div>
								</div>
								<hr style="margin-top: 10px; margin-bottom: 10px;">	
								<div class="row">
									<div class="col-xl-5" style="font-size: 12px">
										<div style=" padding: 5px">
										Perguntado por <?php echo $autor_username; ?> em <?php echo $post_data; ?>
										</div>
									</div>
								</div>
							</div>

					</div>
			<?php		
				}	

?>
			</div>
		</div>
	</div>

	
</body>
</html>