<?php
	session_start();
	include_once("conexao.php");

	@$botao = $_POST['botao'];
	if($botao == "login"){

		$email = $_POST['email'];
		$senha = $_POST['senha'];

		if((!empty($email)) AND (!empty($senha))){
			$sql = "SELECT * from usuarios where email='$email' AND senha='$senha'";
			$query = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($query);

			if(($row['senha'] == $senha) AND ($row['email'] == $email)){
				unset($_SESSION['cdusuario']);
				unset($_SESSION['email']);
				unset($_SESSION['nome']);
				unset($_SESSION['sobrenome']);
				unset($_SESSION['estado']);
				unset($_SESSION['cidade']);
				unset($_SESSION['bairro']);
				unset($_SESSION['facebook']);
				unset($_SESSION['whatsapp']);
				unset($_SESSION['instagram']);
				unset($_SESSION['imagem']);
				$_SESSION['cdusuario'] = $row['cdusuario'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['nome']  = $row['nome'];
				$_SESSION['sobrenome']  = $row['sobrenome'];
				$_SESSION['estado']  = $row['estado'];
				$_SESSION['cidade'] = $row['cidade'];
				$_SESSION['bairro'] = $row['bairro'];
				$_SESSION['facebook'] = $row['facebook'];
				$_SESSION['whatsapp'] = $row['whatsapp'];
				$_SESSION['instagram'] = $row['instagram'];
				$_SESSION['botao'] = $botao;
				$_SESSION['imagem'] = $row['imagem'];
				header("Location: ../index.php");
			}else{
				$_SESSION['msg']="O endereço de email ou a senha que você inseriu não é válido.";
			}

		}
	}else if($botao == "registrar"){
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$senha = $_POST['senha'];
		$email = $_POST['email'];
		$estado = $_POST['estado'];
		$cidade = $_POST['cidade'];
		$bairro = $_POST['bairro'];
		$whatsapp = $_POST['whatsapp'];
		$facebook = $_POST['facebook'];
		$instagram = $_POST['instagram'];

		$insert = "INSERT INTO usuarios(cdusuario,nome,sobrenome,email,senha,facebook,whatsapp,instagram,estado,cidade,bairro) VALUES(0,'$nome','$sobrenome','$email','$senha','$facebook','$whatsapp','$instagram','$estado','$cidade','$bairro');";
		$ins2 = mysqli_query($conn,$insert);
		if($ins2){
			$_SESSION['deu']="Cliente cadastrado com sucesso!";
		}else{
			$_SESSION['deu']="Email já registrado!";
		}
	}else if($botao == "editar"){
		$cdusuario = $_SESSION['cdusuario'];
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$email = $_POST['email'];
		$estado = $_POST['estado'];
		$cidade = $_POST['cidade'];
		$bairro = $_POST['bairro'];
		$whatsapp = $_POST['whatsapp'];
		$facebook = $_POST['facebook'];
		$instagram = $_POST['instagram'];

		$sql = "update usuarios set nome='$nome' , sobrenome='$sobrenome' , email='$email' , estado='$estado' , cidade='$cidade' , bairro='$bairro' , facebook='$facebook' , whatsapp='$whatsapp' , instagram='$instagram' where cdusuario=$cdusuario";
		$query = mysqli_query($conn,$sql);
		if($query){
			$_SESSION['deu']="Edição feita com sucesso!";
		}else{
			$_SESSION['deu']="Desculpe, não foi possivel realizar a edição";
		}
		header("Location: perfilusuario.php");

	}
?>
<!doctype html>
<html>
<head>
	<div>
		<meta charset="utf-8">
		<title>i9 Conceitos</title>
		<link rel="shortcut icon" type="image/png" href="../img/fav2.png"/>
		<link href="../css/materialize.css" rel="stylesheet">
		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
		
		<link href="../fonts/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
		<link rel="stylesheet" href="../css/style.css">
	</div>
</head>
<body id="page-top">

	<nav class="navbar navbar-default navbar-fixed-top" id="mainNav">
		<div class="container-fluid">
			<div class="col-md-2"></div>
			<div class="navbar-header col-md-2 ">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
				</button> 		
				<a href="#page-top" class="navbar-brand js-scroll-trigger" data-placement="top" >
					<img src="../img/i92.png" width="50" class="imgi9">
				</a>
				<a href="#page-top " style="text-decoration: none;" class="js-scroll-trigger"><span class="typed"></span></a>	
			</div>
			<div class="col-md-4" >
			</div>
			<div class="col-md-4">
				<div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav pull-left" id="hover">
						<li role="presentation"><a href="../index.php" class="js-scroll-trigger"><i class="fas fa-home"></i></i>&nbsp VOLTAR </a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4">
			<div id="fundo" class="text-center" style="background-color: rgba(255,255,255,.85); padding-left: 7%; padding-right: 7%; padding-top: 3%; padding-bottom: 3%; margin-top: 30%; border-radius: 1% 4%;">
				<div class="row">
					<h4 align="center" style="font-size: 2em;">Já estou cadastrado</h4><br>
					<form class="col s12" method="post">
						<div class="row">
							<div class="input-field col s12">
								<i class="far fa-envelope prefix"></i>
								<input  id="email" type="email" class="validate" data-length="50" name="email" required></input>
								<label for="email" data-error="Email inválido!">Email</label>
								<span class="helper-text" data-error="Email inválido" data-success="Email válido"></span>
							</div>
							<div class="input-field col s12">
								<i class="fas fa-key prefix"></i>
								<input  id="senha" type="password" class="validate" name="senha"/>
								<label for="senha" data-error="Senha inválida!" >Senha</label>
							</div>
						</div>
						<div class="row">
							<p>
								<label class="col s11">
									<input type="checkbox"/>
									<span style="font-size: 1.8em;">Relembrar</span>
								</label>
							</p>
						</div>	
						<button type="submit" class="btn-i9 pull-left waves-effect" style="width: 100%;" name="botao" value="login">LOGIN</button>
					</form>	
					<?php 
					if(isset($_SESSION['msg'])){
						echo "
						<div class='row'></div>
						<div class='row'></div>
						<h3 style='color: #a83f60;'>".$_SESSION['msg']."</h3>
						";
						unset($_SESSION['msg']);

					}
					?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div id="fundo" class="text-center" style="background-color: rgba(255,255,255,.85); padding-left: 7%; padding-right: 7%; padding-top: 3%; padding-bottom: 0.2%; margin-left: 4%; border-radius: 1% 4%;">
				<div class="row">
					<h4 align="center" style="font-size: 2em;">Ainda não estou cadastrado</h4><br>
					<form class="col s12" method="post">
						<div class="row">
							<div class="col s7">
								<h4 align="center" style="font-size: 1em; font-weight: bold;">Informações pessoais</h4>
							</div>
							<div class="col s5">
								<h4 align="center" style="font-size: 1em; font-weight: bold;">Redes sociais</h4>
							</div>
							<div class="input-field col s4">
								<i class="far fa-address-card prefix"></i>
								<input  id="nome" type="text" class="validate" data-length="30" name="nome" required></input>
								<label for="nome" data-error="Máximo: 30 caracteres">Nome</label>
								<span class="helper-text" data-error="Máximo: 30 caracteres"></span>
							</div>
							<div class="input-field col s4">
								<i class="far fa-address-card prefix"></i>
								<input  id="sobrenome" type="text" class="validate" data-length="30" name="sobrenome" required></input>
								<label for="sobrenome" data-error="Máximo: 30 caracteres">Sobrenome</label>
								<span class="helper-text" data-error="Máximo: 30 caracteres"></span>
							</div>
							<div class="input-field col s4">
								<i class="fab fa-facebook-f prefix"></i>
								<input  id="facebook" type="text" class="validate" data-length="50" name="facebook"></input>
								<label for="facebook" data-error="Email inválido!">Facebook</label>
								<span class="helper-text" data-error="Máximo: 50 caracteres"></span>
							</div>
							<div class="input-field col s8">
								<i class="far fa-envelope prefix"></i>
								<input  id="email2" type="email" class="validate" data-length="50" name="email" required></input>
								<label for="email2" data-error="Email inválido!">Email</label>
								<span class="helper-text" data-error="Email inválido" data-success="Email válido"></span>
							</div>
							<div class="input-field col s4">
								<i class="fab fa-whatsapp prefix"></i>
								<input  id="whastapp" type="text" class="validate" data-length="50" name="whatsapp"></input>
								<label for="whastapp" data-error="Email inválido!">Whastapp</label>
								<span class="helper-text" data-error="Máximo: 50 caracteres"></span>
							</div>
							<div class="input-field col s8	">
								<i class="fas fa-key prefix"></i>
								<input  id="senha2" type="password" class="validate" data-length="50" name="senha" required></input>
								<label for="senha2" data-error="Senha inválido!">Senha</label>
								<span class="helper-text" data-error="Máximo: 50 caracteres"></span>
							</div>
							<div class="input-field col s4">
								<i class="fab fa-instagram prefix"></i>
								<input  id="instagram" type="text" class="validate" data-length="50" name="instagram"></input>
								<label for="instagram" data-error="Email inválido!">Instagram</label>
								<span class="helper-text" data-error="Máximo: 50 caracteres"></span>
							</div>

							<h4 align="center" style="font-size: 1em; font-weight: bold;">Endereço</h4>

							<div class="input-field col s4">
								<select class="browser-default" name="estado"  required>
									<option value="" disabled selected>Estado</option>
									<option value="AC">Acre</option>
									<option value="AL">Alagoas</option>
									<option value="AP">Amapá</option>
									<option value="AM">Amazonas</option>
									<option value="BA">Bahia</option>
									<option value="CE">Ceará</option>
									<option value="DF">Distrito Federal</option>
									<option value="ES">Espírito Santo</option>
									<option value="GO">Goiás</option>
									<option value="MA">Maranhão</option>
									<option value="MT">Mato Grosso</option>
									<option value="MS">Mato Grosso do Sul</option>
									<option value="MG">Minas Gerais</option>
									<option value="PA">Pará</option>
									<option value="PB">Paraíba</option>
									<option value="PR">Paraná</option>
									<option value="PE">Pernambuco</option>
									<option value="PI">Piauí</option>
									<option value="RJ">Rio de Janeiro</option>
									<option value="RN">Rio Grande do Norte</option>
									<option value="RS">Rio Grande do Sul</option>
									<option value="RO">Rondônia</option>
									<option value="RR">Roraima</option>
									<option value="SC">Santa Catarina</option>
									<option value="SP">São Paulo</option>
									<option value="SE">Sergipe</option>
									<option value="TO">Tocantins</option>
								</select>
							</div>
							<div class="input-field col s4">
								<i class="fab fa-fort-awesome prefix"></i>
								<input  id="cidade" type="text" class="validate" data-length="50" name="cidade"  required></input>
								<label for="cidade">Cidade</label>
							</div>		
							<div class="input-field col s4">
								<i class="fas fa-building prefix"></i>
								<input  id="bairro" type="text" class="validate" data-length="50" name="bairro"  required></input>
								<label for="bairro">Bairro</label>
							</div>
						</div>
						<button type="submit" class="btn-i9 waves-effect" style="width: 100%;" name="botao" value="registrar">CADASTRAR</button>
					</form>
					<?php 
					if(isset($_SESSION['deu'])){
						echo "
						<div class='row'></div>
						<h3 style='color: #a83f60;'>".$_SESSION['deu']."</h3>
						";
						unset($_SESSION['deu']);
					}
					?>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>

	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/materialize.js"></script>
	<script src="../js/jquery.easing.js"></script>
	<script type="text/javascript" src="../js/typed.js"></script>
	<script  src="../js/index.js"></script>

	<style type="text/css">
		body{background: url(../img/fund.png); background-repeat: no-repeat; background-color: black;}
		/*body{background: linear-gradient(to bottom left, #fe3578, #5ca3fe);}*/
		body{background-color: white; font-family: Montserrat;}
		#fundo{margin-top: 12%;}

		.produtos{
			font-size: 15px;
		}
		.fundobot{
			background: linear-gradient(to bottom, white ,#f23674, #569efb, white);
		}
		.navbar-default{
			background-color:rgba(255,255,255,0.8);
			/* background-color: white;*/
			border-color:transparent;
			box-shadow: 1px 1px 5px rgba(0,0,0,0.2);
			font-size: 17px;
			font-family: trench100free;
			padding: 10px;
		}


		#hover a{
			font-weight: 1000;
			color: #4b81fa;
		}
		#hover a:hover{
			color: #ea58dc;
		}


		.btn-circle
		{font-size:26px;width:55px;height:55px;margin-top:15px;line-height:45px;-webkit-transition:background .3s ease-in-out;-moz-transition:background .3s ease-in-out;transition:background .3s ease-in-out;color:#fff;border:2px solid #fff;border-radius:100%!important;background:0 0}
		.btn-circle:focus,.btn-circle:hover
		{color:#fff;outline:0;background:rgba(255,255,255,.1)}


		.panel-body {
			color: white;
			background-color: #1f81ff;
			padding: 15px;
		}
		.panel-heading {
			background-color: #ff3578;
			padding: 10px 15px;
			border-top-left-radius: 3px;
			border-top-right-radius: 3px;
		}
		.edit{
			border-radius: 20px;
			padding: 30px;
			margin: 10px;
		}

		.navbar.black{
			background-color: #282828;
		}
		.imgi9{
			margin-top: -15px;
		}		
		.carousel {
			overflow: hidden;
			position: relative;
			width: 100%;
			height: 300px;
			margin-bottom: 35px;
			-webkit-perspective: 500px;
			perspective: 500px;
			-webkit-transform-style: preserve-3d;
			transform-style: preserve-3d;
			-webkit-transform-origin: 0% 50%;
			transform-origin: 0% 50%;
		}

		.carousel.carousel-slider {
			top: 0;
			left: 0;
		}

		.carousel.carousel-slider .carousel-fixed-item {
			position: absolute;
			left: 0;
			right: 0;
			bottom: 20px;
			z-index: 1;
		}

		.carousel.carousel-slider .carousel-fixed-item.with-indicators {
			bottom: 68px;
		}

		.carousel.carousel-slider .carousel-item {
			width: 100%;
			height: 100%;
			min-height: 400px;
			position: absolute;
			top: 0;
			left: 0;
		}

		.carousel.carousel-slider .carousel-item h2 {
			font-size: 24px;
			font-weight: 500;
			line-height: 32px;
		}

		.carousel.carousel-slider .carousel-item p {
			font-size: 15px;
		}

		.carousel .carousel-item {
			visibility: hidden;
			width: 200px;
			height: 200px;
			position: absolute;
			top: 0;
			left: 0;
		}

		.carousel .carousel-item > img {
			width: 100%;
		}

		.carousel .indicators {
			position: absolute;
			text-align: center;
			left: 0;
			right: 0;
			bottom: 0;
			margin: 0;
		}

		.carousel .indicators .indicator-item {
			display: inline-block;
			position: relative;
			cursor: pointer;
			height: 8px;
			width: 8px;
			margin: 24px 4px;
			background-color: rgba(255, 255, 255, 0.5);
			-webkit-transition: background-color .3s;
			transition: background-color .3s;
			border-radius: 50%;
		}

		.carousel .indicators .indicator-item.active {
			background-color: #fff;
		}

		.carousel.scrolling .carousel-item .materialboxed,
		.carousel .carousel-item:not(.active) .materialboxed {
			pointer-events: none;
		}		
		@font-face {
			font-family: trench100free;
			src: url('../fonts/trench100free.ttf');
		}
		@font-face {
			font-family: Montserrat;
			src: url('../fonts/Montserrat/Montserrat-Regular.ttf');
		}
		@font-face {
			font-family: Montserrat-light;
			src: url('../fonts/Montserrat/Montserrat-light.ttf');
		}
		@font-face {
			font-family: Montserrat-bold;
			src: url('../fonts/Montserrat/Montserrat-bold.ttf');
		}

		.navbar-nav  > li > a:before {
			content: "" !important;
			position: absolute !important;
			width: 100% !important;
			height: 2px !important;
			bottom: 0 !important;
			left: 0 !important;
			background-color: #ea58dc;
			visibility: hidden !important;
			-webkit-transform: scaleX(0) !important;
			transform: scaleX(0) !important;
			-webkit-transition: all 0.3s ease-in-out 0s !important;
			transition: all 0.3s ease-in-out 0s !important;
		}
		.navbar-nav a:hover:before, .navbar-nav  li:hover > a:before, .navbar-nav .active > a:before {
			visibility: visible!important;
			-webkit-transform: scaleX(1)!important;
			transform: scaleX(1)!important;
		}

		.typed{
			color: #ff8af5;
			font-size: 35px;
			font-weight: bold;
			text-decoration: none;
		}
		footer{
			padding: 50px;
			background-color: black;
		}
	</style>

<script type="text/javascript">
	$(document).ready(function(){
		$('.carousel').carousel({
			numVisible: 9,
			dist: -50
		});
	});
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
	$('#myModal').on('shown.bs.modal', function () {
		$('#myInput').focus()
	})	
	$(document).ready(function(){
		$('.modal').modal();
	});	


	/*DIGITANDO*/
	$(document).ready(function() {
		var typed = $(".typed");
		$(function() {
			typed.typed({
				strings: ["Conceitos"],
				typeSpeed: 100,
				loop: true,

			});
		});
	});
	function formatar(mascara, documento){
		var i = documento.value.length;
		var saida = mascara.substring(0,1);
		var texto = mascara.substring(i)

		if (texto.substring(0,1) != saida){
			documento.value += texto.substring(0,1);
		}

	}
</script>

</body>
</html>