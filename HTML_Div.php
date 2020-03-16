<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>HTML | Div</title>
    <meta charset="utf-8">
    <?php include "link_includes.php"; ?>
</head>
<body>

    <?php include "navbar-top.php"; ?>
    <div id="page-header">
        <h1>&ltdiv> - Criando divisões no HTML</h1>
    </div>

    <div class="container-fluid">
    <div class="row no-gutter">
    <?php include "sidenav.html"; ?>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-8">
        <div id="page-body">
            <div id="page-principal">
                <section id="definição">
                            <h2>Definição</h2>    
                            <p>A tag <strong>div</strong> cria uma espécie de container dentro da página, e com este container podemos aplicar características distintas à uma seção do seu HTML.</p>
                            <p>Uma divisão é geralmente criada em conjunto com propriedades de estilização, como o atributo style, o elemento &ltsytle> ou um arquivo CSS. Nesses dois últimos casos, é recomendada a identificação da div atrvés de um class ou de um id.</p>

                        	<?php include "Exemplos/HTML_Div/Ex_Div_00.php"; ?>
                        </section>

                            <hr>

                            <section id="caixa">
                            <h2>Pensando fora da caixa... ou dentro nesse caso</h2>
                            <p>Vale ressaltar que também é possível a criarmos uma &ltdiv> dentro da outra para criarmos designs mais complexos.</p>

                            <?php include "Exemplos/HTML_Div/Ex_Div_01.php"; ?>

                            </section>
        
                        <hr>
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
            <hr>
            <div id="final">
            <a href="HTML_Article.php" class="btn btn-lg btn-success">Tutorial anterior</a>
            <a href="HTML_Section.php" class="btn btn-lg btn-success" style="display: inline; float: right;">Próximo tutorial</a>
            </div>  
            </div>
        </div>
    </div>
    </div> 
    <?php include "codemirrorconfig.html" ?>    
</body>
</html>