<?php
include "../BDConnect.php";


if (isset($_POST['sair'])) {
        session_unset();        
} ?>
                 <?php
                 if (isset($_SESSION['imgerro'])) { ?>  
                  <script type="text/javascript">
                    $(window).on('load',function(){
                    $('#modalCadastro').modal('show');
                    });
                  </script>
                 <?php } ?>

                 <?php
                 if (isset($_SESSION['usuario_existente'])) { ?>  
                  <script type="text/javascript">
                    $(window).on('load',function(){
                    $('#modalCadastro').modal('show');
                    });
                  </script>
                 <?php } ?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >

        <a class="navbar-brand" href="../index.php"><img src="logo.png" style="height: 55px; width: 105px;"></a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a href="../HTML_Intro.php" class="nav-link"><button class="btn btn-success">Tutoriais</button></a></li>
                <li class="nav-item"><a href="../Pergunte/Duvidas.php" class="nav-link"><button class="btn btn-info">Dúvidas</button></a></li>
                <li class="nav-item"><a href="../Pergunte/PergunteAlgo.php" class="nav-link"><button class="btn btn-warning">Pergunte Algo!</button></a></li>
            </ul>
                <?php 
                    if (isset($_SESSION['usuario_id'])) { 

                      $select = mysqli_query($con, "SELECT * FROM usuario WHERE usuario_id = ".$_SESSION['usuario_id']."");

                      while ($fetch = mysqli_fetch_array($select)){
                        $nome       = $fetch['usuario_nome'];
                        $sobrenome  = $fetch['usuario_sobrenome'];
                        $username   = $fetch['usuario_username'];
                        $email      = $fetch['usuario_email'];
                        $senha      = $fetch['usuario_senha'];
                        $foto       = $fetch['usuario_imgperfil'];
                        $nivelAcesso= $fetch['usuario_nivelacesso'];
                      }
                 ?>
                  
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-success dropdown-toggle"><?php echo $nome; ?><span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-2">
                       <li class="px-3 py-1">
                            <!--Inicio do menu de ações do usuário-->
                            <img id="usuario-img" src="../Img/<?php echo $foto; ?>">
                            <hr>
                            <?php if ($nivelAcesso == 1) {
                              $link = "Adm.php?id=".$_SESSION['usuario_id']."";
                            }else{
                              $link = "usuario.php?usuario_id=".$_SESSION['usuario_id']."";
                            } ?>
                            <a href="<?php echo $link;?>">Ver perfil</a>
                            <hr>
                            <form action="" method="post">
                                <input type="submit" name="sair" value="sair" class="btn btn-outline-danger" style="width: 100%; border-radius: 0">
                            </form>
                            <!--Fim do menu de ações do usuário-->
                        </li>
                    </ul>
                </li>
              </ul>
              <?php }else{ ?> 
                      <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                        <li class="dropdown order-1">
                            <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Entre ou cadastre-se<span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right mt-2">
                               <li class="px-3 py-1">
                                   <form class="form" role="form" action="../login.php" method="post" autocomplete="off">
                                        <div class="form-group">
                                            <input name="username" placeholder="username" class="form-control form-control-sm" type="text" >
                                        </div>
                                        <div class="form-group">
                                            <input name="senha" placeholder="Password" class="form-control form-control-sm" type="password" >
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block btn-outline-success">Entrar</button>
                                        </div>
                                        <div class="form-group text-center">
                                            <small><a href="#" data-toggle="modal" data-target="#modalPassword">Esqueci minha senha!</a></small>
                                            <hr>
                                        <small><a href="" data-toggle="modal" data-target="#modalCadastro">Não possui uma conta?<br> Cadastre-se aqui!</a></small>
                                        </div>
                                    </form> 
                                </li>
                            </ul>
                        </li>
                    </ul>
          <?php } ?>
        </div>
   </nav>

<div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #3AAFA9">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div>
    <form action="../validacadastro.php" method="post" enctype="multipart/form-data">
  <div class="form-row">
      <div class="form-group col-md-6 col-xl-12">
           <center> <label class="custom-file" for="file">
              Que tal adicionar uma foto ao seu perfil?
            </label> 
                <input type="file" name="file" id="file" >
              
                <img class="pfl" />
            </center>
        <span style="color: red"><strong>
        <?php if (isset($_SESSION['imgerro'])) {
          echo $_SESSION['imgerro'];
          session_unset();
        } ?>

        <?php if (isset($_SESSION['usuario_existente'])) {
          echo "<center>".$_SESSION['usuario_existente']."</center>";
          session_unset();
        } ?>
        </strong></span>
     <hr> </div>
    </div> 
    
  <div class="form-row">
    <div class="form-group col-md-6 col-xl-6">
      <label for="nome">Nome</label>
      <input type="text" id="nome" name="nome" class="form-control" onblur="this.placeholder='Nome'" onfocus="this.placeholder = ''"  placeholder="nome">
    </div>    
    <div class="form-group col-md-6 col-xl-6">
      <label for="sobrenome">Sobrenome</label>
      <input type="text" id="sobrenome" name="sobrenome" class="form-control" onblur="this.placeholder='Sobrenome'" onfocus="this.placeholder = ''" placeholder="sobrenome">
    </div>
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" class="form-control" onblur="this.placeholder='E-mail'" onfocus="this.placeholder = ''" placeholder="e-mail" >
  </div>
  <div class="form-row">
    <div class="form-group col-md-6 col-xl-6">
      <label for="username">Nome de usuário</label>
      <input type="text" id="username" name="username" class="form-control" onblur="this.placeholder='Nome de usuário'" onfocus="this.placeholder = ''" placeholder="nome de usuário">
    </div>
    <div class="form-group col-md-6 col-xl-6">
      <label for="senha">Senha</label>
      <input type="password" id="senha" name="senha" class="form-control" onblur="this.placeholder='Senha'" onfocus="this.placeholder = ''" placeholder="senha">
    </div>
  </div>
  <div class="form-group">
    <label for="recsenha">Chave de recuperação</label>
    <input type="text" id="recsenha" name="recsenha" class="form-control"  onblur="this.placeholder='Chave de recuperação de senha'" onfocus="this.placeholder = ''" placeholder="escolha uma chave para usar caso esqueça sua senha!">
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="submitbtn" class="btn btn-outline-success">Cadastrar</button>
    </form>

      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        $(input).next()
        .attr('src', e.target.result)
    };
    reader.readAsDataURL(input.files[0]);
    }
    else {
        var img = input.value;
        $(input).next().attr('src',img);
    }
} 

function verificaMostraBotao(){
    $('input[type=file]').each(function(index){
        if ($('input[type=file]').eq(index).val() != ""){
            readURL(this);
            $('.hide').show();
        }
    });
}

$('input[type=file]').on("change", function(){
  verificaMostraBotao();
});

$('.hide').on("click", function(){
    $(document.body).append($('<input />', {type: "file" }).change(verificaMostraBotao));
    $(document.body).append($('<img />'));
    $('.hide').hide();
});

</script>






