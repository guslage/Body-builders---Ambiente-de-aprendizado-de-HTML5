<!DOCTYPE html>
<html>
<head>
	<title>HTML | textarea</title>	
    <meta charset="utf-8">          
	<link rel="stylesheet" type="text/css" href="sheet/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="sheet/frameword.css">
	<script defer src="fawesome/svg-with-js/js/fontawesome-all.js"></script>
	<?php include "sheet/scriptjs.html" ?>
</head>
<body>

	<div class="header1">
    	<h1>O elemento &lttextarea></h1>	
    </div>
    
    <div class="container-fluid">
    <div class="row no-gutter">
    <?php include "sidenav.html"; ?>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-8">
    <div class="page-body">

    <div class="page-principal">
    <h2>Definição</h2>
    <p>A tag &lttextarea> cria um campo de texto que pode conter linhas infinitas.</p>
    <p>Uma outra propriedade peculiar deste elemento é a capacidade que o mesmo tem de ser redimensionável.</p>

    <div class="code_Ex">
        <div class="card">
        <div class="card-body">
            <code>
                ...<br>
                &lttextarea name="texto"><br>
                ...<br>
                &lt/textarea><br>  
                ...
            </code>
        </div>
        </div>
        <br>
        <form method="post" action="Exemplos/HTML_editor.php">
            <input type="hidden" name="code" value="input/textarea.html">
            <input type="submit" name="submit_code" class="btn btn-outline-info" value="Testar código!">
        </form>
    </div> 

    <hr>

    <h2>Atibutos</h2>

    <h3>autofocus</h3>
    <p>É um atributo booleano.</p>
    <p>Quando a página é carregada, o elemento automaticamente entra em foco.</p>

    <h3>cols</h3>
    <p>Especifica a largura em colunas de uma &ltteztarea>.</p>

    <h3>dirname</h3>
    <p>Possibilita que a direção do texto seja enviada em conjunto com os outros dados do formulário.</p>
    <p>O valor deste atirbuto deve ser o name da tag seguido por ".dir".</p>
    <p>Só terá algum efeito quando o formulário utilizar o método GET, pois o valor do atributo só pode ser visto no url da página.</p>

    <h3>disabled</h3>
    <p>É uma tributo booleano.</p>
    <p>Torna o elemento inutilizavel.</p>

    <h3>form</h3>
    <p>Especifica a qual formulário o elemento pertence.</p>
    <p>Este atributo deve receber o id do formulário referenciado.</p>

    <h3>maxlentght</h3>
    <p>Define um número maximo de caracteres permitidos dentro do &lttextarea>.</p>

    <h3>name</h3>
    <p>Dá um nome ao elemento.</p>

    <h3>placeholder</h3>
    <p>Cria um texto que serve como dica dentro do &lttextarea>.</p>

    <h3>readonly</h3>
    <p>É um atributo booleano.</p>
    <p>O elemento é usado somente para leitura.</p>

    <h3>required</h3>
    <p>É um atributo booleano.</p>
    <p>Torna obrigatório o uso do elemento.</p>

    <h3>rows</h3>
    <p>Define a altura do &lttextarea></p>

    <h3>wrap</h3>
    <p>Informa ao navegador sobre como os dados são "embrulhados" após o envio.</p>

    <table class="table table-striped">
        <tr>
            <th>Valor</th>
            <th>Função</th>
        </tr>
        <tr>
            <td>hard</td>
            <td>As quebras de linhas são inseridas no envio dos dados. Quando este valor é definido, o atributo deve estar presente.</td>
        </tr>
        <tr>
            <td>soft</td>
            <td>É o valor padrão. As quebras de linhas não são inseridas.</td>
        </tr>
    </table>

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