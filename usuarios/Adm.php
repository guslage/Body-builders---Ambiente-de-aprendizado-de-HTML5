<?php

  session_start(); 

  include "../BDConnect.php";

  $usuario_id = $_GET['id'];

  $selectUsuario = mysqli_query($con, "SELECT * FROM usuario WHERE usuario_id = $usuario_id");

  $fetchUsuario = mysqli_fetch_array($selectUsuario);

  $usuario_id     = $fetchUsuario['usuario_id'];
  $usuario_nome     = $fetchUsuario['usuario_nome'];
  $usuario_sobrenome  = $fetchUsuario['usuario_sobrenome'];
  $usuario_username = $fetchUsuario['usuario_username'];
  $usuario_email    = $fetchUsuario['usuario_email'];
  $usuario_senha    = $fetchUsuario['usuario_senha'];
  $usuario_recsenha = $fetchUsuario['usuario_recuperacao'];
  $usuario_imgperfil  = $fetchUsuario['usuario_imgperfil'];

?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $fetchUsuario['usuario_username']; ?></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../sheet/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../sheet/Stylo.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <script src="../sheet/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="../sheet/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="../sheet/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  

  <style type="text/css">
    body.modal-open > :not(.modal) {
  -webkit-filter: none;
  -moz-filter: none;
  -o-filter: none;
  -ms-filter: none;
  filter: none;
}
  </style>


</head>
<body>
  <?php include "navbar-top.php" ?>

  <div class="container-fluid">
    <div class="row no-gutter">

    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-3" id="admin-info">
      <!--Área de informações do administrador-->
      <center>
        <img id="admin-img" src="../Img/<?php echo $usuario_imgperfil; ?>">
        <span id="admin-nome">
        <hr>
        <?php 
          echo $fetchUsuario['usuario_username'];
        ?>
        <hr>
        </span>
          <b>Nome: </b><?php echo $usuario_nome; ?>
          <b>Sobrenome: </b><?php echo $usuario_sobrenome; ?><br>
          <b>E-mail: </b><?php echo $usuario_email; ?>
          <hr>
        <button class="btn btn-info btn-block" data-toggle="modal" data-target="#coisa">Alterar dados</button>
      </center>
    </div>
    
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-2 col-xl-6" id="admin-func">
      <!--Área de interações do administrador-->
      <ul class="nav nav-tabs" id="myTab" role="tablist" id="COISA">
      <li class="nav-item" style="border-radius: 0">
        <a class="nav-link active rounded-0" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" onclick="cor1()" style="border-left: none">Usuários</a>
      </li>
      <li class="nav-item">
        <a class="nav-link rounded-0" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" onclick="cor2()">Administradores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link rounded-0" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" onclick="myFunction()">Dúvidas</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent" style="padding: 40px">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <table class="table table-hover table-striped table-bordered" style="word-break:break-all;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Nome de usuário</th>
      <th scope="col" colspan="3">Operações</th>
    </tr>
  </thead>
  <tbody>
        <?php 
        $selectUusarios = mysqli_query($con, "SELECT * FROM usuario WHERE usuario_nivelacesso = 0");
        while ($fetchUsers = mysqli_fetch_array($selectUusarios)) {
          echo "
              <tr>
                <td>".$fetchUsers['usuario_id']."</td>
                <td>".$fetchUsers['usuario_nome']."</td>
                <td>".$fetchUsers['usuario_sobrenome']."</td>
                <td>".$fetchUsers['usuario_email']."</td>
                <td>".$fetchUsers['usuario_username']."</td>
                <td><a href='usuariosOp.php?id=".$fetchUsers['usuario_id']."&op=1' class='btn btn-outline-danger'><i class='fas fa-trash-alt'></i>
                </a>
                </td>
                <td><a href='Usuario.php?id=".$fetchUsers['usuario_id']."' class='btn btn-outline-info'><i class='fas fa-user-circle'></i></td>

                <td><a href='usuariosOp.php?id=".$fetchUsers['usuario_id']."&op=2' class='btn btn-outline-success'><i class='fas fa-user-plus'></i></td>
              </tr>       
          ";
        }
        ?>    
  </tbody>
</table>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <table class="table table-hover table-striped table-bordered" style="word-break:break-all;">
  <thead class="thead">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Nome de usuário</th>
      <th scope="col">Operações</th>
    </tr>
  </thead>
  <tbody>
        <?php 
        $selectAdms = mysqli_query($con, "SELECT * FROM usuario WHERE usuario_nivelacesso = 1");
        while ($fetchAdms = mysqli_fetch_array($selectAdms)) {
          echo "
              <tr>
                <td>".$fetchAdms['usuario_id']."</td>
                <td>".$fetchAdms['usuario_nome']."</td>
                <td>".$fetchAdms['usuario_sobrenome']."</td>
                <td>".$fetchAdms['usuario_email']."</td>
                <td>".$fetchAdms['usuario_username']."</td>
                <td><a href='excluiUsuario.php?id=".$fetchAdms['usuario_id']."' class='btn btn-outline-info'><i class='fas fa-user-circle'></i></td>
              </tr>       
          ";
        }
        ?>
  </tbody>
