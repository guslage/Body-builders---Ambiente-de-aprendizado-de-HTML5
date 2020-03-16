<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HTML | Atributos</title>
	<meta charset="utf-8">
	<?php include "codemirrorscripts.html"; ?>	

	<link rel="stylesheet" type="text/css" href="sheet/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="sheet/frameword.css">
	<script defer src="fawesome/svg-with-js/js/fontawesome-all.js"></script>
	<?php include "sheet/scriptjs.html" ?>
</head>
<body>
    <?php include "navbar-top.php" ?>
	
	<div id="header1">
    	<h1>HTML - Atributos</h1>	
    </div>

	<div class="container-fluid">
    	<div class="row no-gutter">
    		<?php include "sidenav.html"; ?>
    	<div class="col-xs-12 col-xl-8">
    		<div id="page-body">
				<div id="page-principal">
    				<section id="principal">
	<h2>Definição</h2>
	
	<p>Atributos são propriedades que damos as tags para que elas funcionem de acordo com nossas necessidades e desejos.</p>
	<p>Um atributo comum é composto por um <em>nome</em> e um <em>valor</em>.</p>
	<p>Existem também os atributos que não são acompamhados de valor algum. Esses atributos são chamados de <b>Atributos booleanos</b>.</p>

	<div class="syntax">
		<code>
		&lttag <strong>atributo="<em>valor</em>"</strong>>...<em>conteúdo</em>...&lt/tag>
		</code>
	</div> 

	<br>

	<?php include "Exemplos/HTML_Atributos/Ex_Atributos_00.php"; ?>

	<br>
	<hr>
	<br>

	
	<h2>Atributos globais</h2>
	
	<p>A maioria dos atributos são específicos à certas tags, mas existem também os chamados atributos globais, que são compatíveis com qualquer elemento do HTML.</p>
	<p>Vamos ver a lista de elementos globais existentes no HTML5. </p>

	<hr class="dotted">

	<h3>accesskey</h3>
	<p>Define uma tecla, que quando pressionada, ativa um elemento da página.</p> 

	<?php include "Exemplos/HTML_Atributos/Ex_Atributos_01.php"; ?>

	<br>
	
	<p>No exemplo acima, o atributo accesskey recebe como valor a tecla "h", mas para tirarmos proveito desta funcionalidade, precisamos primeiro aprender uma pequena combinação de teclas. </p>
	<p>Nos navegadores <b>Chrome, Mozilla e Opera</b>, a combinação de teclas é <b>alt + <em>a tecla escolhida</em></b>. Já no Internet explorer e Edge, a combinação é <b>alt + shift + <em>a tecla escolhida</em></b>.</p>
	
	
	<hr>

	<h3>class</h3>
	<p>Define classes identificadoras ao elemento escolhido.</p> 	
	<li>Um elemento pode ter uma ou mais classes.</li> 
	<li>O atributo class é geralmente usado para padronizar a estilização de vários elementos dentro da página.</li>

	<br>

	<?php include "Exemplos/HTML_Atributos/Ex_Atributos_02.php"; ?>

	<hr>
	
	<h3>contenteditable</h3>
	<p>Possibilita que o usuário edite o conteúdo do elemento.</p>

	<?php include "Exemplos/HTML_Atributos/Ex_Atributos_03.php"; ?>

	<hr>

	<h3>dir</h3>
	<p>Especifica a direção do texto</p>

	<?php include "Exemplos/HTML_Atributos/Ex_Atributos_04.php"; ?>

	<br>

	<table class="table table-striped">
		<th>Valor do atributo</th>
		<th>Resultado</th>
		<tr>
			<td>ltr</td>
			<td>O texto é direcionado da esquerda para a direita</td>
		</tr>
		<tr>
			<td>rtl</td>
			<td>O texto é direcionado da direita para a esquerda</td>
		</tr>
		<tr>
			<td>auto</td>
			<td>O navegador decide a direção do texto.</td>
		</tr>
	</table>

	<hr>

	<h3>draggable</h3>
	<br>
	<small style="background-color: #eee; color: red; padding: 1%">Este atributo requer um conhecimento prévio de javascript, portanto não será aprofundado.</small>
	<br>
	<br>
	<p>Dá ao elemento a possibilidade de ser arrastado.</p>

	<?php include "Exemplos/HTML_Atributos/Ex_Atributos_05.php"; ?>

	<hr>

	<h3>hidden</h3>     
	<p>O atributo hidden, se presente, torna o elemento invisível.</p> 
	<p>O atributo hidden é um atributo booleano.</p>
	
	<?php include "Exemplos/HTML_Atributos/Ex_Atributos_06.php"; ?>

	<hr>

	<h3>id</h3> 
	<p>Define um identificador ao elemento.</p>
	<p>Esse identificador pode ser utilizado para fins de estilização, ou para a manipulação do elemento com o auxílio de scripts.</p> 
	<li>Um elemento só pode conter um único id</li>

 	<br>

	<?php include "Exemplos/HTML_Atributos/Ex_Atributos_07.php"; ?> 	
 	
	<hr>
	
	<h3>lang</h3> 
	<p>Especifica a linguagem do elemento. </p>
	
	<?php include "Exemplos/HTML_Atributos/Ex_Atributos_08.php"; ?> 

	<hr>

	<h3>spellcheck</h3>
	<p>Define se o elemento apontará ou não os erros de digitação.</p>
	<p>Este atributo só terá efeito em caixas de texto (&ltinput> e &lttextarea>) e elementos que possuam o atributo contenteditable="true".</p>

	<?php include "Exemplos/HTML_Atributos/Ex_Atributos_09.php"; ?> 

	<hr>

	<h3>style</h3> 
	<p>Permite atribuir propriedades de estilização direto no elemento.</p>
	<p>Cada propriedade deve ser separada por um ponto e vírgula "<b>;</b>".</p>
 	
 	<?php include "Exemplos/HTML_Atributos/Ex_Atributos_10.php"; ?> 

 	<hr>
 	
	<h3>tabindex </h3>
	<p>Define a ordem da tabulação de elementos através de valores numéricos. </p>
 
 	<?php include "Exemplos/HTML_Atributos/Ex_Atributos_11.php"; ?> 

 	<hr>
	
	<h3>title</h3> 
	<p>Adiciona informação exta sobre um elemento.</p>
 	
 	<?php include "Exemplos/HTML_Atributos/Ex_Atributos_12.php"; ?> 

</section>
<section id="final">
 	<hr>

	<p>No próximo cápitulo, estudaremos a estrutura básica de uma página HTML.</p>

	<hr>
	<hr>

	<a href="HTML_Basico.php" class="btn btn-lg btn-success" ">Voltar</a>
	<a href="HTML_Meta.php" class="btn btn-lg btn-success" style="display: inline; float: right">Próxima página</a>
</section>
				</div>
			</div>
		</div>
		<div class="col-xl-1"></div>
	</div>
</div>

	<?php include "codemirrorconfig.html"; ?>

</body>
</html>
