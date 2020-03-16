<?php 
    session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>HTML | Formulários</title>
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
            <h1>O elemento &ltform> - Criando formulários</h1>
        </div>

        <div class="container-fluid">
            <div class="row">
                <?php include "sidenav.html"; ?>
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-7">
                <div id="page-body">

                    <div id="page-principal">
                        <section id="principal">
                            <h2>Definição</h2>    
                            <p>O elemento <strong>&ltform></strong> cria um formulário que possibilita a entrada de dados do usuário.</p>
                            <p>É este elemento que nos dá a habilidade de criar páginas de login e cadastro, por exemplo.</p>
                            <p>A tag &ltform> deve sempre ser acompanhada dos atributos <strong>method</strong> e <strong>action</strong>.</p>
                            <li><strong>action:</strong> Define para onde são enviados os dados inseridos.</li>
                            <li><strong>method:</strong> Instrui o navegador sobre qual método HTTP deve ser utilizado para enviar os dados à outra página.
                            </li>
                            <br>
                            <p>Os valores aceitos pelo atributo method são: </p>
                            <li><strong>GET: </strong>Os dados são enviados através do url da página, e assim, ficam visiveis e disponiveis para modificação. É o método menos seguro.</li>
                            <br>
                            <li><strong>POST: </strong>Os dados são enviados através do servidor, ou seja, não são mostrados no endereço página. É o método mais seguro. Quando este método é utilizado, o arquivo deve ser salvo não mais com .html mas sim como .php.</li>
                            <br>
                            <p>Os dados enviados são resgatados na outra página através das variáveis superglobais do php $_GET e $_POST.</p>
                            <p>Um conhecimento básico de php é necessário para se tirar total proveito de um formulário.</p>
                            <div class="code_Ex">
                                    Formulário criado com o método GET
                                <div class="card">
                                <div class="card-body">
                                    <code>
                                        ...<br>
                                        &ltform action="pagina_teste_get.html" method="GET"><br>
                                        ...<br>
                                        &lt/form><br>
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
                            <div class="code_Ex">
                                    Formulário criado com o método POST
                                <div class="card">
                                <div class="card-body">
                                    <code>
                                        ...<br>
                                        &ltform action="pagina_teste_post.html" method="POST"><br>
                                        ...<br>
                                        &lt/form><br>
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

                            <h2>Atributos</h2>
                            <h3>accept-charset</h3>
                            <p>Define qual o charset utilizado no envio dos dados.</p>

                            <h3>autocomplete</h3>
                            <p>Indica se os componentes do formulário possuirão a função de autocomplete.</p>

                            <h3>enctype</h3>
                            <p>Especifica uma codificação de caracteres para os dados enviados pelo formulário.</p>
                            
                            <table class="table table-striped">
                                <tr>
                                    <th>Valor</th>
                                    <th>Função</th>
                                </tr>
                                <tr>
                                    <td>application/x-www-form-urlencoded</td>
                                    <td>É o valor padrão aplicado se o atributo não se encontrar presente. Troca os caracteres especiais por valores hexadecimais e os espaços são convertidos em sinais de "+". Esse tipo de codificação se mostra eficaz na maioria das vezes, tornando dispensável o uso do atributo em várias situações.</td>
                                </tr>
                                <tr>
                                    <td>mutlipart/form-data</td>
                                    <td>Nenhum caractere é codificado. Este valor é definido quando o formulário requer o upload de algum arquivo.</td>
                                </tr>
                                <tr>
                                    <td>text/plain</td>
                                    <td>Espaços são trocados por sinais de "+". Este tipo de codificação não possui nenhuma função definida. Seu uso não é recomendado.</td>
                                </tr>
                            </table>

                            <h3>novalidate</h3>
                            <p>É um atributo booleano.</p>
                            <p>Determina se os elementos do formulário serão validados após o envio das informações.</p>

                            <h3>target</h3>
                            <p>Indica ao navegador onde mostrar o resultado do formulário.</p>

                                <table class="table table-striped">
                                <tr>
                                    <th>Valor</th>
                                    <th>Função</th>
                                </tr>
                                <tr>
                                    <td>_blank</td>
                                    <td>Os dados são mostrados em uma nova guia.</td>
                                </tr>
                                <tr>
                                    <td>_self</td>
                                    <td>Os dados são mostrados na mesma guia.<td>
                                </tr>
                                <tr>
                                    <td>_parent</td>
                                    <td>Se o formulário estiver em um iframe dentro de outro iframe, o resultado será mostrado no "frame pai".</td>
                                </tr>
                                <tr>
                                    <td>_top</td>
                                    <td>Se o formulário estiver em um iframe, o resultado é mostrado na guia principal.</td>
                                </tr>
                            </table>

                            <hr>

                            <h2>Atributos globais</h2>
                            <p>Este elemento dá suporte aos atributos globais do HTML.</p>
                            <p>Para saber mais sobre esses atributos <a href="HTML_Atributos.php">clique aqui!</a></p>

                            <hr>

                            <p>Parece que agora você já sabe o que é um formulário.</p>
                            <p>No próximo tutorial veremos o funcionamento da tag &ltinput> e suas variações.</p>

                            <hr>
                            <hr>

                            <a href="HTML_Basico.php" class="btn btn-lg btn-success" ">Voltar</a>
                        	<a href="HTML_Input.php" class="btn btn-lg btn-success" style="display: inline; float: right">Próxima página</a>

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