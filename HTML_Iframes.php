<!DOCTYPE html>
<html>
<head>
	<title>HTML | Iframes</title>
	<meta charset="utf-8">
	<?php include "codemirrorscripts.html"; ?>	

	<link rel="stylesheet" type="text/css" href="sheet/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="sheet/frameword.css">
	<script defer src="fawesome/svg-with-js/js/fontawesome-all.js"></script>
	<?php include "sheet/scriptjs.html" ?>


</head>
<body>
    	<div id="header1">
    		<h1>O elemento &ltiframe></h1>
    	</div>

  		<div class="container-fluid">
    		<div class="row">
    			<?php include "sidenav.html"; ?>
    		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-7">
    			<div id="page-body">

    				<div id="page-principal">
    					<section id="principal">
					    	<h2>Definição</h2>
					    	<p>Um iframe é uma espécie de container utilizado para aninhar uma página dentro da outra.</p>
							<p>A tag &ltiframe> deve ser utilizada em conjunto com o atribuyo <strong>src</strong>, que informa o navegador sobre qual página carregar dentro do frame.</p>

							<div id="nota">
								<b>Notas de uso</b>
								<hr>
								Uma mensagem pode ser inserida dentro do elemento para ser mostrada caso o navegador do usuário não dê suporte aos iframes.
							</div>

							<br>

							<?php include "Exemplos/HTML_Iframe/Ex_Iframe_00.php"; ?>
						</section>
		
						<hr>
	
							
						<h2 id="atr">Atributos</h2>
						<section id="atr-explain">

							<h3>height</h3>
							<p>Define em pixels a altura do iframe.</p>

							<h3>name</h3>
							<p>Define um nome ao elemento.</p>

							<h3>sandbox</h3>
							<p>Atribui restrições ao iframe</p>
							<p>Esse atributo pode receber um valor ou funcionar como um atributo booleano.</p>
							<p>Caso o atributo não receba nenhum valor, todas as restrições são aplicadas.</p>

							<table class="table table-striped">
								<tr>
									<th>Valor</th>
									<th>Função</th>
								</tr>
								<tr>
									<td>allow-forms</td>
									<td>Permite o envio de formulários</td>
								</tr>
								<tr>
									<td>allow-pointer-lock</td>
									<td>Permite o uso de API's Pointer Lock, como jogos que controlam a </td>
								</tr>
								<tr>
									<td>allow-popups</td>
									<td>Permite o uso de pop-ups</td>
								</tr>
								<tr>
									<td>allow-same-origin</td>
									<td>Permite que o contéúdo seja tratado como em sua origem</td>
								</tr>
								<tr>
									<td>allow-scripts</td>
									<td>Permite o uso de scripts dentro do iframe</td>
								</tr>
							</table>

							<h3>src</h3>
							<p>Iforma qual o documento referenciado.</p>

							<h3>srcdoc</h3>
							<p>Permite que o código renderizado seja escrito diretamente no elemento.</p>

							<h3>width</h3>
							<p>Define em pixel a largura do iframe.</p>
						
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