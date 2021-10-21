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

</head>
<?php include('banco/conexao.php'); ?>

<?php include('menu.php'); ?>

<?php
$result = mysqli_query($conn, "SELECT * FROM medicamentos");
?>

<body>
    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
        <div class="table-responsive">
            <table class="table">

                <tr>
                    <th scope="col">Nome Medicamento</th>
                    <th scope="col">Laboratorio</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Preço</th>
                </tr>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                ?>

                    <tr scope="row">
                        <td><?php echo $row["medName"]; ?></td>
                        <td><?php echo $row["labName"]; ?></td>
                        <td><?php echo $row["medType"]; ?></td>
                        <td><?php echo $row["price"]; ?></td>
                        <td><button type="button" class="btn btn-danger">Deletar</button></td>
                        <td><img src="img/edit.png" width="20px" /></td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </table>
        </div>
    <?php
    } else {
        echo "Não foram encontrados resultados";
    }
    ?>
</body>

<?php include('footer.php'); ?>

</html>