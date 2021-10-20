<?php
	$servidor = "us-cdbr-east-04.cleardb.com";
	$usuario = "bb3bd2b935de69";
	$senha = "fb7aa1ef";
	$dbname = "heroku_fb1e780812f7b81";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>