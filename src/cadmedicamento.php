<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Cadastro Medicamento</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
  <script src="dist/jquery.maskMoney.min.js" type="text/javascript"></script>

</head>

<?php include('menu.php'); ?>

<body>
  <h1 class=" d-flex justify-content-center m-3 mb-2" style="background-color: #faebd7;">Cadastrar Medicamento</h1>
  <section>
    <div class="text-center text-success" id="mensagemSucesso">
      <?php
      if ($_GET['status'] ?? null == 'success') :
        echo 'Medicamento cadastrado com sucesso';
      endif;
      ?>
    </div>

    <div class="d-flex justify-content-center p-2">
      <form name="Cadastro Medicamentos" action="cadmedicamentoPost.php" method="POST">
        <div class="form-group ">
          <label for="inputName">Nome</label>
          <input type="name" class="form-control" id="madName" name="medName" placeholder="Nome" required>
        </div>
        <div class="form-group ">
          <label for="inputName">Laboratório</label>
          <input type="name" class="form-control" id="labName" name="labName" placeholder="Laboratório" required>
        </div>
        <div class="form-group ">
          <label for="inputType">Tipo</label>
          <select id="inputType" name="medType" class="form-control">
            <option selected>Selecionar...</option>
            <option value="Fitoterápico">Fitoterápico</option>
            <option value="Alopático">Alopático</option>
            <option value="Homeopático">Homeopático</option>
            <option value="Genérico">Genérico</option>
            <option value="Referência">Referência</option>
            <option value="Similar">Similar</option>
            <option value="Manipulado">Manipulado</option>
          </select>
        </div>
        <div class="form-group ">
          <label for="inputName">Preço</label>
          <input type="name" class="form-control" id="price" name="price" placeholder="Preço" required>
        </div>
        <button type="submit" class="btn btn-primary" data-toggle="modal" name="enviar">Cadastrar</button>
      </form>
    </div>
  </section>
</body>

<?php include('footer.php'); ?>

<!--AJAX MASCARA PREÇO-->
<script>
  $('#price').mask("###.###,##", {
    reverse: true
  });
</script>


<!--temporizador mensagem cadastro concluido-->
<script type="text/javascript">
    window.onload = function() {
        timedHide(document.getElementById('mensagemSucesso'), 3);
    }

    function timedHide(element, seconds) {
        if (element) {
            setTimeout(function() {
                element.style.display = 'none';
            }, seconds * 1000);
        }
    }
</script>
</html>