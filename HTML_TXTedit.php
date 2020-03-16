<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>HTML | Edição de texto</title>
    <meta charset="utf-8">
    <?php include "link_includes.php"; ?>
</head>
<body>

    <?php include "navbar-top.php"; ?>
    <div id="page-header">
        <h1>Elementos de edição de texto</h1>
    </div>

    <div class="container-fluid">
    <div class="row no-gutter">
    <?php include "sidenav.html"; ?>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-8">
        <div id="page-body">
            <div id="page-principal">
                <section id="definição"> 
                    <h2>Definição</h2>
                    <p>Dentro do HTML possuimos uma série de tags que nos ajudam a formatar textos de maneira correta e padronizada.</p>
                    <p>Possuímos ferramentas que variam desde a criação de um simples parágrafo à blocos de citação.</p>
                    <p>Neste tutorial você verá como formatar seu texto dentro do HTML de maneira simples e rápida.</p>
                </section> 

                    <hr>

                    <section id="tag-p">
                    <h2>A tag &ltp></h2>
                    <p>Cria um parágrafo dentro da página.</p>

                    <?php include "Exemplos/HTML_TXTEdit/Ex_Txt_00.php"; ?>
                    </section>

                    <hr>

                    <section id="tag-b">
                    <h2>As tags &ltb> e &ltstrong></h2>
                    <p>A &ltb> define um texto em negrito, e a &ltstrong>... faz exatamente a mesma coisa. Agora você deve estar se perguntando: "Qual o sentido de ter duas tags que fazem a mesma coisa?". A diferença está no propósito desses elementos. A tag &ltstrong> é usada para destacar um texto importante, enquanto a &ltb> destaca um texto qualquer sem importância.</p>   

                    <?php include "Exemplos/HTML_TXTEdit/Ex_Txt_01.php"; ?>
                    </section>

                    <hr>

                    <section id="tag-em">
                    <h2>As tags &lti> e &ltem></h2>
                    <p>Definem um texto em itálico.</p>
                    <p>Assim como  nas tags &ltb> e &ltstrong>, estes dois elementos também se diferenciam por suas funções.</p>
                    <p>A tag &lti> é usada para simplismente aplicar um efeito italico, enquanto a &ltem> enfatiza algo importante dentro do texto.</p>

                    <?php include "Exemplos/HTML_TXTEdit/Ex_Txt_02.php"; ?>
                    </section>

                    <hr>

                    <section id="tag-sup">
                    <h3>&ltsup> e  &ltsub></h3>
                    <p>Definem textos sobrescritos e subscritos respectivamente.</p>

                    <?php include "Exemplos/HTML_TXTEdit/Ex_Txt_03.php"; ?>
                    </section>

                    <hr>  

                    <section id="tag-pre">
                    <h2>Textos pré formatados</h2>
                    <p>A tag <strong>&ltpre></strong> formata o texto da mesma maneira que ele foi digitado, mantendo espaços e quebras de linha.</p>
                    <li>Esta tag define o texto com a fonte <strong>courier</strong>.</li>  

                    <br>

                    <?php include "Exemplos/HTML_TXTEdit/Ex_Txt_04.php"; ?>
                    </section>

                    <hr>

                    <section id="tag-quote">
                    <h2>Citações</h2>
                    <p>Podemos referenciar outras obras dentro de nossos textos com as tags &ltq> e &ltblockquote>.</p>

                    <p>A tag &ltq> é utilizada para fazer citações pequenas, enquanto a &ltbloackquote> define menções maiores, em blocos.</p>

                    <?php include "Exemplos/HTML_TXTEdit/Ex_Txt_05.php"; ?>

                    <br>
                        
                    <?php include "Exemplos/HTML_TXTEdit/Ex_Txt_06.php"; ?>
                    </section>
                
        
                </div>               
     

                <div id="page-atr">                
                <section id="atributos">
                <h2>Atributos</h2>
                <div id="page-atr-body">

                <section id="atr-global">
                    <div class="atr">   
                        <div class="atr-header">
                            <div class="atr-title">
                                <h3>Atributos globais</h3>
                            </div>
                        </div>
                        <p>Os elementos apresentados neste tutorial dão suporte aos atributos globais do HTML.</p>
                        <p>Para saber mais sobre esses atributos <a href="HTML_Atributos.php">clique aqui!</a></p>
                    </div>  
                </section>

                </div>
                </section>
            </div>
        
            <hr>
                                
             <div id="page-atr">                
                <section id="atributos-q">
                <h2>Atributos - &ltq> e &ltblockquote></h2>
                <div id="page-atr-body">

                <section id="atr-cite">
                    <div class="atr">   
                        <div class="atr-header">
                            <div class="atr-title">
                                <h3>cite</h3>
                            </div>
                        </div>
                        <p>Define a fonte do texto citado.</p>
                        <p>Esse atributo não possui nenhum efeito visual na página, mas pode ser utilizado por ususários ao inspecioanarem o código fonte do HTML.</p>
                    </div>  
                </section>

                 </div>
                </section>
            </div>
            <hr>
            <hr>
            <div id="final">
            <a href="HTML_Meta.php" class="btn btn-lg btn-success">Tutorial anterior</a>
            <a href="HTML_Headings.php" class="btn btn-lg btn-success" style="display: inline; float: right;">Próximo tutorial</a>
            </div>  
            </div>
        </div>
    </div>
    </div> 
    <?php include "codemirrorconfig.html" ?>    
</body>
</html>