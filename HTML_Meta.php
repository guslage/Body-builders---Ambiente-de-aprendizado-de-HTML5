<?php 
    session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>HTML | Meta</title>
    <meta charset="utf-8">
    <?php include "codemirrorscripts.html"; ?>  

    <link rel="stylesheet" type="text/css" href="sheet/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="sheet/frameword.css">
    <script defer src="fawesome/svg-with-js/js/fontawesome-all.js"></script>
    <?php include "sheet/scriptjs.html" ?>

</head>
<body>
        <?php include "navbar-top.php"; ?>

        <div id="header1">
            <h1>A tag &ltmeta> - Os metadados da página</h1>
        </div>

        <div class="container-fluid">
            <div class="row no-gutter">
                <?php include "sidenav.html"; ?>
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-8">
                <div id="page-body">

                    <div id="page-principal">
                        <section id="principal">
    <h2>Definição</h2>
    <p>Essa tag tem como função definir os metadados da página, como a codificação da caracteres utilizada, a descrição da página, o autor da página, etc...</p>
    <p>Toda &ltmeta> deve conter um atributo charset, http-equiv ou name, e nos últimos dois casos deve ser acompanhado do atributo content.</p>
    <p>Os metadados da página devem ser definidos sempre na seção &lthead>.</p>

    <?php include "Exemplos/HTML_Meta/Ex_Meta_02.php"; ?>

    <hr>

    <h2>Tipos de metadados</h2>
    <h3>a tag &lttitle></h3>
    <p>Define o título da página.</p>

    <?php include "Exemplos/HTML_Meta/Ex_Meta_03.php"; ?>

    <hr>

    <h3>charset</h3>
    <p>Informa o tipo de codificação de caracteres que será utilizado na página.</p>
    <p>Ao utilizarmos a codificação correta em uma página, permitimos que o navegador mostre caracteres especiais sem erros, como acentos ou símbolos.</p>
    <p>É recomendado o uso da codificação <strong>utf-8</strong>.</p>
    <p>Até a introdução do atributo charset no HTML5 a codificação era definida junto do atributo http-equiv.</p>
    <p>O processo para se definir a codificação da página foi simplificado, mas ainda é permitido o uso do método antigo.</p>
    
    <?php include "Exemplos/HTML_Meta/Ex_Meta_00.php"; ?>

    <br>
    
    <?php include "Exemplos/HTML_Meta/Ex_Meta_01.php"; ?>

    <hr>

    <h3>viewport</h3>
    <p>Instrui o navegador sobre como dimensionar a página.</p>
    <p>É essencial para aplicações que visam a compatibilidade com telas menores, como dispostivos mobiles.</p>

    <?php include "Exemplos/HTML_Meta/Ex_Meta_04.php"; ?>

    <hr>

    <h3>keywords</h3>
    <p>Define palavras-chave apra ajudar mecanismos de pesquisa durante a busca.</p>

    <?php include "Exemplos/HTML_Meta/Ex_Meta_05.php"; ?>

    <hr>

    <h3>author</h3>
    <p>Define o autor da página.</p>

    <?php include "Exemplos/HTML_Meta/Ex_Meta_06.php"; ?>
    <hr>

    <h3>description</h3>
    <p>Cria uma breve descrição da página que é mostrada duranta a pesquisa.</p>

    <?php include "Exemplos/HTML_Meta/Ex_Meta_07.php"; ?>

    <hr>

    <p>Bem, acho que já está na hora de te deixar brincar com o HTML... mas não muito.</p>
    <p>No próximo tutorial você verá os elementos básicos de edição de texto do HTML.</p>

    <hr>
    <hr>

    <a href="HTML_Atributos.php" class="btn btn-lg btn-success" ">Voltar</a>
	<a href="HTML_Txtedit.php" class="btn btn-lg btn-success" style="display: inline; float: right">Próxima página</a>
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
