<style>
  .texto{
    font-size: 0.7em;
  }
  
</style>
<header>
  <nav class="navbar navbar-light navbar-expand-lg" style="background-color: #83ACF2;">
    <img class="img-fluid" alt="Responsive image" src="img/logo.png" width="70" href="home.html">
    <div class="col ">
      <div class="" href="#">Minha Saúde</div>
      <div class="texto mt-0"> <?= date('d-m-Y')?></div>
      <p6 class="texto" id="timestamp"></p6>
    </div>

    <strong class="p-2">
      <?php
      session_start();
      echo "Usuario: " . $_SESSION['usuarioNome'];
      ?>
    </strong>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="d-flex justify-content-end">
      <div class="collapse navbar-collapse p-2" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="tela-inicial.php">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="perfilpaciente.php">Paciente</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Tratamento
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="cadtratamento.php">Cadastrar</a>
            </div>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Medicamentos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="cadmedicamento.php">Cadastrar</a>
              <a class="dropdown-item" href="cadmedicamentoGet.php">Procurar</a>
            </div>
          <li class="nav-item">
            <a class="nav-link" href="banco/sair.php">Sair</a>
          </li>

        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Procurar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
      </form> -->
      </div>
    </div>
  </nav>
</header>

<!--BOOTSTRAP-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!--AJAX JQUERY-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>


<!--Metodos de Relogio-->
<script>
  $(document).ready(function() {
    setInterval(timestamp, 1000);
  });

  function timestamp() {
    $.ajax({
      url: 'timestamp.php',
      success: function(data) {
        $('#timestamp').html(data);
      },
    });
  }
</script>