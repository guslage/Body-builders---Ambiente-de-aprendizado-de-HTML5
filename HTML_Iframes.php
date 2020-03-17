<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>HTML | Iframes</title>

	<meta charset="utf-8">
    <?php include "link_includes.php"; ?>


</head>
<body>
    	<?php include "navbar-top.php"; ?>
	    <div id="page-header">
	        <h1>Iframes</h1>
	    </div>

  	<div class="container-fluid">
    <div class="row no-gutter">
    <?php include "sidenav.html"; ?>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-8">
        <div id="page-body">
            <div id="page-principal">
                <section id="definição">  
					    <h2>Definição</h2>
					    <p>Um iframe é uma espécie de container utilizado para aninhar uma página dentro da outra.</p>
						<p>A tag &ltiframe> deve ser utilizada em conjunto com o atributo <strong>src</strong>, que informa o navegador sobre qual página carregar dentro do frame.</p>

						<p>Uma mensagem pode ser inserida dentro do elemento para ser mostrada caso o navegador do usuário não dê suporte aos iframes.</p>
						

						<?php include "Exemplos/HTML_Iframe/Ex_Iframe_00.php"; ?>
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

                <section id="atr-height">
                    <div class="atr">
                        <div class="atr-header">
                            <div class="atr-title">
                                <h3>height</h3>
                            </div>
                        </div>
                    	<p>Define em pixels a altura do iframe.</p>
                    </div>
                </section>

                <section id="atr-name">
                    <div class="atr">
                        <div class="atr-header">
                            <div class="atr-title">
                                <h3>name</h3>
                            </div>
                        </div>
                    	<p>Define um nome ao elemento.</p>
                    </div>
                </section>

                <section id="atr-sandbox">
                    <div class="atr">
                        <div class="atr-header">
                            <div class="atr-title">
                                <h3>sandbox</h3>
                            </div>
                        </div>
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
                    </div>
                </section>

                <section id="atr-src">
                    <div class="atr">
                        <div class="atr-header">
                            <div class="atr-title">
                                <h3>src</h3>
                            </div>
                        </div>
                    	<p>Informa qual o documento referenciado.</p>
                    </div>
                </section>

                </div>
                </section>
            </div>
	
			<hr>
            <hr>
            <div id="final">
            	<a href="HTML_Img.php" class="btn btn-lg btn-success" ">Voltar</a>
            	<a href="HTML_ALinks.php" class="btn btn-lg btn-success" style="display: inline; float: right">Próxima página</a>
            </div>

	        </div>
	               </div>
	           </div>
            </div>

    
    <?php include "codemirrorconfig.html" ?>

</body>
</html>