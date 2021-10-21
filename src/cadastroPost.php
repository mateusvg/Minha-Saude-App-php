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

<?php
$nome = $_POST['inputName'];
$email = $_POST['inputEmail'];
$senha = $_POST['inputPassword'];
$senhaConvertida = md5($senha);
$situacoe_id = $_POST['paciente'];
$niveis_acesso_id = $_POST['funcionario'];

$strcon = mysqli_connect('us-cdbr-east-04.cleardb.com', 'bb3bd2b935de69', 'fb7aa1ef', 'heroku_fb1e780812f7b81') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO usuarios VALUES ";
$sql .= "('','$nome', '$email','$senhaConvertida','$situacoe_id','$niveis_acesso_id','','null')";
mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);

?>


<div class=" logo">
    <img src="img/logo1.png" class="img-fluid" alt="Responsive image" width="100">
    <h3 class="cor">Cadastro Realizado com Sucesso!!!!</h3>
    <a>Deseja realizar o Login? </a> <a href="index.php">Login</a>

</div>
</html>