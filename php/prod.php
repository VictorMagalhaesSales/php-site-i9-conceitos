<?php
session_start();
	include_once("conexao.php");
	if($_POST['botao'] == "excluir"){
		$cod = $_POST['cod'];
		$sql = "DELETE FROM pedidos WHERE cdpedido='$cod'";
		$query = mysqli_query($conn,$sql);
		if($query){

		header("Location: perfiladm.php");
		}
		else{
			echo "erro";
		}
	}
	if($_POST['botao'] == "concluir"){
		$cod = $_POST['cod'];
		$sql = "UPDATE pedidos SET situacao='Concluido' WHERE cdpedido='$cod'";
		$query = mysqli_query($conn,$sql);
		if($query){

		header("Location: perfiladm.php");
		}
		else{
			echo "erro";
		}
	}

?>