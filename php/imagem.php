<?php
	session_start();
	include_once("conexao.php");

	$cdusuario = $_SESSION['cdusuario'];

	if(isset($_FILES['arquivo'])){
		$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
		$novo_Nome = md5(time()) . $extensao;
		$diretorio = "../img/perfil/";
		
		move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_Nome);

		$update = "UPDATE usuarios SET imagem = '$novo_Nome' WHERE cdusuario='$cdusuario'";
		$exec = mysqli_query($conn,$update);
		if($exec){
			header("Location: perfilusuario.php");
		}else{
			header("Location: perfilusuario.php");
		}

		$_SESSION['imagem'] = $novo_Nome;
			
	}

?>