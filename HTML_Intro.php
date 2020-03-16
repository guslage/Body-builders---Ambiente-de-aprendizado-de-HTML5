<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>HTML | Introdução</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "link_includes.php"; ?>
</head>
<body>

    <?php include "navbar-top.php"; ?>
    <div id="page-header">
        <h1>HTML - Introdução</h1>
    </div>

    <div class="container-fluid">
    <div class="row no-gutter">
    <?php include "sidenav.html"; ?>
    <div class="col-xs-12 col-xl-8">
        <div id="page-body">
            <div id="page-principal">
                <section id="definição">  
                    <em>Este site visa o ensino de HTML5. Elementos em desuso não serão aprofundados.</em>

                        <br>
                        <br>


                        <h2>Oque é o HTML?</h2>
                        <p>HTML é a sigla para HyperText Markup Language (Linguagem de Marcação de Hiper Texto).</p>
                        <p>O HTML e seus elementos são a base de todas todas as páginas da web.</p>
                        <p>O HTML é divido em tags, e essas tags formam os elementos de uma página.</p>

                        <hr>

                        <!--_____________________________________________TAGS____________________________________________-->
                        <h2>Tags</h2>
                        <p>As tags são uma espécie de palavra-chave que tem como propósito instruir o navegador sobre como formatar a sua página.</p>
                        
                        <p>As tags geralmente vêm em pares, como a tag div por exemplo.</p>

                        <?php include "Exemplos/HTML_Intro/Ex_Intro_00.php" ?>

                        <br>

                        <h3>Mas...</h3>
                        <p>Não é toda tag que é apresentada em pares, ou seja, nem todas as tags criam elementos.</p>
                        <p>Essas tags não possuem conteúdo, sendo assim, não há necessidade de fecha-las.</p>
                        <p>Como exemplo podemos utilizar a tag &ltbr&gt, que efetua uma quebra de linha dentro da página.</p>
                        <p>Vale lembrar também que as tag não são case sensitive, ou seja, &ltdiv&gt é a mesma coisa que &ltDIV&gt, mas por questões de padronização é recomendado que não se use caixa alta.</p>
                        <hr>    

                        <h2>Como posso escrever meu código HTML?</h2>
                        <p>Você pode escrever seu HTML até nos mais simples editores de texto, como o Bloco de Notas, mas também existem editores voltados para uso mais profissional, como o Sublime Text ou o Adobe Dreamweaver.</p>
    
                        <div>
                            <figure>
                                <img src="imagens/notepad_ex.png">
                                <figcaption>HTML escrito no Bloco de Notas</figcaption>
                            </figure>   

                            <figure>
                                <img src="imagens/sublime_ex.png">
                                <figcaption>HTML escrito no Sublime Text</figcaption>
                            </figure>   
                        </div>

                        <br>

                        <h2>Salvando seu arquivo HTML</h2>
                        <p>Para que você possa visualizar seu HTML dentro do navegador, salve seu arquivo com a extensão .htm ou .html, e de preferência, com codificação utf-8.</p>

                        <img src="imagens/Salvarhtml.png">

                        <hr>
                        <h2>Visualizando seu HTML dentro do navegador</h2>
                        <p>Abra o seu HTML em um navegador de sua preferencia (botão direito + abrir com) ou simplesmente execute o arquivo</p>

                        <img src="imagens/Pagina_Teste.png">

                        <hr>

                        <p>Agora que você tem uma ideia de como o navegador interpreta o HTML, podemos nos aprofundar mais em seus componentes.</p>
                        <p>No tutorial a seguir, veremos uma propriedade muito importante das tags, os <em>atributos</em>.</p>
                </section>
            </div>  
            <hr>
            <hr>
            <div id="final">
            <a href="Index.php" class="btn btn-lg btn-success">Voltar</a>
            <a href="HTML_Atributos.php" class="btn btn-lg btn-success" style="display: inline; float: right;">Próximo tutorial</a>
            </div>  
            </div>
        </div>
    </div>
    </div> 
    <?php include "codemirrorconfig.html" ?>    
</body>
</html>