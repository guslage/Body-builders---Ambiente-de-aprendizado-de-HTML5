<?php 
    session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>HTML | select, opt e optgroup</title>
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
            <h1>Elementos de seleção - select, opt e optgroups</h1>
        </div>

        <div class="container-fluid">
            <div class="row">
                <?php include "sidenav.html"; ?>
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-7">
                <div id="page-body">

                    <div id="page-principal">
                        <section id="principal">
        <h2>Definição</h2>
        <p>A tag select cria um menu de opções no estilo drop-down.</p>
        <p>Essas opções são definidas através da tag &ltoption>, onde cada opção deve ter seu valor atribuído pelo atributo value.</p>
        <p>Devemos lembrar também, de atribuir um nome ao &ltselect>, para que os dados possam ser capturados em outra página. Isso pode ser feito com o uso do atributo name.</p>

        <div class="code_Ex">
        <div class="card">
        <div class="card-body">     
            <code>
                ...<br>

                ...
            </code>
        </div>
        </div>
        <br>
        <form method="post" action="Exemplos/HTML_editor.php">
            <input type="hidden" name="code" value="section/section02.html">
            <input type="submit" name="submit_code" class="btn btn-outline-info" value="Testar código!">
        </form>
        </div>

        <br>

        <p>Essa lista pode ser dividida em seções se as opções forem agrupadas dentro da tag &ltoptgroup> em conjunto com o atributo label, para dar nome a cada seção.</p>

        
        <div class="code_Ex">
        <div class="card">
        <div class="card-body">     
            <code>
                ...<br>

                ...
            </code>
        </div>
        </div>
        <br>
        <form method="post" action="Exemplos/HTML_editor.php">
            <input type="hidden" name="code" value="section/section02.html">
            <input type="submit" name="submit_code" class="btn btn-outline-info" value="Testar código!">
        </form>
        </div>

        </section>
        
                        <hr>
    
                            
                        <h2 id="atr">Atributos</h2>
                        <section id="atr-explain">

        <p>A tag &ltoptgroup> é recomendada quando o formulário possui listas grandes, onde um nível elevado de organização de conteúdo torna algo necessário.</p>    

        <hr>

        <h2>Atributos</h2>
        <h3>autofocus</h3>
        <p>É um atributo booleano.</p>
        <p>Quando a página é carregada, o elemento entra em foco.</p>
        <p>É compátivel apenas com a tag &ltselect></p>

        <br>

        <h3>disabled</h3>
        <p>É um atributo booleano.</p>
        <p>Se este atributo estiver presente, o elemento se torna inutilizável.</p>
        <p>É compatível com as três tags.</p>

        <br>

        <h3>form</h3>
        <p>Indica a qual formulário o input pertence.</p>
        <p>O valor desse atributo deve ser igual ao id do formulário referenciado.</p>
        <p>É compatível com a tag select.</p>

        <br>

        <h3>multiple</h3>
        <p>É um atributo booleano.</p>
        <p>Permite que várias opções sejam selecionadas.</p>
        <p>É compatível com a tag select.</p>

        <br>

        <h3>required</h3>
        <p>É um atributo booleano.</p>
        <p>Torna obrigatório o uso do elemento.</p>
        <p>É compatível com a tag select.</p>

        <br>

        <h3>selected</h3>
        <p>Quando a lista entra em foco, uma opção já é selecioanda automaticamente.</p>
        <p>É compatível com a tag option.</p>

        <br>

        <h3>size</h3>
        <p>Define quantas opções são aceitas em uma lista.</p>
        <p>É compatível com a tag select.</p>

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
