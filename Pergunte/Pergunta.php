<?php 
	session_start();

	$post_id    = $_GET['perguntaId'];
	$usuario_id = $_SESSION['usuario_id'];

	include "../BDConnect.php";

	/* QUERY DA PERGUNTA */
	$select_post = mysqli_query($con, "SELECT * FROM post WHERE post_id = $post_id");
	$fetch_post = mysqli_fetch_array($select_post);

	$post_pergunta 	= $fetch_post['post_pergunta'];
	$post_descricao = $fetch_post['post_descricao'];
	$post_data	 	= $fetch_post['post_data'];
	$post_status 	= $fetch_post['post_status'];
	$post_autor 	= $fetch_post['post_usuario_id'];
	/*FIM DO QUERY DA PERGUNTA*/

	/*QUERY DO AUTOR*/
	$select_autor = mysqli_query($con, "SELECT * FROM usuario WHERE usuario_id = $post_autor");
	$fetch_autor = mysqli_fetch_array($select_autor);

	$autor_nome 	   = $fetch_autor['usuario_nome']; 
	$autor_sobrenome   = $fetch_autor['usuario_sobrenome']; 
	$autor_imgperfil   = $fetch_autor['usuario_imgperfil']; 
	$autor_email 	   = $fetch_autor['usuario_email']; 
	$autor_username    = $fetch_autor['usuario_username'];
    $autor_nivelacesso = $fetch_autor['usuario_nivelacesso']; 
	/*FIM DA QUERY DO AUTOR*/

	/*QUERY DA AVALIACAO DA PERGUNTA*/
	$select_avaliacao = mysqli_query($con, "SELECT * FROM post_avaliacao WHERE post_avaliacao_post_id = $post_id");
	$fetch_avaliacao = mysqli_fetch_array($select_avaliacao);

	$rows_avaliacao = mysqli_affected_rows($con);
	if ($rows_avaliacao == 0) 
	{
		$avaliacao_p = 0;
		$avaliacao_n = 0;
	}
	else
	{
		$select_avaliacao_p = mysqli_query($con, "SELECT * FROM post_avaliacao WHERE post_avaliacao_post_id = $post_id AND post_avaliacao = 1");
		$rows_p = mysqli_affected_rows($con);
		$avaliacao_p = $rows_p;

		$select_avaliacao_n = mysqli_query($con, "SELECT * FROM post_avaliacao WHERE post_avaliacao_post_id = $post_id AND post_avaliacao = 0");
		$rows_n = mysqli_affected_rows($con);
		$avaliacao_n = $rows_n;
	}
	/*FIM DA QUERY DA AVALIACAO DA PERGUNTA*/
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $post_pergunta ?></title>
	<meta charset="utf-8">
	<?php
		include "codemirrorscripts.html";
		include "link_includes.php";
	?>

	<style type="text/css">
		.CodeMirror {
			height: 350px;
		}
	</style>
