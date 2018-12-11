<?php
	session_start();
	include_once("conexao.php");

	$cdusuario = $_SESSION['cdusuario'];

	$sql = "SELECT * from usuarios where cdusuario=$cdusuario";
	$query = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($query);

	$_SESSION['cdusuario'] = $row['cdusuario'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['nome']  = $row['nome'];
	$_SESSION['sobrenome']  = $row['sobrenome'];
	$_SESSION['facebook'] = $row['facebook'];
	$_SESSION['whatsapp'] = $row['whatsapp'];
	$_SESSION['instagram'] = $row['instagram'];
	$_SESSION['cidade'] = $row['cidade'];
	$_SESSION['estado'] = $row['estado'];
	$_SESSION['bairro'] = $row['bairro'];



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
				<?php 
					if($_SESSION['email'] == "i9conceitos@gmail.com"){
						$msg = "mensagensadm";
					}else{
						$msg = "mensagens";
					}
				?>
				<div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav pull-left" id="hover">
						<li role="presentation"><a href="../index.php" class="js-scroll-trigger"><i class="fas fa-home"></i></i>&nbsp VOLTAR </a></li>
						<li role='presentation'><a type='button' href='chatcentral.php'><i class='fas fa-comments'></i></i>&nbsp Central de mensagens</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<div class="perfil" style="background-color: white; margin: 7%; padding-bottom: 2%;">
		<div class="cabeca" style="background-color: #569efb; background:  linear-gradient(to left ,#436cda,#ff3578); padding-top: .4%; color: white;">
			<h1 align="center">Perfil do administrador</h1>
			<h4 align="center"><a type='button' class='modal-trigger ' data-target='modal1' href='' style=" color: white;"><i class="fas fa-edit"></i>&nbsp <b>EDITAR</b></a></h4>
			<hr style="background-color: black;">
		</div>
		<div class="row">
			<div class="col-md-3">
				<?php 
					if(isset($_SESSION['imagem'])){
						echo "<div style='display: flex; justify-content: center;  align-items: center;'><img src='../img/perfil/".$_SESSION['imagem']."' class='circle' style='width: 80%;'></div>"; 
					}else{
						echo "<div style='display: flex; justify-content: center;  align-items: center;'><img src='../img/perfil/perfil2.png' class='circle' style='width: 80%;'></div>";
					}
				?><br>
				<h4 align="center"><a href="altimg.php" style="color: #446bd9;">Alterar imagem</a></h4> 
				<h4 align="center"><a href="altsenha.php" style="color: #446bd9;">Alterar senha</a></h4> 
			</div>
			<div class="col-md-3">
				<h3><i class="far fa-address-card"></i> Nome completo:</h3><?php echo $_SESSION['nome']." ".$_SESSION['sobrenome']; ?>
				<h3><i class="far fa-envelope"></i> Email: </h3><?php echo $_SESSION['email']; ?>
			</div>
			<div class="col-md-3">
				<h3><i class="fab fa-facebook"></i> Facebook: </h3><?php echo "fb.com/".$_SESSION['facebook']; ?>
				<h3><i class="fab fa-whatsapp"></i> Whatsapp: </h3><?php echo $_SESSION['whatsapp']; ?>
				<h3><i class="fab fa-instagram"></i> Instagram: </h3><?php echo "instagra.com/".$_SESSION['instagram']; ?>
			</div>
			<div class="col-md-3">
				<h3><i class="far fa-address-card"></i> Estado:</h3><?php echo $_SESSION['estado']; ?>
				<h3><i class="fab fa-fort-awesome"></i> Cidade: </h3><?php echo $_SESSION['cidade']; ?>
				<h3><i class="fab fa-fort-awesome"></i> Bairro: </h3><?php echo $_SESSION['bairro']; ?>
			</div>
		</div>
		<div class="row">
			<div class="col s6 offset-s3">
					<div class="col s6">
						<center  style="padding: 10px;">
							<a type="button" href="#historico" class="js-scroll-trigger btn-i9 waves-effect" style=" font-size: 25px; text-decoration: none;">
								<font style="font-size: 17px;"> Histórico de pedidos </font>
							</a>
						</center>
					</div>
					<div class="col s6">
						<center  style="padding: 10px;">
							<a type="button" href="#usuarios" class="js-scroll-trigger btn-i9 waves-effect" style="font-size: 25px; text-decoration: none;">
								<font style="font-size: 17px;"> Usuários cadastrados </font>
							</a>
						</center>
					</div>
			</div>
		</div>
	</div>
	
	<div id="historico" style="padding-top: 5%;  min-height: 600px;">

		<div class="row">
			<div class="col s11" style="margin-left: 3%;">
				<h1 align="center">Histórico de pedidos</h1><Br>
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th colspan="8" style="text-align: center;"><h3>Informações do cliente</h3></th><th colspan="5" style="text-align: center;"><h3>Informações do pedido</h3></th>
						</tr>	
						<tr>
							<th>Nome</th>
							<th>Email</th>
							<th>Facebook</th>
							<th>Whatsapp</th>
							<th>Instagram</th>
							<th>Estado</th>
							<th>Cidade</th>
							<th>Bairro</th>
							<th>Produto</th>
							<th>Data</th>
							<th>Descrição do produto</th>
							<th>Situação</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							include_once("conexao.php");
							$result_pedidos = "SELECT * FROM pedidos";
							$lista = mysqli_query($conn, $result_pedidos);
						 	while($informações = mysqli_fetch_assoc($lista)){
						?>		

						<tr>
							<td><?php echo $informações['nome']; ?></td>
							<td><?php echo $informações['email']; ?></td>
							<td><?php echo $informações['facebook']; ?></td>
							<td><?php echo $informações['whatsapp']; ?></td>
							<td><?php echo $informações['instagram']; ?></td>
							<td><?php echo $informações['estado']; ?></td>
							<td><?php echo $informações['cidade']; ?></td>
							<td><?php echo $informações['bairro']; ?></td>
							<td><?php echo $informações['produto']; ?></td>
							<td><?php echo $informações['data']; ?></td>
							<td  ><?php echo $informações['descricao']; ?></td>
							<td><?php echo $informações['situacao']; ?></td>
							<td>
								<form method="post" action="prod.php">
									<input type="text" name="cod" value="<?php echo $informações['cdpedido']; ?>" style="display: none;">
									<center>
									<button class="btn-i9" name="botao" value="excluir" style="font-size: 10px; padding: 10px;">Excluir</button><br><Br>
									<button class="btn-i9" name="botao" value="concluir" style="font-size: 10px; padding: 10px;">Concluir</button>
									</center>
								</form>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<a href="#page-top" class="js-scroll-trigger waves-effect" style="font-size: 40px; color: #416ddc; float: right; margin: 3%;" >
		<i class="fas fa-angle-double-up"></i>
	</a>

	<div class="usuarios" id="usuarios" style="min-height: 600px;">
		<div class="row">
			<div class="col s10 offset-s1">
				<h1 align="center">Usuários cadastrados</h1><Br>
				<table class="table table-hover table-bordered">
					<thead>	
						<tr>
							<th colspan="4" style="text-align: center;"><h3>Informações básicas</h3></th><th colspan="3" style="text-align: center;"><h3>Redes sociais</h3></th><th colspan="3" style="text-align: center;"><h3>Endereço</h3></th>
						</tr>
						</tr>
							<th></th>
							<th>Nome</th>
							<th>Sobrenome</th>
							<th>Email</th>
							<th>Facebook</th>
							<th>Whatsapp</th>
							<th>Instagram</th>
							<th>Estado</th>
							<th>Cidade</th>
							<th>Bairro</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							include_once("conexao.php");
							$result_pedidos = "SELECT * FROM usuarios";
							$lista = mysqli_query($conn, $result_pedidos);
						 	while($informações = mysqli_fetch_assoc($lista)){
						?>		

						<tr>
							<td><img width="50px" class="circle" src='<?php echo '../img/perfil/'; if(isset($informações['imagem'])){echo $informações['imagem'];}else{echo 'perfil2.png';}?>'></td>
							<td><?php echo $informações['nome']; ?></td>
							<td><?php echo $informações['sobrenome']; ?></td>
							<td><?php echo $informações['email']; ?></td>
							<td><?php echo $informações['facebook']; ?></td>
							<td><?php echo $informações['whatsapp']; ?></td>
							<td><?php echo $informações['instagram']; ?></td>
							<td><?php echo $informações['estado']; ?></td>
							<td><?php echo $informações['cidade']; ?></td>
							<td><?php echo $informações['bairro']; ?></td>
						</tr>
					</tbody>	
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<a href="#page-top" class="js-scroll-trigger waves-effect" style="font-size: 40px; color: #416ddc; float: right; margin: 3%;" >
		<i class="fas fa-angle-double-up"></i>
	</a>
	<br><BR><BR><br><BR><BR><br><BR><BR><br><BR><BR><br><BR><BR><br>


	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/materialize.js"></script>
	<script src="../js/jquery.easing.js"></script>
	<script type="text/javascript" src="../js/typed.js"></script>
	<script  src="../js/index.js"></script>

	<style type="text/css">
		body{background: url(../img/fund2.png); background-repeat: no-repeat; background-color: black;}
		/*body{background: linear-gradient(to bottom left, #fe3578, #5ca3fe);}*/
		body{background-color: white; font-family: Montserrat;}
		#fundo{margin-top: 12%;}


		td{padding: 50px;}


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

		btn-i9:active{
			color: white;
		}


		.btn-circle
		{font-size:26px; width:55px; height:55px; margin-top:15px; line-height:45px; -webkit-transition:background .3s ease-in-out; -moz-transition:background .3s ease-in-out; transition:background .3s ease-in-out;color: black; border: 2px solid #e43f77; border-radius: 100%!important; background:0 0}
		.btn-circle:focus,.btn-circle:hover
		{color:black; outline: 0; background: rgba(255,255,255,.1)}


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

	<div id="modal1" class="modal" style="font-family:Montserrat; width: 40%;">
		<a type="button"  class="modal-action modal-close pull-right" style="margin: 2%; color: #446bd9;"><i class="fas fa-times fa-2x"> </i> </a>
		<div class="row" style="margin: 7%;">
			<h4 align="center" style="font-size: 2em;">EDITAR PERFIL</h4><br>

			<form class="col s12" method="post" action="logincadastro.php">
				<div class="row">

					<div class="input-field col s6">
						<i class="far fa-address-card prefix"></i>
						<input  id="nome" type="text" class="validate" data-length="30" name="nome" required value="<?php echo $_SESSION['nome']; ?>"></input>
						<label for="nome" data-error="Máximo: 30 caracteres">Nome</label>
						<span class="helper-text" data-error="Máximo: 30 caracteres"></span>
					</div>
					<div class="input-field col s6">
						<i class="far fa-address-card prefix"></i>
						<input  id="sobrenome" type="text" class="validate" data-length="30" name="sobrenome" required  value="<?php echo $_SESSION['sobrenome']; ?>"></input>
						<label for="sobrenome" data-error="Máximo: 30 caracteres">Sobrenome</label>
						<span class="helper-text" data-error="Máximo: 30 caracteres"></span>
					</div>
					<div class="input-field col s12">
						<i class="far fa-envelope prefix"></i>
						<input  id="email2" type="email" class="validate" data-length="50" name="email" required  value="<?php echo $_SESSION['email']; ?>"></input>
						<label for="email2" data-error="Email inválido!">Email</label>
						<span class="helper-text" data-error="Email inválido" data-success="Email válido"></span>
					</div>
					<div class="row"></div>

					<div class="input-field col s4">
						<select class="browser-default" name="estado"  required>
							<option value="" disabled>Estado</option>
							<option value="AC">Acre</option>
							<option value="AL">Alagoas</option>
							<option value="AP">Amapá</option>
							<option value="AM">Amazonas</option>
							<option value="BA">Bahia</option>
							<option value="CE" selected>Ceará</option>
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
						<input  id="cidade" type="text" class="validate" data-length="50" name="cidade" required value="<?php echo $_SESSION['cidade']; ?>"></input>
						<label for="cidade">Cidade</label>
					</div>		
					<div class="input-field col s4">
						<i class="fas fa-building prefix"></i>
						<input  id="bairro" type="text" class="validate" data-length="50" name="bairro" required value="<?php echo $_SESSION['bairro']; ?>"></input>
						<label for="bairro">Bairro</label>
					</div>
					<br>

					<div class="row"></div>

					<div class="input-field col s4">
						<i class="fab fa-facebook-f prefix"></i>
						<input  id="facebook" type="text" class="validate" data-length="50" name="facebook" value="<?php echo $_SESSION['facebook']; ?>"></input>
						<label for="facebook" >Facebook</label>
						<span class="helper-text" data-error="Máximo: 50 caracteres"></span>
					</div>
					<div class="input-field col s4">
						<i class="fab fa-whatsapp prefix"></i>
						<input  id="whastapp" type="text" class="validate" data-length="50" name="whatsapp" OnKeyPress="formatar('## #####-####', this)"  maxlength="13" value="<?php echo $_SESSION['whatsapp']; ?>"></input>
						<label for="whastapp">Whastapp</label>
						<span class="helper-text" data-error="Máximo: 50 caracteres"></span>
					</div>
					<div class="input-field col s4">
						<i class="fab fa-instagram prefix"></i>
						<input  id="instagram" type="text" class="validate" data-length="50" name="instagram" value="<?php echo $_SESSION['instagram']; ?>"></input>
						<label for="instagram" data-error="Email inválido!">Instagram</label>
						<span class="helper-text" data-error="Máximo: 50 caracteres"></span>
					</div>
				</div>
				<button type="submit" class="btn-i9" style="width: 100%;" name="botao" value="editar">CONFIRMAR EDIÇÂO</button>
			</form>

		</div>
	</div>

</body>
</html>