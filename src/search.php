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

        a {
            color: white;
        }
    </style>

</head>

<?php include('menu.php'); ?>
<?php include('banco/conexao.php'); ?>

<?php
error_reporting(0);
if (count($_POST) > 0) {
    $procurar = $_POST['procurar'];
    $result = mysqli_query($conn, "SELECT * FROM medicamentos where medName='$procurar' ");
}
?>




<head>
    <title> Retrive data</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>


<body>
    <div class="d-flex-col p-3 m-3">
        <div class="d-flex-col p-3 m-3">
            Procurar Medicamentos
        </div>
        <form class="form-inline my-2 my-lg-0" method="POST" action="search.php">
            <input class="form-control mr-sm-2" type="search" placeholder="Procurar" name="procurar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
        </form>
    </div>
    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
        <div class="table-responsive p-5">
            <table class="table">

                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome Medicamento</th>
                    <th scope="col">Laboratorio</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Preço</th>
                    <th scope="col"></th>
                </tr>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                ?>

                    <tr scope="row">
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["medName"]; ?></td>
                        <td><?php echo $row["labName"]; ?></td>
                        <td><?php echo $row["medType"]; ?></td>
                        <td><?php echo $row["price"]; ?></td>

                        <!-- <td><?php //echo "<a href='delete.php?id=". $row['id']. "'>DELETE</a>"; 
                                    ?></td> -->
                        <td>
                            <button type="button" class="btn btn-danger">
                                <?php echo "<a href='delete.php?id=" . $row['id'] . "'>Deletar</a>"; ?>
                            </button>
                        </td>

                    </tr>


                <?php

                    $i++;
                }
                ?>


            </table>
        </div>


    <?php } else { ?>
        <div class="d-flex justify-content-center p-3 m-3">
        <h4 class="text-primary" >Nenhum resultado encontrado <br> Tente novamente!!</h4>
        </div>
        <div class="d-flex justify-content-center p-3 m-3">
            <img src="img/medicamentos.png" class="img-fluid" alt="Responsive image" width="100">
        </div>

    <?php } ?>


</body>
<?php include('footer.php'); ?>

</html>