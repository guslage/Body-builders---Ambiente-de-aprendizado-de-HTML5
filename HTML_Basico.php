<?php 
    session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>HTML | Estrutura básica</title>
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
        <h1>A estrutura básica de um documento HTML</h1>   
    </div>

    <div class="container-fluid">
        <div class="row no-gutter">
            <?php include "sidenav.html"; ?>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-8">
            <div id="page-body">
                <div id="page-principal">
                    <section id="principal">
    <h2>Definição</h2>    
    <p>Uma página HTML é composta por 4 elementos básicos e fundamentais:</p>
    <li>A declaração <b>&lt!DOCTYPE></b></li>
    <li>O elemento <b>&lthtml></b></li>
    <li>O elemento <b>&lthead></b></li>
    <li>O elemento <b>&ltbody></b></li>

    <p>Cada um desses elementos possui uma função fundamental dentro da criação de um página.</p>
    <p>Neste tutorial veremos o funcionamento de cada um desses elementos.</p>

    <hr>

    <h2>A declaração &lt!DOCTYPE></h2>
    <p>Essa declaração informa o navegador sobre qual versão do HTML será utilizada na criação da página.</p>
    <p>A primeira coisa que devemos fazer ao criarmos uma página é informar qual &lt!DOCTYPE> será usado.</p>
    <p>Para indicarmos que o documento é do tipo HTML5, precisamos apenas definir o doctype como <strong>&lt!DOCTYPE html></strong>.</p>
    <p>Até a criação do HTML5, os programadores precisavam decidir entre 3 doctypes diferentes, cada um com suas restrições e peculiaridades. Já com o HTML5, esse processo ficou mais simples, possibilitando que as páginas criadas não possuam as restrições que caracterizavam as versões passadas.</p>

    <?php include "Exemplos/HTML_Basico/Ex_Basico_00.php"; ?>

    <hr>

    <h2>O elemento &lthtml></h2>
    <p>É a base de todas as páginas da web.</p>
    <p>Todos os outros componentes do HTML devem ser colocados dentro do elemento &lthtml>.</p>

    <?php include "Exemplos/HTML_Basico/Ex_Basico_01.php"; ?>

    <hr>

    <h2>O elemento &lthead></h2>
    <p>É dentro da &lthead> que se encontram os metadados da página.</p>
    <p>Esses metadados providenciam ao navegador certas informações sobre o documento, como o título da página ou o autor da página por exemplo.</p>
    <p>Também é dentro desse elemento que fazemos links com arquivos de estilos ou scripts externos(JavaScript).</p>
    <p>O conteúdo inserido dentro da &lthead> não é mostrado dentro da página.</p>

    <?php include "Exemplos/HTML_Basico/Ex_Basico_02.php"; ?>

    <hr>

    <h2>O elemento &ltbody></h2>
    <p>Este elemento é o responsável por conter todo o conteúdo que será mostrado na tela.</p>
    <p>É a parte principal de um arquivo HTML.</p>

    <?php include "Exemplos/HTML_Basico/Ex_Basico_03.php"; ?>

    <hr>

    <p>Agora que você já conhece a estrutura básica de uma página HTML, que tal dar uma olhada nos metadados e como mecanismos de pesquisa os interpretam?</p>

    <hr>
    <hr>

    <a href="HTML_Intro.php" class="btn btn-lg btn-success" ">Voltar</a>
    <a href="HTML_Atributos.php" class="btn btn-lg btn-success" style="display: inline; float: right">Próxima página</a>
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