</head>
<body>
	<?php include "navbar-top.php"; ?>

	<div class="container-fluid">
    <div class="row no-gutter">

    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-3">
    </div>
    
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-6">
	    <div id="pergunta">
        <?php 
            if (isset($_SESSION['usuario_negado'])) {
        ?>
            <div class="alert alert-danger" role="alert" style="border-radius: 0px">
                <b>
                <?php
                    echo $_SESSION['usuario_negado'];
                    unset($_SESSION['usuario_negado']); 
                ?>
                <i class="fas fa-exclamation"></i>
                </b>
            </div>
        <?php
            }
        ?>	
	    	<div id="pergunta-avaliacao"> 	
	            <div class="btn-group-vertical" role="group" aria-label="Basic example">
			  		<a class="btn btn-success" href="Avaliacao.php?post_id=<?php echo $post_id;?>&usuario_id=<?php echo $usuario_id;?>&post_autor=<?php echo $post_autor;?>&avaliacao=1">
	                    <i class="far fa-thumbs-up"></i> <?php echo $avaliacao_p; ?>
	                </a>
			  	    <a class="btn btn-danger" href="Avaliacao.php?post_id=<?php echo $post_id;?>&usuario_id=<?php echo $usuario_id;?>&post_autor=<?php echo $post_autor;?>&avaliacao=0">
	                    <i class="far fa-thumbs-down"></i> <?php echo $avaliacao_n; ?>
	                </a>
	            </div>
			</div>
			<div id="pergunta-header">
    			<h1><?php echo $post_pergunta; ?></h1>
    		</div>
    		<div id="pergunta-body" >
    			<div id="pergunta-descricao">
    				<?php echo $post_descricao; ?>
    			</div>
    			<div id="pergunta-autor">
                    <?php 
                        if ($autor_nivelacesso == 1) 
                        {
                           $link = "../usuarios/Adm.php?id=$post_autor";
                        }
                        else
                        {
                            $link = "../usuarios/usuario.php?usuario_id=".$_SESSION['usuario_id']."";
                        } 
                        ?>
                    <a href="<?php echo $link; ?>">
        				<?php 
        					echo "<img id='usuario-img' src='../Img/".$autor_imgperfil."'>"; 
        				 	echo $autor_username; 
        				 ?>
        				<br>
        				<?php echo date('d-m-Y', strtotime($post_data)); ?>
        			</a>
                </div>
    		</div>
    	</div>
    	<div id="comentario">
    		<div id="resp-textbox">
	            <form action="AddResposta.php" method="get">
	                <div class="btn-group" id="editor-group" role="group">
	                    <button data-val="bold" type="button" class="btn btn-secondary">	<i class="fas fa-bold"></i>			</button>
	                    <button data-val="italic" type="button" class="btn btn-secondary">	<i class="fas fa-italic"></i>		</button>
	                    <button data-val="quote" type="button" class="btn btn-secondary">	<i class="fas fa-quote-right"></i>	</button>
	                    <button data-val="ul" type="button" class="btn btn-secondary">		<i class="fas fa-list"></i>			</button>
	                </div>

	                <textarea name="descricao" id="text" style="height: 150px"></textarea>
	                <?php echo "<input type='hidden' name='usuario_id' value=".$usuario_id.">"; ?>

	                <?php echo "<input type='hidden' name='post_autor' value=".$post_autor.">"; ?>

	                <?php echo "<input type='hidden' name='post_id' value=".$post_id.">"; ?>

	                <input type="submit" name="btnPergunta" class="btn btn-lg-primary btn-success btn-block">
	            </form>   
            </div>
    	</div>
    	<hr>	
    	<div id="respostas">
    		<?php 
    			/*QUERY PARA PEGAR OS DADOS DO USUARIO DE CADA RESPOSTA*/	
    			$select_resposta_post_id = mysqli_query($con, "SELECT * FROM post_resposta WHERE resposta_post_id = $post_id");
    			$fetch_resposta_post_id = mysqli_fetch_array($select_resposta_post_id);

    			$select_resposta_usuario = mysqli_query($con, "SELECT * FROM usuario WHERE usuario_id = '".$fetch_resposta_post_id['resposta_usuario_id']."'");
    				
    			$fetch_resposta_usuario = mysqli_fetch_array($select_resposta_usuario);

   
    			/*FIM DA QUERY*/

    			/*QUERY QUE SELECIONA TUDO DA RESPOSTA*/
    			$select_resposta = mysqli_query($con, "SELECT * FROM post_resposta WHERE resposta_post_id = $post_id ORDER BY(resposta_status)DESC");
    			$row_respostas = mysqli_affected_rows($con);
    			/**/

    			if ($row_respostas == 0) 
    			{
    				echo "<div id='noAnswer'><i class='far fa-grimace'></i><span> Oops! Parece que essa pergunta ainda não foi respondida.</span></div>";	
    			}
    			else
    			{
    				while($fetch_resposta = mysqli_fetch_array($select_resposta)) 
    				{	

    					$resposta_id        = $fetch_resposta['resposta_id'];	
    					$resposta_descricao = $fetch_resposta['resposta_descricao'];
    					$resposta_status    = $fetch_resposta['resposta_status'];	
    					$resposta_autor     = $fetch_resposta['resposta_usuario_id'];	
    					$resposta_post      = $fetch_resposta['resposta_post_id'];	
    					
    					$select_resposta_autor = mysqli_query($con, "SELECT * FROM usuario WHERE usuario_id = $resposta_autor");

    					$fetch_autor_usuario = mysqli_fetch_array($select_resposta_autor);

    					$resposta_autor_id 			= $fetch_autor_usuario['usuario_id'];	
    					$resposta_autor_nome 	 	= $fetch_autor_usuario['usuario_nome']; 
						$resposta_autor_sobrenome	= $fetch_autor_usuario['usuario_sobrenome']; 
						$resposta_autor_imgperfil	= $fetch_autor_usuario['usuario_imgperfil']; 
						$resposta_autor_email 		= $fetch_autor_usuario['usuario_email']; 
						$resposta_autor_username 	= $fetch_autor_usuario['usuario_username'];
    				?>
    					<div style="background-color: white; padding: 30px;">
    						<?php 
    							if($post_autor == $usuario_id) 
    							{
    								if($resposta_status == 1) 
    									{ 
    						?>
    										<a href="marcaResposta.php?resposta_id=<?php echo $resposta_id ?>&post_id=<?php echo $post_id ?>&op=1"><button class="btn btn-outline-danger"><i class="fas fa-thumbtack"></i> Desmarcar resposta!</button></a>
    						<?php
    									}
    									else{
    						?>
    										<a href="marcaResposta.php?resposta_id=<?php echo $resposta_id ?>&post_id=<?php echo $post_id ?>&op=2"><button class="btn btn-outline-success"><i class="fas fa-thumbtack"></i> Marcar como resposta!</button></a>
    							<?php								
    									}
    							}	
    							
    							if ($resposta_status == 1) 
    							{
    							?>
    								<div id="pergunta-body" style='border-style: dotted; border-color: green'>
    							<?php	
    							}
    							else
    							{
    							?>
    								<div id="pergunta-body">
    							<?php	
    							}
    				
    				?>
    									<div id="pergunta-descricao">
						                    <?php echo $resposta_descricao; ?>
						                </div>
						                <div id="pergunta-autor">
						                    <a href="Usuario.php?resposta_usuario_id=<?php echo $resposta_autor_id?>">
						                        <?php 
						                        	echo "<img id='usuario-img' src='../Img/".$resposta_autor_imgperfil."'>";  
						                        	echo $resposta_autor_username; ?>
						                    	 <br>
						                    </a>
						                </div>
						            </div> 

                        			</div>
                    <hr>
    		<?php
    				}		
    			}

    		?>

    	</div>
    </div>
    
    </div>
    </div>

    <script type="text/javascript">
        var editor = document.getElementById('text');
        var string = grabed_text();

        $("#text").each(function (i) {
            editor = CodeMirror.fromTextArea(this, {
                mode: "text/html",
                lineWrapping: true,
                lineNumbers: true,
                styleActiveLine: true,
                matchBrackets: true,
                theme: '3024-day',
            });

            $('button').click(function(){
              
                var val = $(this).data('val');
                var string = editor.getSelection();

                switch(val){
                case 'bold': 
                   editor.replaceSelection('<b>' + string + '</b>');
                break;
                }

                switch(val){
                case 'italic': 
                   editor.replaceSelection('<i>' + string + '</i>');
                break;
                }

                switch(val){
                case 'quote': 
                   editor.replaceSelection('<blockquote>' + string + '</blockquote>');
                break;
                }

                switch(val){
                case 'ul': 
                   editor.replaceSelection('<li>' + string + '</li>');
                break;
                }
            });
        });

        function grabed_text() {
        };     
    </script>

    <?php include "codemirrorconfig.html"; ?>	
</body>
</html>
