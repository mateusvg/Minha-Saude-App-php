<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Perfil Paciente</title>
    <style>
        h1 {
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
<h1 class=" d-flex justify-content-center m-3 mb-2" style="background-color: #faebd7;">Perfil Paciente</h1>
    <section>
        <div class="overflow-scroll p-5">
            <button type="button" class="btn btn-light btn-block p-4">Visualizar Receita</button>
            <button type="button" class="btn btn-light btn-block p-4">Tratamento</button>
            <button type="button" class="btn btn-light btn-block p-4">Bulas</button>
            <button type="button" class="btn btn-light btn-block p-4">Caixinha de Remédios</button>
            <button type="button" class="btn btn-light btn-block p-4">Procurar Preços</button>
        </div>
    </section>
</body>

<?php include('footer.php'); ?>


</html>