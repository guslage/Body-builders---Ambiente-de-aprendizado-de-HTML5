<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>HTML | A tag &lta></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "link_includes.php"; ?>
</head>
<body>
    <?php include "navbar-top.php";  ?>
    
    <div id="page-header">
        <h1>Criando hyperlinks com o elemento &lta></h1>
    </div>

    <div class="container-fluid" style="max-width: 100%; width: 100%">
    <div class="row no-gutter">
    <?php include "sidenav.html"; ?>
    <div class="col-xs-12 col-xl-8">
        <div id="page-body">
            <div id="page-principal">
                <section id="definição">
                            <h2>Definição</h2>
                            <p>O elemento &lta> cria um hyperlink que quando utilizado, direciona o usuário para outras páginas ou até mesmo partes diferentes dentro de um mesmo documento.</p> 
                            <p>Mas não é somente dessa tag que vivem os hyperlinks, pois ainda necessitamos do atributo href, que é o responsável por guardar o url para onde o usuário será direcionado.</p> 

                            <?php include "Exemplos/HTML_A/Ex_A_00.php"; ?>

                            <hr>

                            <p>Todo conteúdo inserido dentro do elemento &lta> será transformado em um hyperlink, seja ele um bloco de texto, um botão ou até mesmo uma imagem.</p>

                            <?php include "Exemplos/HTML_A/Ex_A_01.php"; ?>

                            <hr>
                            </section>
                            
                            <h2 id="atr">Atributos</h2>
                            <section id="atr-explain">

                                <h3>download</h3>
                                <p>Efetua o download de um arquivo quando o usuário é direcionado à outra página.</p>
                                <p>Este atributo deve conter em seu valor o nome do arquivo que será baixado.</p>
                                <li>Só pode ser utilizado na presença do atributo <strong>href</strong>.</li>

                                <h3>href</h3>
                                <p>Instrui a qual página o usuário deve ser direcionado ao clicar no link.</p>

                                <h3>hreflang</h3>
                                <p>Especifica a linguagem da página referenciada.</p>
                                <li>Só pode ser utilizado na presença do atributo <strong>href</strong>.</li>
                                
                                <h3>media</h3>
                                <p>Informa a qual tipo de dispositivo a página referenciada é otimizada.</p>
                                <li>Só pode ser utilizado na presença do atributo <strong>href</strong>.</li>

                                <h3>rel</h3>
                                <p>Estabelce a relação entre a página linkada e a página atual.</p>
                                <p>Este atributo não oferece nenhuma influência sobre a página, e sua função é exclusivamente informativa.</p>
                                <li>Só pode ser utilizado na presença do atributo <strong>href</strong>.</li>

                                <table class="table table-striped">
                                    <tr>
                                        <th>Valor</th>
                                        <th>Função</th>
                                    </tr>
                                    <tr>
                                        <td>alternate</td>
                                        <td>Refere-se a uma versão alternativa da página, como uma versão traduzida para outra língua, ou para impressão</td>
                                    </tr>
                                    <tr>
                                        <td>author</td>
                                        <td>Direciona o usuário para alguma página com informações do autor do documento</td>
                                    </tr>
                                    <tr>
                                        <td>help</td>
                                        <td>Direciona o usuário para uma página de ajuda</td>
                                    </tr>
                                    <tr>
                                        <td>license</td>
                                        <td>Direciona o usuário para uma página com informações de direitos autoriais do documento</td>
                                    </tr>
                                    <tr>
                                        <td>next</td>
                                        <td>Refere-se à próxima página</td>
                                    </tr>
                                    <tr>
                                        <td>nofollow</td>
                                        <td>O link juice da página não é passado para os sites linkados. O link juice é a autoridade da página estabelicida pelos vários critérios do Google</td>
                                    </tr>
                                    <tr>
                                        <td>prefetched</td>
                                        <td>Informa ao navegador que a página referenciada deve ser salva no cache</td>
                                    </tr>
                                    <tr>
                                        <td>prev</td>
                                        <td>Refere-se à página anterior</td>
                                    </tr>
                                    <tr>
                                        <td>search</td>
                                        <td>Linka o usuário com uma ferramenta de busca</td>
                                    </tr>
                                    <tr>
                                        <td>tag</td>
                                        <td>Define uma palavra-chave para o atual documento</td>
                                    </tr>
                                </table>

                                <h3>type</h3>
                                <p>Especifica o MIME da página para qual o usuário será direcionado.</p>
                                <li>Só pode ser utilizado na presença do atributo <strong>href</strong>.</li>
                                
                            </section>
                            
                            <hr>

                            <p>No próximo tutorial</p>

                            <hr>
                            <hr>

                            <a href="HTML_Basico.php" class="btn btn-lg btn-success" ">Voltar</a>
                        	<a href="HTML_Headings.php" class="btn btn-lg btn-success" style="display: inline; float: right">Próxima página</a>

	                   </div>
	               </div>
	           </div>
            </div>
	   </div>
    
    <?php include "codemirrorconfig.html" ?>

</body>
</html>