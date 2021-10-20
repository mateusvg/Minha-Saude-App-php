<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Cadastro Medicamento</title>
  <style>
   h1{
     background-color: antiquewhite;
     display: flex;
     flex-direction: column;
     justify-content: center;
     align-items: center;
   }
  </style>
</head>

<?php include('menu.php'); ?>

<body>
  <section> 
    <div  class="overflow-scroll p-5">
      <h1>Cadastro Medicamento</h1>
        <form>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Medicamento</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="dataInicio">Data de início</label>
            <input type="date" class="form-control" id="dataInicio">
          </div>
          <div class="form-group">
            
            <label for="Duracao">Duração</label>
            <input class="form-control" type="number" name="Duracao" id="Duracao">
          </div>
          <div class="form-group">
            <label for="Anotacoes">Anotações</label>
            <textarea class="form-control" id="Anotacoes" rows="3"></textarea>
          </div>
      </form>
    </div>
  </section>
</body>

<!--fixed-bottom-->
  <footer class="bg-light text-center text-lg-start position-absolute w-100">
    <!-- Copyright -->
    <div class="text-center p-5" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-dark" href="https://minhasaude.com.br/">Minha Saúde</a>
    </div>
    <!-- Copyright -->
  </footer>

</html>