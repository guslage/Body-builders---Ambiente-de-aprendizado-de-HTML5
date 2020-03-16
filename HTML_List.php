<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>HTML | Listas</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "link_includes.php"; ?>
</head>
<body>

	<?php include "navbar-top.php"; ?>
    <div id="page-header">
    	<h1>Listas</h1>
    </div>

	<div class="container-fluid" style="max-width: 100%; width: 100%">
    <div class="row no-gutter">
    <?php include "sidenav.html"; ?>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-8">
    	<div id="page-body">
   			<div id="page-principal">
   				<section id="definição">
			    	<h2>Definição</h2>
			    	<p>As tags <strong>&ltol></strong>, <strong>&ltul></strong> e <strong>&ltli></strong> formam os elementos de lista do HTML.</p>

					<p>As listas podem ser categorizadas como ordenadas e não ordenadas.</p>

					<p>Independente do tipo utilizado, uma lista sempre deve ser composta pela tag <strong>&ltli></strong>, responsável por cria um item dentro  da lista</p>

					<p>Vamos começar pelas listas não ordernadas.</p>	
				</section>	
					
					<hr>
				<section id="tag-ul">	
					<h2>Listas não ordenadas</h2>

					<p>O elemento <strong>&ltul></strong> caracteriza uma lista não ordenada.</p>

					<?php include "Exemplos/HTML_List/Ex_List_00.php"; ?>
				</section>	
					
					<hr>

				<section id="tag-ol">
					<h2>Listas ordenadas</h2>

					<p>Uma lista ordenada é definida pelo uso do elemento <strong>&ltol></strong>.</p>

					<p>Em uma lista ordenada, os marcadores são trocados por números.</p>

					<?php include "Exemplos/HTML_List/Ex_List_01.php"; ?>
					
					<br>

					<p>Os marcadores das listas ordenadas também podem ser definidos pelo atributo <strong>type</strong>, que recebe os seguintes valores:</p>

					<ol type="A">
						<li>A - Letras maiusculas</li>
					</ol>
					<ol type="a">
						<li>a - Letras minusculas</li>
					</ol>
					<ol type="1">
						<li>1 - Números decimais</li>
					</ol>
					<ol type="i">
						<li>i - Números romanos</li>
					</ol>
					<ol type="I">
						<li>I - números romanos</li>
					</ol>

					<?php include "Exemplos/HTML_List/Ex_List_02.php"; ?>
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

                </div>
                </section>
            </div>

            <hr>
                                
            <div id="page-atr">                
                <section id="atr-li">
                <h2>Atributos da tag &ltli></h2>
                <div id="page-atr-body">

                <section id="atr-value">
                    <div class="atr">   
                        <div class="atr-header">
                            <div class="atr-title">
                                <h3>value</h3>
                            </div>

                        </div>
                        <p>Adiciona um valor ao item que será incrementado e adicionado aos outros itens ao decorrer da lista.</p>
						<p>Esse atributo só funciona ocm listas ordenadas.</p>
                    </div>  
                </section>

                 </div>
                </section>
            </div>

            <hr>
                                
            <div id="page-atr">                
                <section id="atr-ol">
                <h2>Atributos da tag &ltol></h2>
                <div id="page-atr-body">

                <section id="atr-reversed">
                    <div class="atr">   
                        <div class="atr-header">
                            <div class="atr-title">
                                <h3>reversed</h3>
                            </div>

                        </div>
                        <p>É um atributo <strong>booleano</strong>.</p>
						<p>A contagem dos itens é feita em ordem decrescente.</p>
                    </div>
				</section>

				<section id="atr-start">
                    <div class="atr">   
                        <div class="atr-header">
                            <div class="atr-title">
                                <h3>start</h3>
                            </div>
                        </div>
                        <p>Define qual deve ser o primeiro número da lista.</p>
                    </div>  
                </section>

                <section id="atr-type">
                    <div class="atr">   
                        <div class="atr-header">
                            <div class="atr-title">
                                <h3>type</h3>
                            </div>

                        </div>
                        <p>Define o tipo de marcador utilizado.</p>
                    </div>  
                </section>

                </div>
                </section>
            </div>
			<hr>
            <hr>
            <div id="final">
            <a href="HTML_Meta.php" class="btn btn-lg btn-success">Tutorial anterior</a>
            <a href="HTML_Headings.php" class="btn btn-lg btn-success" style="display: inline; float: right;">Próximo tutorial</a>
            </div>  
            </div>
        </div>
    </div>
    </div> 
    <?php include "codemirrorconfig.html" ?>    
</body>
</html>