<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Cadastro Medicamento</title>

</head>

<?php include('menu.php'); ?>

<body>
  <h1 class=" d-flex justify-content-center m-3 mb-2" style="background-color: #faebd7;">Cadastrar Tratamento</h1>
  <section> 
    <div  class="d-flex justify-content-center p-2">
        <form>
          <div class="form-group ">
            <label for="exampleFormControlSelect1">Medicamento</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group ">
            <label for="dataInicio">Data de início</label>
            <input type="date" class="form-control" id="dataInicio">
          </div>
          <div class="form-group ">
            
            <label for="Duracao">Duração</label>
            <input class="form-control" type="number" name="Duracao" id="Duracao">
          </div>
          <div class="form-group ">
            <label for="Anotacoes">Anotações</label>
            <textarea class="form-control" id="Anotacoes" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="enviar" >Cadastrar</button>
      </form>
    </div>
  </section>
</body>

<?php include('footer.php'); ?>
</html>