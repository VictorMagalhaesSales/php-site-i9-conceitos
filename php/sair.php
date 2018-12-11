<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['nome']);
unset($_SESSION['sobrenome']);
unset($_SESSION['cpf']);
unset($_SESSION['facebook']);
unset($_SESSION['whatsapp']);
unset($_SESSION['instagram']);
header("Location: logincadastro.php");
?>