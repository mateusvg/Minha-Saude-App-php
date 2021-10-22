<html>
<head>
    <style>
        .logo{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 10px;
        }
        .cor {
            color: #83ACF2;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<?php include('banco/conexao.php'); ?>
<?php
$medName = $_POST['medName'];
$labName = $_POST['labName'];
$medType = $_POST['medType'];
$price = $_POST['price'];


$sql = "INSERT INTO medicamentos VALUES ";
$sql .= "('', '$medName', '$labName','$medType','$price')";
mysqli_query($conn, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conn);

?>


    <div class=" logo" data-toggle="modal">
    <img src="img/logo1.png" class="img-fluid" alt="Responsive image" width="100">
    <h3 class="cor">Cadastro Realizado com Sucesso!!!!</h3>
    <meta http-equiv="refresh" content="1; url=cadmedicamento.php" />
    

</div>
</html>