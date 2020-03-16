<!DOCTYPE html>
<html>
<head>
	<title>HTML | Linhas e células</title>	
    <meta charset="utf-8">          
	<link rel="stylesheet" type="text/css" href="sheet/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="sheet/frameword.css">
	<script defer src="fawesome/svg-with-js/js/fontawesome-all.js"></script>
	<?php include "sheet/scriptjs.html" ?>
</head>
<body>

	<div class="header1">
    	<h1>Tabelas - Linhas e tipos de células</h1>	
    </div>
    
    <div class="container-fluid">
    <div class="row no-gutter">
    <?php include "sidenav.html"; ?>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-8">
    <div class="page-body">

    <div class="page-principal">
    <h2>Defnição</h2>
    <p>Dentro das tabelas, criamos linhas através da tag <strong>&lttr></strong>, e dentro dessas linhas devem ser criadas as células.</p>
    <p>As células de uma tabela podem ser divididas em 2 grupos:</p>
    <li>Células genéricas definidas pela tag &lttd></li>
    <li>Células de cabeçalho definidas pela tag &ltth></li>

    <br>  

    <div class="code_Ex">
        <div class="card">
        <div class="card-body">
            <code>
                ...<br>
               &lttable><br>
                &lttr> <br>
                &ltth>Cabeçalho&lt/th><br>
                &ltth>Outro Cabeçalho&lt/th><br>
                &lt/tr><br>
                &lttr><br>
                &lttd>linha 1, célula 1&lt/td><br>
                &lttd>linha 1, célula 2&lt/td><br>
                &lt/tr><br>
                &lttr><br>
                &lttd>linha 2, célula 1&lt/td><br>
                &lttd>linha 2, célula 2&lt/td><br>
                &lt/tr><br>
                &lt/table><br>
                ...
            </code>
        </div>
        </div>
        <br>
        <form method="post" action="Exemplos/HTML_editor.php">
            <input type="hidden" name="code" value="table/td-tr.html">
            <input type="submit" name="submit_code" class="btn btn-outline-info" value="Testar código!">
        </form>
    </div> 

    <hr>

    <h2>Atributos da tag &lttd></h2>
    <h3>colspan</h3>
    <p>Define por quantas colunas a célula deve se expander.</p>

    <h3>headers</h3>
    <p>Designa a qual cabeçalho a célula pertence.</p>
    <p>O valor desse atributo deve ser igual ao id do &ltth> refrenciado.</p>

    <h3>rowspan</h3>
    <p>Define por quantas linhas a célula deve se expander.</p>


    <hr>

    <h2>Atributos da tag &ltth></h2>
    <h3>abbr</h3>
    <p>Define uma abreviação do conteúdo contido no cabeçalho.</p>

    <h3>colspan</h3>
    <p>Define quantas colunas a célula se expande.</p>

    <h3>scope</h3>
    <p>Especifica se o cabeçalho pertence à uma coluna, uma linha, grupo de colunas ou grupos de linhas.</p>

    <h3>rowspan</h3>
    <p>Define por quantas linhas a célula deve se expander.</p>

    <h2>Atributos globais</h2>
    <p>Os elementos apresentados neste tutorial dão suporte aos atributos globais do HTML.</p>
    <p>Para saber mais sobre esses atributos <a href="HTML_Atributos.php">clique aqui!</a></p>

    <hr>

    <p>Após este longo e cansativo tutorial veremos como a criação de divisões pode nos ajudar a polir nossas páginas.</p>

    <hr>
    <hr>

    <a href="HTML_Basico.php" class="btn btn-lg btn-success" ">Voltar</a>
	<a href="HTML_Div.php" class="btn btn-lg btn-success" style="display: inline; float: right">Próxima página</a>

	</div>
	</div>
	</div>
	</div>
    </div>

</body>
</html>