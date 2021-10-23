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
$_message = "Cadastro concluido";
mysqli_query($conn, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conn);

header('location:cadmedicamento.php?status=success');
?>
</html>