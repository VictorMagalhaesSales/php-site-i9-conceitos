<?php
	session_start();
	include_once("conexao.php");

	$cdusuario = (int) $_SESSION['cdusuario'];
	$nome = $_SESSION['nome'];
	$email = $_SESSION['email'];
	$mensagem = $_POST['mensagem'];

	$sql = "insert into conversas values(0,'$cdusuario','$nome','$email','$mensagem',' ')";
	$li = mysqli_query($conn, $sql);

	if($li){
		header("Location: perfilusuario.php");
	}else{
		echo "<script type='text/javascript'> alert('Ocorreu um erro inesperado, tente novamente mais tarde.') </script>";
		header("Location: perfilusuario.php");
	}
?>