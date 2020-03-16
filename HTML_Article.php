<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>HTML | Atricle</title>
    <meta charset="utf-8">
    <?php include "link_includes.php"; ?>
</head>
<body>

    <?php include "navbar-top.php"; ?>
    <div id="page-header">
        <h1>O elemento &ltarticle></h1>
    </div>

    <div class="container-fluid" style="max-width: 100%; width: 100%">
    <div class="row no-gutter">
    <?php include "sidenav.html"; ?>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-8">
        <div id="page-body">
            <div id="page-principal">
                <section id="definição">  
                    <h2>Definição</h2>    
                    <p>A tag <strong>&ltarticle></strong> define um conteúdo independente do resto da página.</p> 

                    <h2>Quando usar um artigo?</h2>
                    <p>Vamos usar como exemplo a seguinte mensagem:</p>
                    <q>Pode demorar, ser difícil e até machucar, mas com fé e esforço seu sonho vai se realizar.</q><br>
                    <em>Autor desconhecido.</em>
                    <br><br>        
                    <p>Digamos que você tenha visto essa mensagem no seu Facebook, achou a mensagem legal e resolveu copia-la e postar no twitter. A frase ainda possui sentido independente da rede social em que for postada.</p> 
                    <p>A tag &ltarticle> pode ser usada em artigos de notícias, posts em blogs e fóruns, etc...</p> 

                    <?php include "Exemplos/HTML_Article/Ex_Article_00.php"; ?>
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