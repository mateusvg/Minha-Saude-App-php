<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Cadastro Medicamento</title>
  <style>
    h1 {
      background-color: antiquewhite;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
  <script src="dist/jquery.maskMoney.min.js" type="text/javascript"></script>

</head>

<?php include('menu.php'); ?>

<body>
  <section>
    <div class="overflow-scroll p-5">
      <h1>Cadastro Medicamento</h1>
      <form name="Cadastro Medicamentos" action="model/cadmedicamentoPost.php" method="POST">
        <div class="form-group col-md-6">
          <label for="inputName">Nome</label>
          <input type="name" class="form-control" id="madName" name="medName" placeholder="Nome" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputName">Laboratório</label>
          <input type="name" class="form-control" id="labName" name="labName" placeholder="Laboratório" required>
        </div>
        <div class="form-group col-md-6">
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
        <div class="form-group col-md-6">
          <label for="inputName">Preço</label>
          <input type="name" class="form-control" id="price" name="price" placeholder="Preço" required>
        </div>
        <button type="submit" class="btn btn-primary" data-toggle="modal" name="enviar">Cadastrar</button>
      </form>
    </div>
  </section>
</body>

<?php include('footer.php'); ?>


</html>