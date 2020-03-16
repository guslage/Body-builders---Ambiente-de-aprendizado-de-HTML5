<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>HTML | br e hr</title>
    <meta charset="utf-8">
    <?php include "link_includes.php"; ?>
</head>
<body>

    <?php include "navbar-top.php"; ?>
    <div id="page-header">
        <h1>Quebra de linhas e separação de conteúdo</h1>
    </div>

    <div class="container-fluid">
    <div class="row no-gutter">
    <?php include "sidenav.html"; ?>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-8">
        <div id="page-body">
            <div id="page-principal">
                <section id="definição">
                    <h2>Defnição</h2>
                    <p>A tag &ltbr> adiciona uma quebra de linha, enquanto a tag &lthr> adiciona uma linha horizontal que pode ser usada para separar o conteúdo do HTML.</p>  

                    <?php include "Exemplos/HTML_Br/Ex_Br_00.php"; ?>
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
            <a href="HTML_List.php" class="btn btn-lg btn-success">Tutorial anterior</a>
            <a href="HTML_Aside.php" class="btn btn-lg btn-success" style="display: inline; float: right;">Próximo tutorial</a>
            </div>  
            </div>
        </div>
    </div>
    </div> 
    <?php include "codemirrorconfig.html" ?>    
</body>
</html>