</table>
      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <table class="table table-hover table-striped table-bordered" style="word-break:break-all;">
  <thead class="thead">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Pergunta</th>
      <th scope="col">Autor</th>
      <th scope="col">Aval. positiva</th>
      <th scope="col">Aval. negativa</th>
      <th scope="col">Operações</th>
    </tr>
  </thead>
  <tbody>
        <?php 
        $selectpost = mysqli_query($con, "SELECT * FROM post");
        while ($fetchpost = mysqli_fetch_array($selectpost)) {

          $post_idd = $fetchpost['post_usuario_id'];

          $post_iddd = $fetchpost['post_id'];

          $selectautor = mysqli_query($con, "SELECT * FROM usuario WHERE usuario_id = $post_idd");
          $fetchautor  = mysqli_fetch_array($selectautor);

          $select_avaliacao_n = mysqli_query($con, "SELECT COUNT(post_avaliacao) AS qtd_n FROM post_avaliacao WHERE post_avaliacao = 0 AND post_avaliacao_post_id = $post_iddd");
          
          $fetch_avaliacao_n = mysqli_fetch_array($select_avaliacao_n);

          $select_avaliacao_p = mysqli_query($con, "SELECT COUNT(post_avaliacao) AS qtd_p FROM post_avaliacao WHERE post_avaliacao = 1 AND post_avaliacao_post_id = $post_iddd");
          
          $fetch_avaliacao_p = mysqli_fetch_array($select_avaliacao_p);


          echo "
              <tr>
                <td>".$fetchpost['post_id']."</td>
                <td>".$fetchpost['post_pergunta']."</td>
                <td>".$fetchautor['usuario_username']."</td>
                <td>".$fetch_avaliacao_p['qtd_p']."</td>
                <td>".$fetch_avaliacao_n['qtd_n']."</td>
                <td><a href='#' class='btn btn-outline-danger'><i class='fas fa-trash-alt'></i></td>
              </tr>       
          ";
        }
        ?>
  </tbody>
</table>
      </div>
    </div>
    </div>

    <div class="modal fade" id="coisa" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #3AAFA9">
        <h5 class="modal-title" id="exampleModalLongTitle">Atualizar dados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div>
    <form action="atualiza.php" method="post">
  <div class="form-row">
      <div class="form-group col-md-6 col-xl-12">
           
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
      <input type="text" id="nome" name="nome" class="form-control" onblur="this.placeholder='Nome'" onfocus="this.placeholder = ''"  placeholder="Nome" <?php echo "value = ".$usuario_nome; ?>>
    </div>    
    <div class="form-group col-md-6 col-xl-6">
      <label for="sobrenome">Sobrenome</label>
      <input type="text" id="sobrenome" name="sobrenome" class="form-control" onblur="this.placeholder='Sobrenome'" onfocus="this.placeholder = ''" placeholder="Sobrenome" <?php echo "value = ".$usuario_sobrenome; ?>>
    </div>
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" class="form-control" onblur="this.placeholder='E-mail'" onfocus="this.placeholder = ''" placeholder="E-mail" <?php echo "value = ".$usuario_email; ?> >
  </div>
  <div class="form-row">
    <div class="form-group col-md-6 col-xl-6">
      <label for="username">Nome de usuário</label>
      <input type="text" id="username" name="username" class="form-control" onblur="this.placeholder='Nome de usuário'" onfocus="this.placeholder = ''" placeholder="Nome de usuário" <?php echo "value = ".$usuario_username; ?>>
    </div>
    <div class="form-group col-md-6 col-xl-6">
      <label for="senha">Nova senha</label>
      <input type="password" id="senha" name="senha" class="form-control" onblur="this.placeholder='Senha'" onfocus="this.placeholder = ''" placeholder="Senha" <?php echo "value=".$usuario_senha ?>>
    </div>
  </div>
  <div class="form-group">
    <label for="recsenha">Chave de recuperação</label>
    <input type="text" id="recsenha" name="recsenha" class="form-control"  onblur="this.placeholder='Chave de recuperação de senha'" onfocus="this.placeholder = ''" placeholder="Escolha uma chave para usar caso esqueça sua senha!" <?php echo "value = ".$usuario_recsenha
    ; ?>>
  </div>
  <input type="hidden" name="id" <?php echo "value=".$usuario_id; ?>>
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

    </div>
    </div>
   
</body>
</html>