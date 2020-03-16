<!DOCTYPE html>
<html>
<head>
	<title>HTML | A tag &ltlabel></title>
	<meta charset="utf-8">
	<?php include "codemirrorscripts.html"; ?>	

	<link rel="stylesheet" type="text/css" href="sheet/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="sheet/frameword.css">
	<script defer src="fawesome/svg-with-js/js/fontawesome-all.js"></script>
	<?php include "sheet/scriptjs.html" ?>


</head>
<body>
    	<div id="header1">
    		<h1>A tag &ltlabel> - Etiquetando input's</h1>
    	</div>

  		<div class="container-fluid">
    		<div class="row">
    			<?php include "sidenav.html"; ?>
    		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-7">
    			<div id="page-body">

    				<div id="page-principal">
    					<section id="principal">
					    	<h2>Definição</h2>
					    	
					    	<p>O elemento <strong>&ltlabel></strong> adiciona uma legenda ao input, que serve também como uma espécie de botão que coloca o ocmponente referenciado em foco.</p>

					    	<p>Essa tag pode ser utilizada de duas maneiras. A primeira forma de definirmos uma label é colocando o input dentro da label.</p>

					    	<p>O segundo jeito de adicionarmos uma label é através do atributo <strong>for</strong>, que deve receber o id do input como valor. Com esse metódo, o input pode ficar de fora da label.</p>

					    	<p>Uma label só pode ser ligada À um input por vez.</p>

					    	<?php include "Exemplos/HTML_Label/Ex_Label_00.php"; ?>

					    	<br>

					    	<?php include "Exemplos/HTML_Label/Ex_Label_01.php"; ?>

						</section>
		
						<hr>
	
							
						<h2 id="atr">Atributos</h2>
						<section id="atr-explain">

							<h3>for</h3>
							<p>Indica a qual input a label pertence.</p>
							<p>O valor desse atributo deve ser o id do input.</p>

							<h3>form</h3>
							<p>Indica a qual formulário a label pertence.</p>
							<p>O valor desse atributo deve ser o id do formulário.</p>
						
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