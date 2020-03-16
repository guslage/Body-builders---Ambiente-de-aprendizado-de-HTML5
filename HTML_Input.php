<?php 
	session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HTML | Input</title>
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
    		<h1>A tag &ltinput></h1>
    	</div>

  		<div class="container-fluid">
    		<div class="row">
    			<?php include "sidenav.html"; ?>
    		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-7">
    			<div id="page-body">

    				<div id="page-principal">
    					<section id="principal">
					    	<h2>Definição</h2>
					    	<p>É o recurso responsável pela entrada de dados dentro de um formulário.</p>
							<p>Antes de criarmos qualquer tipo de input, devemos entender o funcionamento de 3 atributos fundamentais desta tag:</p>
							<li><b>type: </b>informa ao navegador qual tipo de input deve ser usado.</li>
							
							<li><b>name: </b>Define o nome do input.</li>
							
							<li><b>value: </b>Define o valor do input. É dispensável em inputs onde o usuário deve escrever algo(caixas de texto, campos de senha, etc..).</li>
							
							<br>

							<div class="syntax">
								<code>
									&ltinput type="<em>tipo de input</em>" name="<em>nome do input</em>" value="valor do input">	
								</code>
							</div>

							<hr>	
							
							<h2>Tipos de input</h2>
							<br>	
							<h3>Caixas de texto</h3>
							<p><b>type="text"</b></p>
							<p>Um input do tipo text cria uma caixa de texto que aceita a inserção de qualquer tipo de texto.</p>
							
							<div class="code_Ex">
							<div class="card">
							<div class="card-body">		
								<code>
									...<br>
									Nome: &ltinput type="text" name="nome"><br>
									Sobrenome: &ltinput type="text" name="sobrenome"><br>
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

							<h3>Botões</h3>
							<p><b>type="submit"</b></p>
							<p><b>type="reset"</b></p>
							<p>Um botão <b>submit</b> envia os dados do formulário, enquanto o <b>reset</b> os apaga.</p>

							<div class="code_Ex">
							<div class="card">
							<div class="card-body">		
								<code>
									...<br>
									&lt input type="submit" value="Enviar"><br>
									&lt input type="reset" value="Cancelar"><br>
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

							<h3>E-mails e senhas</h3>
							<p><b>type="email"</b></p>
							<p><b>type="password"</b></p>

							<p>O tipo <b>email</b> deve ser utilizado em campos que requerem a inserção de endereços de e-mail.</p>
							<p>O tipo <b>password</b> "esconde" os caracteres digitados, pois é utilizado na definição de senhas.</p>

							<div class="code_Ex">
							<div class="card">
							<div class="card-body">		
								<code>
									...<br>
									E-mail: &ltinput type="email" name="email">&ltbr><br>
									Senha: &ltinput type="password" name="senha">&ltbr><br>
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

							<h3>Caixas de checagem</h3>
							<p><b>type="checkbox"</b></p>
							<p>Este tipo de input cria caixas de checagem.</p>
							<p>Deve ser usado quando damos ao usuário a oportunidade de escolher mais de uma opção dentro de uma lista.</p>
							<p>Com o uso do atributo <b>value</b> defimos o valor do checkbox que é enviado após o preenchimento do formulário.</p>

							<div class="code_Ex">
							<div class="card">
							<div class="card-body">		
								<code>
									...<br>
									Preferências &ltbr><br>
									Ficar em casa &ltinput type="checkbox" name="preferencias1" value="ficar em casa"><br>
									Sair com os amigos &ltinput type="checkbox" name="preferencias2" value="sair com os amigos"><br>
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

							<h3>Botões radio</h3>
							<p><b>type="radio"</b></p>
							<p>A grande diferença entre um botão do tipo <b>radio</b>, e um do tipo <b>checkbox</b> é que o radio é utilizado quando somente uma escolha for permitida.</p>
							<p>Para que impossibilitemos o usuário de escolher mais de uma opção em uma lista, devemos definir o atributo <b>name</b> com o mesmo valor em todos os botões.</p>

							<div class="code_Ex">
							<div class="card">
							<div class="card-body">		
								<code>
									...<br>
									Sexo &ltbr><br>
									Masculino &ltinput type="radio" name="sexo" value="masculino"><br>
									Feminino &ltinput type="radio" name="sexo" value="feminino"><br>
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

							<h3>Datas e horários</h3>
							<p><b>type="date"</b></p>
							<p><b>type="month"</b></p>
							<p><b>type="week"</b></p>
							<p><b>type="time"</b></p>
							<p><b>type="datetime-local"</b></p>
							
							<p>Inputs do tipo date definem um campo que contém datas.</p>

							<p>O tipo month funciona da mesma maneira que o date, mas retirando a possibilidade de se escolher um dia.</p>

							<p>O tipo week especifica em qual semana do mês está a data selecionada.</p>

							<p>O valor datetime-local permite a entrada de uma data e um horário utilizando o fuso-horário em que o usuário se encontra.</p>

							<p>O valor time define a entrada de um horário.</p>

							<p>O formato de datas padrão é ano/mês/dia, mas em alguns navegadores, o formato pode aparecer como dia/mês/ano.</p>
							

							<div class="code_Ex">
							<div class="card">
							<div class="card-body">		
								<code>
									
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

							<h3>Entrada de números</h3>
							<p><b>type="number"</b></p>
							<p><b>type="range"</b></p>
							<p>Um input do tipo number define um campo que aceita somente a entrada de números.</p>
							<p>O tipo range faz essencialmente a mesma coisa, mas o valor é definido através de um slider.</p>

							<div class="code_Ex">
							<div class="card">
							<div class="card-body">		
								<code>
									
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

							<h3>Imagens</h3>
							<p><b>type="image"</b></p>
							<p>Cria uma imagem que funciona da mesma maneira que um botão submit.</p>
							<p>Ao usar este atributo, o valor não precisa ser declarado.</p>
							<p>O atributo <b>src</b> é encarregado de referenciar a imagem que será mostrada.</p>
							<p>Quanto este tipo de input é utilizado, também podemos capturar sd coordenadas x e y de onde a imagem foi clicada.</p>

							<div class="code_Ex">
							<div class="card">
							<div class="card-body">		
								<code>
									
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

							<h3>Cores</h3>
							<p><b>type="color"</b></p>
							<p>Define uma caixa de cores.</p>
							<p>A cor selecionada, quando enviada, é apresetnada pelo seu equivalente hexadecial, ou seja, se você escolher a cor preta e resgatar o valor enviado pelo formulário, você vai receber o valor #000000.</p>

							<div class="code_Ex">
							<div class="card">
							<div class="card-body">		
								<code>
									
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

							<h3>Pesquisas</h3>
							<p>type="search"</p>

							<p>Ao atribuirmos o tipo search a um input, ele passára a ser um campo de busca, mas funcionara da mesma forma que uma caixa de texto.</p>

							<div class="code_Ex">
							<div class="card">
							<div class="card-body">		
								<code>
									
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

							<h3>Url</h3>
							<p><b>type="url"</b></p>
							<p>Cria um campo que aceita a entrada de um url.</p>

							<div class="code_Ex">
							<div class="card">
							<div class="card-body">		
								<code>
									
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

							<h3>Arquivos</h3>
							<p><b>type="file"</b></p>
							<p>Permite ao usuário enviar um arquivo através do formulário.</p>

							<div class="code_Ex">
							<div class="card">
							<div class="card-body">		
								<code>
									
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

							<h3>Valores invisiveis</h3>
							<p><b>type="hidden"</b></p>
							<p>Inputs desse tipo não possuem nenhuma propriedade visual, e enviam um valor que pode ser definido direto no HTML, sem a necessidade de interação do usuário.</p>

							<div class="code_Ex">
							<div class="card">
							<div class="card-body">		
								<code>
									&ltinput type="hidden" name="valor_escondido" value="padrão">
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
							
							<div class="atr-exp">
							<h3>accept</h3>
							<p>Define qual tipo de arquivo é aceito pelo input.</p>
							<p>Este atributo é exclusivo do tipo file.</p>
							<p>Caso esse atributo esteja ausente, todos os tipos de arquivos são aceitos.</p>

							<table class="table table-striped table-small">
							<th>valor</th>
							<th>função</th>
								<tr>
									<td>audio/*</td>
									<td>Aceita todos os tipos de aúdio.</td>
								</tr>
								<tr>
									<td>image/*</td>
									<td>Aceita todos os tipos de imagens.</td>
								</tr>
								<tr>
									<td>video/*</td>
									<td>Aceita todos os tipos de vídeo.</td>
								</tr>
								<tr>
									<td><i>Outras extensões(.docx, .gif, etc..)</i></td>
									<td>Aceita somente o formato definido.</td>
								</tr>
							</table>
							</div>
		
							<br>

							
							<h3>alt</h3>
							<p>Cria uma descrição que é mostrada quando a imagem não é devidamente carregada pelo navegador.</p>
							<p>Este atributo é exclusivo do tipo image.</p>
							
							<br>
							
							
							<h3>autocomplete</h3>
							<p>Indica se o input irá utilizar a função de autocomplete.</p>
							<p><b>Valores: yes/no</b></p>
							

							<h3>autofocus</h3>
							<p>É um atributo booleano.</p>
							<p>Quando a página é carregada, o input que conter este atributo, será automaticamente focado.</p>

							<h3>checked</h3>
							<p>É um atributo booleano.</p>
							<p>Seleciona automaticamente uma das opções de um checkbox ou radio.</p>

							<h3>disabled</h3>
							<p>É um atributo booleano.</p>
							<p>Se este atributo estiver presente, o input se torna inutilizável.</p>

							<h3>form</h3>
							<p>Indica a qual formulário o input pertence.</p>
							<p>O valor desse atributo deve ser igual ao id do formulário referenciado.</p>

							<h3>formmethod</h3>
							<p>Informa ao navegador sobre qual método será usado para o envio dos dados.</p>
							<p>O formulário pode enviar os dados através do método get, e uma caixa de texto usar o método post, por exemplo.</p>
							<p>Este atributo é exclusivo dos tipos submit e image.</p>

							<h3>formaction</h3>
							<p>Define para onde será enviado os dados.</p>
							<p>Este atributo é exclusivo dos tipos submit e image.</p>

							<h3>formenctype</h3>
							<p>Especifica uma codificação de caracteres para os dados enviados pelo formulário.</p>
							<p>Este atributo possui 3 valores:</p>

							<li><b>application/x-www-form-urlencoded:</b> É o valor padrão, e é aplicado caso o atributo não esteja presente. <br> 
					 		Os caracteres especiais são convertidos para valores hexadecimais e os espaços são trocados por "+". <br>
							Este tipo de codificação funciona na vasta maioria dos casos, tornando inútil a utilização do atributo na maior parte do tempo.</li>
							<br>
							<li><b>Mutlipart/form-data:</b> nenhum caractere é codificado. <br>
							Este valor deve ser utilizado quando o formulario requer o upload de algum arquivo do usuario.</li>
							<br>
							<li><b>Text/plain:</b> Nenhum caractere é codificado. <br>
							Espaços são trocados por "+". <br>
							É o tipo de codificação menos utilizado por simplesmente não ter uma função definida. <br>
							Seu uso não é recomendado.</li>
							<br>

							<h3>formnovalidate</h3>
							<p>É um atributo booleano.</p>
							<p>Retira o processo de validação imposto pelo input na hora de enviar os dados.</p>

							<h3>formtarget</h3>
							<p>Comanda onde o resultado do formulario será mostrado após o envio dos dados.</p>
							<p>Este atributo possui 4 valores:</p>

							<li><b>_blank:</b> Os dados são mostrados em uma nova guia.</li>
							<br>
							<li><b>_self:</b> Os dados são mostrados na mesma guia. Este é o valor padrão aplicado caso o atributo não esteja presente.</li>
							<br>
							<li><b>_parent:</b> se o formulario estiver dentro de um iframe que esteja dentro de outro iframe, o resultado é mostrado no "frame pai".</li>
							<br>
							<li><b>_top:</b> Se o formulario estiver em um iframe, após o envio o conteudo do iframe será mostrado na tela inteira.</li>
							<br>

							<h3>height</h3>
							<p>Define a altura do input.</p>
							<p>Este atributo é exclusivo do tipo image.</p>

							<h3>list</h3>
							<p>Faz referência a uma datalist.</p>
							<p>O valor desse atributo deve ser o mesmo valor da datalist sendo referenciada.</p>
							<p>Para saber mais sobre o funcionamento de uma datalist, <a href="">clique aqui!</a></p>

							<h3>max</h3>
							<p>Define o valor máximo de um input.</p>
							<p>Este atributo é exclusivo de inputs de datas, horários e números.</p>

							<h3>maxlength</h3>
							<p>Informa qual o número máximo de caracteres aceito em um input.</p>

							<h3>min</h3>
							<p>Define o valor mínimo de um input.</p>
							<p>Este atributo é exclusivo de inputs de datas, horários e números.</p>

							<h3>multiple</h3>
							<p>É um atributo booleano.</p>
							<p>Permite que o usuário entre com mais de um valor.</p>

							<h3>pattern</h3>
							<p>Possibilita restringir quais e quantos caracteres são aceitos em um input.</p>
							<p>Os caracteres aceitos são definidos dentro de colchetes, e a quantidade dentro de chaves.</p>

							<h3>placeholder</h3>
							<p>Define uma mensagem dentro do input.</p>
							<p>Esse atributo é utilizado com o intuito de auxiliar o usuário sobre o funcionamento do campo.</p>

							<h3>readonly</h3>
							<p>Este é um atributo booleano.</p>
							<p>Define um input como inutilizavel, mas seu valor ainda será passado a outra página após o preenchimento do formulário.</p>

							<h3>required</h3>
							<p>Este é um atributo booleano.</p>
							<p>Torna o preenchimento do input obrigatório.</p>

							<h3>size</h3>
							<p>Especifica o tamanho do input, junto com o número de caracteres aceitos.</p>

							<h3>step</h3>
							<p>Define umintervalo entre números aceitos em um input.</p>

							<h3>width</h3>
							<p>Informa ao navegador sobre a largura da imagem.</p>
							<p>Este atributo é exclusivo do tipo image.</p>	
			
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