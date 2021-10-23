<html>

<head>
    <style>
        .logo {
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
<?php include('../banco/conexao.php'); ?>

<!--Seta a data-->
<?php
date_default_timezone_set('America/Sao_Paulo');
$timeAndDate= date('Y-m-d H:i:s');
?>

<?php
$nome = $_POST['inputName'];
$email = $_POST['inputEmail'];
$senha = $_POST['inputPassword'];
$senhaConvertida = md5($senha);
$niveis_acesso_id = $_POST['nivelAcesso'];


$sql = "INSERT INTO usuarios VALUES ";
$sql .= "('','$nome', '$email','$senhaConvertida','1','$niveis_acesso_id','$timeAndDate','')";
mysqli_query($conn, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conn);

?>


<div class=" logo">
    <img src="../img/logo1.png" class="img-fluid" alt="Responsive image" width="100">
    <h3 class="cor">Cadastro Realizado com Sucesso!!!!</h3>
    <a>Deseja realizar o Login? </a> <a href="../index.php">Login</a>

</div>

</html>