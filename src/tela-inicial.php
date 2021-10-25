<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>App - Minha Saúde</title>
  </style>
</head>
<?php include('menu.php'); ?>
<?php include('banco/conexao.php'); ?>

<?php
$result = mysqli_query($conn, "SELECT COUNT(*) FROM medicamentos");
while ($row = $result->fetch_assoc()) {
  $numeroTotal =  $row['COUNT(*)'];
}

?>


<body>
  <section>
    <div class="tela-inicial">
      <div class="d-flex justify-content-center p-3 m-3">
        <img src="img/logo1.png" class="img-fluid" alt="Responsive image">
      </div>
      <div class="text-primary">
        <div class="d-flex justify-content-center p-2 ">
          <h3>Minha Saúde Para facilitar o seu dia!</h3>
        </div>
        <div class="d-flex justify-content-center p-2">
          <p>O Minha Saúde irá facilitar o seu dia gerindo sua rotina de remédios e procura por farmácias próximas. Basta criar uma conta e usufruir do nosso sistema.</p>
        </div>
        <div class="d-flex justify-content-center p-2">
          <p> O melhor de tudo: gratuito para você!</p>
        </div>


        <div class="row justify-content-center">

          <div class="card bg-light mb-3 m-2" style="max-width: 12rem;">
            <div class="card-header">Medicamentos</div>
            <div class="card-body ">
              <h5 class="card-title"><?php echo $numeroTotal  ?></h5>
              <p class="card-text">Número de mericamentos cadastrados</p>
            </div>
          </div>
          <div class="card bg-light mb-3 m-2" style="max-width: 12rem;">
            <div class="card-header">Usuários</div>
            <div class="card-body">
              <h5 class="card-title">1</h5>
              <p class="card-text">Número de usuarios ativos no sistema</p>
            </div>
          </div>
          <div class="card bg-light mb-3 m-2" style="max-width: 12rem;">
            <div class="card-header">Tratamentos</div>
            <div class="card-body">
              <h5 class="card-title">0</h5>
              <p class="card-text">Número de tratamentos em andamento</p>
            </div>
          </div>
        </div>
      </div>



  </section>


</body>

<?php include('footer.php'); ?>


</html>