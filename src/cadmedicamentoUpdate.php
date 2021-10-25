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

<?php
include_once 'banco/conexao.php'; ?>

<?php
// . DOT concatena strings
if (count($_POST) > 0) {
    mysqli_query($conn, "UPDATE medicamentos set  medName='" . $_POST['medName'] . "', labName='" . $_POST['labName'] . "', medType='" . $_POST['medType'] . "' ,price='" . $_POST['price'] . "' WHERE id='" . $_POST['id'] . "'");
    $message = "Medicamento atualizado com sucesso";
}
$result = mysqli_query($conn, "SELECT * FROM medicamentos WHERE id='" . $_GET['id'] . "'");
$row = mysqli_fetch_array($result);
?>

<body>
    <h1 class=" d-flex justify-content-center m-3 mb-2" style="background-color: #faebd7;">Atualizar Medicamento</h1>
    <div class="d-flex justify-content-center p-2">

        <form name="updateMedicamento" method="post" action="">
            <div class="text-center text-success" id="mensagemSucesso">
                <?php if (isset($message)) {
                    echo $message;
                } ?>
            </div>
            <div class="form-group ">
                ID:
                <input type="hidden" name="id" class="form-control mr-sm-2 m-1" value="<?php echo $row['id']; ?>">
                <input type="text" name="id" class="form-control mr-sm-2 m-1" value="<?php echo $row['id']; ?>" disabled>
            </div>
            <div class="form-group ">
                Medicicamento:
                <input type="text" name="medName" class="form-control mr-sm-2 m-1" value="<?php echo $row['medName']; ?>">
            </div>
            <div class="form-group ">
                Laboratório:
                <input type="text" name="labName" class="form-control mr-sm-2 m-1" value="<?php echo $row['labName']; ?>">
            </div>

            <div class="form-group ">
                <label for="medType">Tipo:</label>
                <select id="medType" name="medType" value="<?php echo $row['medType']; ?>" class="form-control m-1 ">
                    <option><?php echo $row['medType']; ?></option>
                    <option value="Fitoterápico">Fitoterápico</option>
                    <option value="Alopático">Alopático</option>
                    <option value="Homeopático">Homeopático</option>
                    <option value="Genérico">Genérico</option>
                    <option value="Referência">Referência</option>
                    <option value="Similar">Similar</option>
                    <option value="Manipulado">Manipulado</option>
                </select>
            </div>
            <div>
                Preço:
                <input id="price" class="form-control mr-sm-2 m-1" type="text" value="<?php echo $row['price']; ?>" placeholder="Procurar" name="price">
            </div>
            <div class="mr-5 mt-1">
                <input type="submit" name="submit" value="Atualizar" class="btn btn-success mr-5 mt-3">

                <!-- 
            <div style="padding-bottom:5px;">
                <a href="cadmedicamentoGet.php">Voltar a Lista de Medicamentos</a>
            </div> -->

                <button class="btn btn-secondary mt-3" onclick="location.href='cadmedicamentoGet.php'" type="button">
                    Voltar</button>
            </div>
        </form>
    </div>
</body>
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

<!--Mascara preço-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
<script>
    $('#price').mask("###.###,##", {
        reverse: true
    });
</script>

</html>