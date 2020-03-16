<?php 
    session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>HTML | Tabelas</title>
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
            <h1>Tabelas</h1>
        </div>

        <div class="container-fluid">
            <div class="row">
                <?php include "sidenav.html"; ?>
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-7">
                <div id="page-body">

                    <div id="page-principal">
                        <section id="principal">
    <h2>Definição</h2>    
    <p>Com o elemento <strong>&lttable></strong> podemos criar tabelas dentro do HTML.</p>
    <p><strong>DICA:</strong> Quando criadas, tabelas não possuem bordas. Essa propriedade só pode ser definida através de elementos de estilização.</p> 
    <p>Veja abaixo o exemplo de uma tabela completa:</p>

    <div class="code_Ex">
        <div class="card">
        <div class="card-body">
            <code>
                ...<br>
                &lttable><br>
                &lttr><br>
                &lttd>R$8.000,00&lt/td><br>
                &lttd>R$3.000,00&lt/td><br>
                &lttd>R$5.000,00&lt/td><br>
                &lt/tr><br>
                &lt/table><br>
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
    
    <hr>

    <p>Também podemos utilizar da tag &ltcaption> para darmos uma legenda à tabela.</p>
    <p>Caso seja utilizada, a &ltcaption> deve ser o primeiro elemento definido em uma tabela.</p>

    <div class="code_Ex">
        <div class="card">
        <div class="card-body">
            <code>
                ...<br>
                &lttable><br>
                &ltcaption>Tabela de valores&lt/caption><br>
                ...<br>
                &lt/table><br>
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

    <h2>Atributos globais</h2>
    <p>Este elemento dá suporte aos atributos globais do HTML.</p>
    <p>Para saber mais sobre esses atributos <a href="HTML_Atributos.php">clique aqui!</a></p>

    <hr>

    <p>Essa foi a introdução à tabelas.</p>
    <p>Nos próximos tutoriais vamos nos aprofundar nos elementos que constituem essas tabelas.</p>
    <p>No próximo tutorial estudaremos as tags &lttr> e &lttd>.</p>

    <hr>
    <hr>

    <a href="HTML_Basico.php" class="btn btn-lg btn-success" ">Voltar</a>
	<a href="HTML_Div.php" class="btn btn-lg btn-success" style="display: inline; float: right">Próxima página</a>

                    </section>  

                    <hr>

                </div>  
            </div>
        </div>
    </div>
    </div> 

    <?php include "codemirrorconfig.html" ?>
    
</body>