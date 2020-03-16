<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>HTML | Áudio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "link_includes.php"; ?>
</head>
<body>
	<?php include "navbar-top.php";	 ?>
	
    <div id="page-header">
    	<h1>O elemento &ltaudio></h1>
    </div>

	<div class="container-fluid" style="max-width: 100%; width: 100%">
    <div class="row no-gutter">
    <?php include "sidenav.html"; ?>
    <div class="col-xs-12 col-xl-8">
    	<div id="page-body">
   			<div id="page-principal">
   				<section id="definição">	
			    	<h2>Definição</h2>
			    	<p>No HTML podemos tocar faixas de áudio graças ao elemento &ltaudio>.</p>
					<p>Existem 3 formatos de áudio compatíveis com a tag &ltaudio>:</p>
					<ul>
						<li>Mp3</li>
						<li>Wav</li>
						<li>Ogg</li>
					</ul>
					<p>Podemos declarar uma faixa de áudio de duas formas.</p>
					<p>A maneira menos recomendada é utilizando o atributo <b>src</b>.</p>
					<?php include "Exemplos/HTML_Audio/Ex_Audio_00.php"; ?>
					<br>
					<p>Isso pode ser ruim, pois dependendo do navegador e de sua respectiva versão, certos formatos de áudio não serão carregados.</p>
					<p>Para solucionarmos este problema, usamos a tag &ltsource>.</p>
					<p>Dentro da tag &ltsource> devemos utilizar os atributos <b>src</b> em conjunto com o atributo <b>type</b> para que o navegador carregue de maneira correta cada um dos formatos de áudio.</p>
					<p>Cada formato de áudio possui um type especifico:</p>
					<table class="table table-striped">
					  <tr>
					    <th>Formato de áudio</th>
					    <th>Type</th>
					  </tr>
					  <tr>
					    <td>Mp3</td>
					    <td>audio/mpeg</td>
					  </tr>
					  <tr>
					    <td>Wav</td>
					    <td>audio/wav</td>
					  </tr>
					  <tr>
					  	<td>Ogg</td>
					  	<td>audio/ogg</td>
					  </tr>
					</table>
					<p>Com a tag &ltsource> podemos definir os três formatos de áudio, assim,  caso um dos formatos não seja compatível com o navegador do usuário,  ele é ignorado e o navegador passa a carregar o próximo formato.</p>
					<?php include "Exemplos/HTML_Audio/Ex_Audio_01.php"; ?>
				</section>
			</div>

			<div id="page-atr">				
				<section id="atributos">
				<h2>Atributos</h2>
				<div id="page-atr-body">

				<section id="atr-global">
					<div class="atr">	
						<div class="atr-header">
							<div class="atr-title">
								<h3>Atributos globais</h3>
							</div>
						</div>
						<p>Os elementos apresentados neste tutorial dão suporte aos atributos globais do HTML.</p>
                        <p>Para saber mais sobre esses atributos <a href="HTML_Atributos.php">clique aqui!</a></p>
					</div>
				</section>	

				<section id="atr-autoplay">
					<div class="atr">	
						<div class="atr-header">
							<div class="atr-title">
								<h3>autoplay</h3>
							</div>
							<form action="HTML_editor.php" method="post">
								<input type="hidden" name="code" value="HTML_Audio/Ex_Audio_atr_00.html">
								<input type="submit" value="Testar Código!" class="btn btn-outline-info btn-sm" >
							</form>
						</div>
						<p>É um atributo <strong>booleano</strong></p>
						<p>Faz com que o áudio comece a tocar automaticamente quando a página for carregada.</p>
					</div>
				</section>

				<section id="atr-controls">
					<div class="atr">	
						<div class="atr-header">
							<div class="atr-title">
								<h3>controls</h3>
							</div>

						</div>
						<p>É um atributo <strong>booleano</strong></p>
						<p>É este atributo que se encarrega de mostrar os controles de áudio no navegador (botão pause/play, controle de volume, barra de duração e botão de download).</p>
						<p>Caso este atributo não esteja presente, o áudio só poderá ser tocado com a ajuda de eventos em javascript ou com o uso do atributo autoplay.</p>
					</div>	
				</section>

				<section id="atr-loop">
					<div class="atr">	
						<div class="atr-header">
							<div class="atr-title">
								<h3>loop</h3>
							</div>

						</div>
						<p>É um atributo <strong>booleano</strong></p>
						<p>Faz com que o áudio se repita após seu termino.</p>
					</div>	
				</section>

				<section id="atr-mute">
					<div class="atr">	
						<div class="atr-header">
							<div class="atr-title">
								<h3>muted</h3>
							</div>

						</div>
						<p>É um atributo <strong>booleano</strong></p>
						<p>Define o áudio como mudo.</p>
					</div>	
				</section>

				<section id="atr-preload">
					<div class="atr">	
						<div class="atr-header">
							<div class="atr-title">
								<h3>preload</h3>
							</div>

						</div>
						<p>Este atributo especifica como o áudio devera ser carregado.</p>
						<p>Este atributo entra em desuso caso o autoplay já esteja presente.</p>
						<p>Nele podemos atribuir 3 valores diferentes:</p>

						<table class="table table-striped">
							<th>Valor</th>
							<th>Função</th>
							<tr>
								<td>none</td>
								<td>O navegador não carregara o áudio junto com a página. O áudio só começara a carregar quando o botão play for acionado.</td>
							</tr>
							<tr>
								<td>auto</td>
								<td>O navegador começa a carregar o áudio junto com a página.</td>
							</tr>
							<tr>
								<td>metadata</td>
								<td>O navegador só carregara os metadados do áudio.</td>
							</tr>
						</table>
					</div>	
				</section>

				<section id="atr-src">
					<div class="atr">	
						<div class="atr-header">
							<div class="atr-title">
								<h3>src</h3>
							</div>

						</div>
						<p>Faz referencia a qual arquivo de áudio deve ser carregado.</p>
					</div>	
				</section>

					</div>
				</section>
			</div>	
			<hr>
			<hr>
			<div id="final">
			<a href="HTML_Img.php" class="btn btn-lg btn-success">Tutorial anterior</a>
			<a href="HTML_Table.php" class="btn btn-lg btn-success" style="display: inline; float: right;">Próximo tutorial</a>
			</div>	
		    </div>
		</div>
  	</div>
	</div> 
    <?php include "codemirrorconfig.html" ?> 	
</body>
</html>