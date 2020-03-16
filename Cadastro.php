<!DOCTYPE html>
<html>
<head>
    <title>Cadastre-se</title>     
    <meta charset="utf-8">
    <?php include "codemirrorscripts.html"; ?>

    <link rel="stylesheet" type="text/css" href="sheet/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="sheet/frameword.css">
    <script defer src="fawesome/svg-with-js/js/fontawesome-all.js"></script>
    <?php include "sheet/scriptjs.html"; ?>

</head>
<body>

	<div style="display: inline-block; padding: 1%; background-color: white">
	<form action="validacadastro.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nome">Nome</label>
      <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" required>
    </div>
    <div class="form-group col-md-6">
      <label for="sobrenome">Sobrenome</label>
      <input type="text" id="sobrenome" name="sobrenome" class="form-control"  placeholder="Sobrenome" required>
    </div>
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" class="form-control"  placeholder="E-mail" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="username">Nome de usuário</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="Nome de usuário" required>
    </div>
    <div class="form-group col-md-6">
      <label for="senha">Senha</label>
      <input type="password" id="senha" name="senha" class="form-control"  placeholder="senha" required>
    </div>
  </div>
  <div class="form-group">
    <label for="recsenha">Chave de recuperação</label>
    <input type="text" id="recsenha" name="recsenha" class="form-control"  placeholder="Chave de recuperação" required>
  </div>
  <hr>
  <button type="reset" class="btn btn-outline-danger">Cancelar</button>
  <button type="submit" class="btn btn-outline-success float-right" name="submitbtn">Cadastrar</button>
</form>
</div>

</body>
</html>