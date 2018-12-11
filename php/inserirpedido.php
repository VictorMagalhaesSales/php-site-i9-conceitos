<?php
session_start();
include_once("conexao.php");

	$cdusuario = $_SESSION['cdusuario'];
	$nome = $_SESSION['nome'];
	$email = $_SESSION['email'];
	$facebook = $_SESSION['facebook'];
	$whatsapp = $_SESSION['whatsapp'];
	$instagram = $_SESSION['instagram'];
	$estado = $_SESSION['estado'];
	$cidade = $_SESSION['cidade'];
	$bairro = $_SESSION['bairro'];
	$produto = $_GET['produto'];
	$descricao = $_GET['descricao'];

	$novaString = wordwrap($descricao, 20, "<br/>"); 

	$sql = "insert into pedidos values(0,'$cdusuario','$nome','$email','$facebook','$whatsapp','$instagram','$estado','$cidade','$bairro','$produto',now(),'$novaString','Em andamento')";
	$query = mysqli_query($conn,$sql);
	if($query){
		$cod = "insert into conversas values(0,'$cdusuario','$nome','$email','',''";
		$enviar = mysqli_query($conn,$cod);
		echo "<script type='text/javascript'>alert('sucesso')</script>";
		header("Location: ../index.php");
	}else{

	}

?>



