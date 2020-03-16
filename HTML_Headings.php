<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>HTML | Headings</title>
    <meta charset="utf-8">
    <?php include "link_includes.php"; ?>
</head>
<body>

    <?php include "navbar-top.php"; ?>
    <div id="page-header">
        <h1>Headings - do h1 ao h6</h1>
    </div>

    <div class="container-fluid">
    <div class="row no-gutter">
    <?php include "sidenav.html"; ?>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-8">
        <div id="page-body">
            <div id="page-principal">
                <section id="definição">  
                    <h2>Definição</h2>
                    <p>As headings definem a hierarquia de títulos dentro de um documento HTML.</p>
                    <p>Essas tags vão desde &lth1> ao &lth6>, sendo &lth1> o título principal do documento, e &lth2> uma divisão do assunto principal por exemplo.</p>
                    <?php include "Exemplos/HTML_Headings/Ex_Headings_00.php"; ?>
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