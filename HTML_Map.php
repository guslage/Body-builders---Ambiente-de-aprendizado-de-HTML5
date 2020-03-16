<!DOCTYPE html>
<html>
<head>
    <title>HTML | Mapas</title>     
    <meta charset="utf-8">
    <?php include "codemirrorscripts.html"; ?>

    <link rel="stylesheet" type="text/css" href="sheet/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="sheet/frameword.css">
    <script defer src="fawesome/svg-with-js/js/fontawesome-all.js"></script>
    <?php include "sheet/scriptjs.html"; ?>

</head>
<body>

    <div id="header1">
        <h1>Mapas interativos</h1>    
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <?php include "sidenav.html"; ?>
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-8">
                <div id="page-body">
                    <div id="page-principal">
                        <section id="principal">
                            <h2>Defnição</h2>
                            <p>A tag <strong>&ltmap></strong> é usada para definir uma imagem com áreas clicáveis, carinhosamente apelidada de mapa.</p>
                            <p>Este elemento é acompanhado do atributo <strong>name</strong>, que recebe o mesmo valor do atributo <strong>usemap</strong> da tag <strong>&ltimg></strong>.</p>
                            <p>Áreas clicáveis do mapa são estabelecidas pela tag <strong>&ltarea></strong>, que se econtra dentro do elemento <strong>&ltmap></strong>.</p>
                            <p>A tag <strong>area</strong> é utilizada junto dos atributos <strong>shape</strong>, <strong>coords</strong> e <strong>href</strong>.</p>
    
                            <li>shape: Especifica o formato da área.</li>
                            
                            <br>

                            <table class="table table-striped">
                                <tr>
                                    <th>Valor</th>
                                    <th>Função</th>
                                </tr>
                                <tr>
                                    <td>circle</td>
                                    <td>Define um circulo</td>
                                </tr>
                                <tr>
                                    <td>default</td>
                                    <td>A área cobre a imagem inteira</td>
                                </tr>
                                <tr>
                                    <td>rect</td>
                                    <td>Define um retangulo</td>
                                </tr>
                                <tr>
                                    <td>poly</td>
                                    <td>Define um polígono</td>
                                </tr>
                            </table>
    
                        <ul>
                            <li>coords: Define as coordenadas da área.<br>
                                As coordenadas variam de acordo com a forma da área. <br><br>
                                Caso o formato seja de um retangulo, devem ser atribuidos os valores x1 (canto inferior esquero) y1 (cantosuperior esquero) e x2 (canto inferior direito) y2 (canto superior direito). <br><br>
                                À um circulo atribuimos o valor x1  y1 e o raio. <br><br>
                                Quando um polígono for utilizado, as coordenadas variam com a forma do poligono. <br><br>
                                Ex: x1 y1, x2 y2, x3 y3 ... xn yn <br> 
                            </li>
                        </ul>
   
                        <ul>
                            <li>href: Indica para qual página o usuário será direcionado ao clicar no mapa.</li>
                        </ul>

                        <?php include "Exemplos/HTML_Map/Ex_Map_00.php" ?>
                        
                    </section>
                    <hr>

                    <h2 id="atr">Atributos da tag &ltmap></h2>
                    <section id="atr-explain">

                        <button class="btn btn-info btn-atr" data-toggle="collapse" data-target="#ATR_name">
                            <h3>name</h3>
                        </button>

                        <div id="ATR_name" class="collapse in" style="background-color: #eee; padding: 2%"> 
                            Dá um nome ao elemento.
                        </div>    
                    
                    </section>
                        
                    <hr>

                    <h2 id="atr">Atributos da tag &ltarea></h2>
                    <section id="atr-explain">

                        <button class="btn btn-info btn-atr" data-toggle="collapse" data-target="#ATR_alt">
                            <h3>alt</h3>
                        </button>
                        <div id="ATR_alt" class="collapse in"> 
                            Adiciona uma descrição à imagem que é mostrada caso o navegador não consiga carrega-la de maneira correta. <br><br>
                            <li>A presença desse atributo é obrigatória caso o atributo href esteja sendo usado.</li>
                        </div>

                        <hr class="dotted">

                        <button class="btn btn-info btn-atr" data-toggle="collapse" data-target="#ATR_coords">
                            <h3>coords</h3>
                        </button>
                        <div id="ATR_coords" class="collapse in">
                            Define as coordenadas do mapa.
                        </div>


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
                                <td>Uma palavra-chave para o atual documento</td>
                            </tr>
                        </table>

                        <h3>shape</h3>
                        <p>Define o formato da área.</p>

                        <h3>target</h3>
                        <p>Informa aonde o navegador deve abrir a página referenciada no atributo <strong>href</strong></p>

                        <h3>type</h3>
                        <p>Especifica o MIME da página para qual o usuário será direcionado.</p>
                        <li>Só pode ser utilizado na presença do atributo <strong>href</strong>.</li>

                    </section>
                    </section>

                    <hr>
                    <hr>

                    <a href="HTML_Basico.php" class="btn btn-lg btn-success" ">Voltar</a>
        
                    <a href="HTML_Div.php" class="btn btn-lg btn-success" style="display: inline; float: right">Próxima página</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "codemirrorconfig.html" ?>

</body>
</html>