<?php 
	session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HTML | Imagens</title>
	<meta charset="utf-8">
	<?php include "codemirrorscripts.html"; ?>	

	<link rel="stylesheet" type="text/css" href="sheet/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="sheet/frameword.css">
	<script defer src="fawesome/svg-with-js/js/fontawesome-all.js"></script>
	<?php include "sheet/scriptjs.html" ?>

</head>
<body>
		<?php include "navbar-top.php"; ?>

    	<div id="header1">
    		<h1>Inserção de imagens com HTML</h1>
    	</div>

  		<div class="container-fluid">
    		<div class="row">
    			<?php include "sidenav.html"; ?>
    		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-7">
    			<div id="page-body">

    				<div id="page-principal">
    					<section id="principal">	
						    <h2>Defnição</h2>	
							<p>Podemos indexar imagens em nossas páginas com o auxílio da tag <strong>&ltimg></strong>.</p>
							<p>Mas somente a colocação desta tag não é o suficiente para que uma imagem sejá renderizada no navegador.</p>
							<p>Para obtermos o resultado desejado, devemos utilizar o atributo <strong>src</strong> para referenciarmos a imagem que deve ser mostrada.</p>

							<div class="code_Ex">
								<div class="card">
								<div class="card-body">
									<code>
										...<br>
										&ltimg src="gatinho.png"><br>
										...
									</code>
								</div>
								</div>
								<br>
								<form method="post" action="Exemplos/HTML_editor.php">
						            <input type="hidden" name="code" value="section/section02.html">
						        <input type="submit" name="submit_code" class="btn btn-outline-info" value="Testar código!">
							</div>

							<hr>

							<h2>É melhor prevenir do que remediar...</h2>
							<p>Digamos que você tenha se preparado durante incansaveis minutos do seu dia para achar a imagem perfeita para colocar no seu site, mas o usuário ainda usa internet discada e a ilustração escolhida simplesmente não consegue ser renderizada no navegador dele. E agora? <q>Como dormirei de noite sabendo que o leitor não conseguiu ver a foto daquele lindo gatinho que eu coloquei em meu site?</q>, você se pergunta.</p> 
							<p>Esse é um problema que pode ser contornado utilizando o atributo <strong>alt</strong>.</p>
							<p>O atributo <strong>alt</strong> define uma descrição à imagem, que é mostrada caso o navegador não consiga renderiza-la corretamente.</p>

							<div class="code_Ex">
								<div class="card">
								<div class="card-body">
									<code>
										...<br>
										&ltimg src="gatinho.png" alt="Um gatinho muito fofinho &lt3"><br>
										...
									</code>
								</div>
								</div>
								<br>
								<form method="post" action="Exemplos/HTML_editor.php">
						            <input type="hidden" name="code" value="img/imgalt.html">
						        <input type="submit" name="submit_code" class="btn btn-outline-info" value="Testar código!">
							</div>

						    </section>
		
						<hr>
	
							
						<h2 id="atr">Atributos</h2>
						<section id="atr-explain"> 

						    <h3>height</h3>
						    <p>Esse atributo define em pixels, a altura da imagem.</p>

						    <br>

						    <h3>usemap</h3>
						    <p>Define a imagem como um mapa.</p>
						    <p>O uso de mapas será explicado no próximo tutorial.</p>

						    <br>

						    <h3>width</h3>
						    <p>Esse atributo define em pixels, a largura da imagem.</p>

						    <hr>

						    <h2>Atributos globais</h2>
						    <p>Este elemento dá suporte aos atributos globais do HTML.</p>
						    <p>Para saber mais sobre esses atributos <a href="HTML_Atributos.php">clique aqui!</a></p>

						    <hr>

						    <p>No próximo tutorial veremos como transformar imagens em mapas!</p>

						    <hr>
						    <hr>

						    <a href="HTML_Basico.php" class="btn btn-lg btn-success" ">Voltar</a>
							<a href="HTML_Div.php" class="btn btn-lg btn-success" style="display: inline; float: right">Próxima página</a>

					</section>	

					<hr>

    			</div>	
		    </div>
		</div>
  	</div>
	</div> 

    <?php include "codemirrorconfig.html" ?>
  	
</body>
</html>