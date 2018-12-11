<?php
	session_start();
	include_once("conexao.php");
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
						<li role="presentation"><a href="perfilusuario.php" class="js-scroll-trigger"><i class='fas fa-user-circle'></i> &nbsp VOLTAR </a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>


	<div style="background-color: white; margin-top: 7%; margin-left: 30%; margin-right: 30%; padding: 5%; border-radius: 100%; border: 10px solid #e43f77;">
		<center>
		<form method="post">
			<h1>Alterar senha</h1><br>
			<div class="row">
				<div class="input-field col s8 offset-s2">
					<i class="fas fa-key prefix"></i>
					<input  id="senhaantiga" type="password" class="validate" data-length="30" name="senhaantiga" required ></input>
					<label for="senhaantiga" data-error="Máximo: 30 caracteres">Senha antiga:</label>
					<span class="helper-text" data-error="Máximo: 30 caracteres"></span>
				</div>
			</div>
			<div class="row">	
				<div class="input-field col s8 offset-s2">
					<i class="fas fa-key prefix"></i>
					<input  id="novasenha" type="password" class="validate" data-length="30" name="novasenha" required ></input>
					<label for="novasenha" data-error="Máximo: 30 caracteres">Nova senha:</label>
					<span class="helper-text" data-error="Máximo: 30 caracteres"></span>
				</div>
			</div>
			<div class="row">	
				<div class="input-field col s8 offset-s2">
					<i class="fas fa-key prefix"></i>
					<input  id="novasenha2" type="password" class="validate" data-length="30" name="novasenha2" required ></input>
					<label for="novasenha2" data-error="Máximo: 30 caracteres">Confirmar nova senha:</label>
					<span class="helper-text" data-error="Máximo: 30 caracteres"></span>
				</div>
			</div>
			<div class="row">
				<div class="col s1"></div>
				<div class="col s10">
				<button class="btn-i9  modal-trigger" style="width: 80%;" name="botao" value="alterarsenha" href="#modal1">Alterar senha</button>

				  <!-- Modal Structure -->
				  <div id="modal1" class="modal" style="height: 200px; width: 30%;">
				    <div class="modal-content">
				      <h4>Tem certeza que deseja alterar a senha?</h4>
				    </div>
				    <div class="modal-footer">
				    	<center>
				      <button class="btn-i9" style="padding: 20px;" name="botao" value="alterarsenha" type="submit">Sim</button>
				      <button class="btn-i9 modal-action modal-close waves-effect waves-green" style="padding: 20px;" name="botao" value="alterarsenha" type="submit" href="#!" >Não</button>
				      </center>
				    </div>
				  </div>
				</div>
			</div>

			
		</form>
		<?php
			if(isset($_POST['botao'])){
				if ($_POST['botao'] == "alterarsenha") {
					$senhaantiga = $_POST['senhaantiga'];
					$novasenha = $_POST['novasenha'];
					$novasenha2 = $_POST['novasenha2'];
					$sql = "SELECT * from usuarios where cdusuario='".$_SESSION['cdusuario']."'";
					$query = mysqli_query($conn,$sql);
					$row = mysqli_fetch_assoc($query);

					if($row['senha'] == $senhaantiga){
						if($novasenha == $novasenha2){
							$sql = "update usuarios set senha='$novasenha' where cdusuario='".$_SESSION['cdusuario']."'";
							$query = mysqli_query($conn,$sql);
							if($query){
								echo "<h4 style='color: #a83f60;'>Senha redefinida com sucesso!</h4>";
							}else{
								echo "<h4 style='color: #a83f60;'>Erro ao redefinir senha. Por favor, tente mais tarde</h4>";

							}
						}
					}else{
						echo "
						<h4 style='color: #a83f60;'>Senha antiga incorreta!</h4>
						";
					}
				}
			}	
			unset($_POST['botao']);
		?>
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