<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <link rel="icon" href="imagens/favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Login Minha Saúde</title>
  <style>
    .sombra {
      box-shadow: 10px 5px 5px #d3e9f0;
    }
  </style>
</head>

<body>
  <div class="d-flex justify-content-center  m-3">
    <img src="img/logo1.png" class="img-fluid" alt="Responsive image" width="100">
  </div>
  <div class="d-flex justify-content-center ">
    <form method="POST" action="logica/valida.php" class="sombra p-3">
      <h2 class="d-flex justify-content-center p-3 " >Área Restrita</h2>
      <div class="d-flex justify-content-center ">

        <label for="inputEmail" class="pr-2">Email: </label>
        <input type="email" name="email" id="inputEmail" placeholder="Email" required autofocus>
      </div>
      <div class="d-flex justify-content-center p-3">
        <label for="inputPassword" class="pr-1">Senha:</label>
        <input type="password" name="senha" id="inputPassword" placeholder="Senha" required>

      </div>
      <button class="btn btn-lg btn-info btn-block" type="submit">Acessar</button>
      <div class="p-2">   
      <a>Já possui cadastro? </a> <a href="cadastro.php">Cadastrar</a>
      </div>
    </form>
  </div>
  <p class="text-center text-danger p-3">
    <?php if (isset($_SESSION['loginErro'])) {
      echo $_SESSION['loginErro'];
      unset($_SESSION['loginErro']);
    } ?>
  </p>
  <p class="text-center text-success">
    <?php
    if (isset($_SESSION['logindeslogado'])) {
      echo $_SESSION['logindeslogado'];
      unset($_SESSION['logindeslogado']);
    }
    ?>
  </p>
  <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>