<?php
	
	$servidor = "localhost"; // 127.0.0.1
	$usuario = "root";
	$senha = "";
	$dbname = "i9conceitos";

	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	mysqli_set_charset($conn, "utf8");
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
    }  

?> 
