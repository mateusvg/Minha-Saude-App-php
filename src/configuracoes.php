<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Cadastro Medicamento</title>

</head>
<?php include('banco/conexao.php'); ?>

<?php include('menu.php'); ?>

<?php

$result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$resultado = mysqli_fetch_assoc($resultado_usuario);

$recuperaID = $_SESSION['usuarioId'];

?>

<?php
$result = mysqli_query($conn, "SELECT * FROM usuarios where id='$recuperaID'");
?>

<body>
    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
        <h1 class=" d-flex justify-content-center m-3 mb-2" style="background-color: #faebd7;">Configurações</h1>

        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <div class="overflow-scroll p-2">
                <div class="form-group ">
                    ID:
                    <input type="hidden" name="id" class="form-control mr-sm-2 m-1" value="<?php echo $row['id']; ?>">
                    <input type="text" name="id" class="form-control mr-sm-2 m-1" value="<?php echo $row['id']; ?>" disabled>
                </div>
                <div class="form-group ">
                    Usuario:
                    <input type="text" name="medName" class="form-control mr-sm-2 m-1" value="<?php echo $row['nome']; ?>">
                </div>
                <div class="form-group ">
                    Email:
                    <input type="text" name="labName" class="form-control mr-sm-2 m-1" value="<?php echo $row['email']; ?>">
                </div>
                <div class="form-group ">
                    Data Criação:
                    <input type="text" name="labName" class="form-control mr-sm-2 m-1" value="<?php echo $row['created']; ?>">
                </div>
                <div class="form-group ">
                    CPF:
                    <input type="text" name="labName" class="form-control mr-sm-2 m-1" value="<?php echo $row['cpf']; ?>">
                </div>
                <div class="form-group ">
                    Estado:
                    <input type="text" name="labName" class="form-control mr-sm-2 m-1" value="<?php echo $row['estado']; ?>">
                </div>
                <div class="form-group ">
                    CEP:
                    <input type="text" name="labName" class="form-control mr-sm-2 m-1" value="<?php echo $row['cep']; ?>">
                </div>
                <div class="form-group ">
                    Cidade:
                    <input type="text" name="labName" class="form-control mr-sm-2 m-1" value="<?php echo $row['cidade']; ?>">
                </div>

                <div class="form-group ">
                    Rua:
                    <input type="text" name="labName" class="form-control mr-sm-2 m-1" value="<?php echo $row['rua']; ?>">
                </div>

                <button type="button" class="btn btn-outline-warning">
                    <?php echo "<a href='cadmedicamentoUpdate.php?id=" . $row['id'] . "'>Atualizar</a>"; ?>
                </button>

            <?php
            $i++;
        }
            ?>
            </div>
        <?php
    } else {
        echo "Não foram encontrados resultados";
    }
        ?>

</body>

<?php include('footer.php'); ?>

</html>