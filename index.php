<?php
session_start();
include_once("php/conexao.php");
?>
<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<title>i9 Conceitos</title>
	<link rel="shortcut icon" type="image/png" href="img/fav2.png"/>
	<link href="css/materialize.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	
	<link href="fonts/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body id="page-top">
	<!-- ----------------------------------- MENU DE NAVEGAÇÃO ----------------------------------- -->
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
					<img src="img/i92.png" width="50" class="imgi9">
				</a>
				<a href="#page-top " style="text-decoration: none;" class="js-scroll-trigger"><span class="typed"></span></a>	
			</div>
			<div class="col-md-2" >
			</div>
			<div class="col-md-6">
				<div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav pull-right" id="hover">
						<li role="presentation"> <a href="#sobre" class="js-scroll-trigger" ><i class="fas fa-question fa-1x"></i>&nbsp SOBRE </a></li>
						<li role="presentation"> <a href="#produtos" class="js-scroll-trigger" ><i class="fas fa-shopping-basket fa-1x"></i>&nbsp PRODUTOS</a> </li>
						<?php
						if(isset($_SESSION['nome'])){
							if ($_SESSION['email'] == "i9conceitos@gmail.com") {
								echo "
								<li role='presentation'><font style='opacity: 0;'>________</font>
								<li role='presentation'><a type='button' href='php/perfiladm.php'><i class='fas fa-user-circle'></i> &nbsp".$_SESSION['nome']."</a></li>
								<li role='presentation'><a type='button' href='php/sair.php'><i class='fas fa-power-off'></i>&nbsp Sair</a></li>
								";
							}else{
								echo "
								<li role='presentation'><font style='opacity: 0;'>________</font>
								<li role='presentation'><a type='button' href='php/perfilusuario.php'><i class='fas fa-user-circle'></i> &nbsp".$_SESSION['nome']."</a></li>
								<li role='presentation'><a type='button' href='php/sair.php'><i class='fas fa-power-off'></i>&nbsp Sair</a></li>
								";
							}
						}else{
							echo "
							<li role='presentation'><font style='opacity: 0;'>_____________ </font></li>
							<li role='presentation'><a type='button' class='modal-trigger' data-target='modal1' href=''><i class='fas fa-sign-in-alt fa-1x'></i>&nbsp LOGIN</a></li>
							<li role='presentation'><a type='button' class='modal-trigger' data-target='cadastro' href=''><i class='fas fa-user-plus fa-1x'></i>&nbsp CADASTRO</a></li>
							";
						}
						?>
					</ul>	
				</div>
			</div>
		</div>
	</nav> 

	<!-- ----------------------------------- LOGO I9 CONCEITOS ----------------------------------- -->

	<div id="fundo" class="text-center" style="background-image: url(img/fundoclaro.png);">
		<img src="img/i9.png" class="rounded mx-auto d-block" width="350"><br><br>
		<a href="#sobre" class="btn btn-circle js-scroll-trigger waves-effect" >
			<i class="fas fa-angle-double-down"></i>
		</a>
	</div>

	<!-- ----------------------------------- SOBRE ----------------------------------- -->

	<section class="content-section content" style="padding-top: 10%; margin-bottom: 15%;" id="sobre">
		<div class="row">
			<div class="col-md-3" style=" padding-top: 100px;">
				<img src="img/otavio.jpg" class="img-circle pull-right" style="box-shadow: 0px 0px 0px 10px #d9e7f4;" width="300px;"/>
			</div>
			<div class="col-md-4" style="padding-left: 30px; padding-top: 100px;">
				<h1 style="font-family: Montserrat-light; font-weight: bold; text-align: left; font-weight: bold; color: #ff3578;"><i class="fas fa-question fa-1x"></i> Sobre nós</h1>
				<p class="lead" style="font-size: 20px; font-family: Montserrat-light;">Com incetivo de meus pais criei minha própria empresa,pois os mesmos já possuía em sua casa uma produção de roupas. O nome I9 Conceitos foi fundado pelo fato de gostar da inovação, trazendo novos produtos com qualidade ao ao mercado.
				<br> <b>Otavio de Sousa</b>	</p>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-3" style="background-color: white; box-shadow: 5px 5px #d9e7f4; padding-top: -100px;">

				<a type="button" class="btn btn-primary edit waves-effect" style="font-weight: 1000; padding-left: 38px; padding-right: 38px;" href="https://www.facebook.com/I9-Conceitos-1790436684620481/" target="_blank"><i class="fab fa-facebook-f fa-3x"></i></a>
				<font style="font-family: Montserrat-light; font-weight: bold; color: #3965c2; font-size: 1.7em;">&nbsp&nbsp /I9-Conceitos</font><br>

				<a type="button" class="btn btn-success edit waves-effect" style="font-weight: 1000;" target="_blank"><i class="fas fa-phone fa-3x"></i></a>
				<font style="font-family: Montserrat-light; font-weight: bold; color: #34af23; font-size: 1.7em;">&nbsp&nbsp (85) 986170949</font>
				<br>

				<a type="button" class="btn btn-success edit waves-effect" style="font-weight: 1000;" target="_blank"><i class="fab fa-whatsapp fa-3x"></i></a>
				<font style="font-family: Montserrat-light; font-weight: bold; color: #34af23; font-size: 1.7em;">&nbsp&nbsp (85) 999820141</font>
				<br>

				<a type="button" class="btn btn-info edit waves-effect" style="font-weight: 1000;" href="https://www.instagram.com/i9conceitos" target="_blank"><i class="fab fa-instagram fa-3x" ></i></a>
				<font style="font-family: Montserrat-light; font-weight: bold; color: #ff3578; font-size: 1.7em;">&nbsp&nbsp @i9conceitos</font>
			</div>
		</div>
	</section>

	<!-- ----------------------------------- PRODUTOS ----------------------------------- -->

	<section id="produtos" class="content-section text-center" style="background-image: url(img/fundobaixp.png); background-repeat: no-repeat;  font-family: Montserrat-ExtraLight; width: 100%;">

		<h1 style="color: #f23674; padding: 20px; font-size: 32px;"><b>P &nbsp R &nbsp O &nbsp D &nbsp U &nbsp T &nbsp O &nbsp S</b></h1>

		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="">
		  	<div class="panel panel-default">

		  	<div style="display: flex; justify-content: center; align-items: center; background-color: white;" >
			    <div class="panel-heading" role="tab" id="headingOne" style="color: #1f81ff; padding: 2%; float: left;">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			          <b>BLUSAS</b>
			        </a>
			      </h4>
			    </div>

			    <div class="panel-heading" role="tab" id="headingTwo" style="color: #1f81ff; padding: 2%; float: left;">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			          <b>COPOS E CANECAS</b>
			        </a>
			      </h4>
			    </div>

			    <div class="panel-heading" role="tab" id="headingThree" style="color: #1f81ff; padding: 2%; float: left;">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			          <b>BALDES</b>
			        </a>
			      </h4>
			    </div>

			    <div class="panel-heading" role="tab" id="headingFour" style="color: #1f81ff; padding: 2%; float: left;">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
			          <b>ALMOFADAS</b>
			        </a>
			      </h4>
			    </div>

			    <div class="panel-heading" role="tab" id="headingFive" style="color: #1f81ff; padding: 2%; float: left;">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
			          <b>OUTROS</b>
			        </a>
			      </h4>
			    </div>
			</div> 


			    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
			      	<div class="panel-body">
			      		<form method="post" action="blusas.php">
					      	<div class="row">
								<div class="col-md-12" id="as">
									<div class="carousel" id="cblusa">
										<a class="carousel-item" href="#one!"><img src="img/p/m1.png"></a>
										<a class="carousel-item" href="#two!"><img src="img/p/m2.png"></a>
										<a class="carousel-item" href="#four!"><img src="img/p/m3.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/m4.png"></a>
										<a class="carousel-item" href="#eight!"><img src="img/p/m5.png"></a>
										<a class="carousel-item" href="#nine!"><img src="img/p/m6.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/m7.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/m8.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/m9.png"></a>
									</div>
								</div>
							</div>
							</Br>
							<div class="row">
								<div class="col-md-4"></div>
									<div class="col-md-4">
										<?php 
											if(isset($_SESSION['email'])){	
												echo "<button type='submit' style='width: 70%;' class='btn-i9 btn-lg waves-effect' >PERSONALIZAR</button>";
											}else{
												echo "<button type='button' style='width: 70%;' class='btn-i9 btn-lg waves-effect'>FAÇA O LOGIN PARA PERSONALIZAR</button>";
											}
										?>
									</div>
								<div class="col-md-4"></div>
							</div>
						</form>
			      	</div>
			    </div>
			    
			    <div id="collapseTwo" class="panel-collapse collapsing" role="tabpanel" aria-labelledby="headingTwo">
			      <div class="panel-body">
			      		<form method="post" action="copos.php">
					      	<div class="row">
								<div class="col-md-12" id="as">
									<div class="carousel" id="cblusa">
										<a class="carousel-item" href="#one!"><img src="img/p/c1.png"></a>
										<a class="carousel-item" href="#two!"><img src="img/p/c2.png"></a>
										<a class="carousel-item" href="#four!"><img src="img/p/c3.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/c4.png"></a>
										<a class="carousel-item" href="#eight!"><img src="img/p/c5.png"></a>
										<a class="carousel-item" href="#nine!"><img src="img/p/c6.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/c7.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/c8.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/c5.png"></a>
									</div>
								</div>
							</div>
							</Br>
							<div class="row">
								<div class="col-md-4"></div>
									<div class="col-md-4">
										<?php 
											if(isset($_SESSION['email'])){	
												echo "<button type='submit' style='width: 70%;' class='btn-i9 btn-lg waves-effect' >PERSONALIZAR</button>";
											}else{
												echo "<button type='button' style='width: 70%;' class='btn-i9 btn-lg waves-effect'>FAÇA O LOGIN PARA PERSONALIZAR</button>";
											}
										?>
									</div>
								<div class="col-md-4"></div>
							</div>
						</form>
			      </div>
			    </div>

			    
			    <div id="collapseThree" class="panel-collapse collapsing" role="tabpanel" aria-labelledby="headingThree">
			      <div class="panel-body">
			      		<form method="post" action="baldes.php">
					      	<div class="row">
								<div class="col-md-12" id="as">
									<div class="carousel" id="cblusa">
										<a class="carousel-item" href="#one!"><img src="img/p/b1.png"></a>
										<a class="carousel-item" href="#two!"><img src="img/p/b2.png"></a>
										<a class="carousel-item" href="#four!"><img src="img/p/b3.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/b4.png"></a>
										<a class="carousel-item" href="#eight!"><img src="img/p/b5.png"></a>
										<a class="carousel-item" href="#nine!"><img src="img/p/b1.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/b2.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/b3.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/b4.png"></a>
									</div>
								</div>
							</div>
							</Br>
							<div class="row">
								<div class="col-md-4"></div>
									<div class="col-md-4">
										<?php 
											if(isset($_SESSION['email'])){	
												echo "<button type='submit' style='width: 70%;' class='btn-i9 btn-lg waves-effect' >PERSONALIZAR</button>";
											}else{
												echo "<button type='button' style='width: 70%;' class='btn-i9 btn-lg waves-effect'>FAÇA O LOGIN PARA PERSONALIZAR</button>";
											}
										?>
									</div>
								<div class="col-md-4"></div>
							</div>
						</form>
			      </div>
			    </div>

			    <div id="collapseFour" class="panel-collapse collapsing" role="tabpanel" aria-labelledby="headingFour">
			      <div class="panel-body">
			      		<form method="post" action="almofadas.php">
					      	<div class="row">
								<div class="col-md-12" id="as">
									<div class="carousel" id="cblusa">
										<a class="carousel-item" href="#one!"><img src="img/p/a1.png"></a>
										<a class="carousel-item" href="#two!"><img src="img/p/a2.png"></a>
										<a class="carousel-item" href="#four!"><img src="img/p/a3.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/a4.png"></a>
										<a class="carousel-item" href="#eight!"><img src="img/p/a5.png"></a>
										<a class="carousel-item" href="#nine!"><img src="img/p/a6.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/a7.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/a8.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/a5.png"></a>
									</div>
								</div>
							</div>
							</Br>
							<div class="row">
								<div class="col-md-4"></div>
									<div class="col-md-4">
										<?php 
											if(isset($_SESSION['email'])){	
												echo "<button type='submit' style='width: 70%;' class='btn-i9 btn-lg waves-effect' >PERSONALIZAR</button>";
											}else{
												echo "<button type='button' style='width: 70%;' class='btn-i9 btn-lg waves-effect'>FAÇA O LOGIN PARA PERSONALIZAR</button>";
											}
										?>
									</div>
								<div class="col-md-4"></div>
							</div>
						</form>
			      </div>
			    </div>

			    <div id="collapseFive" class="panel-collapse collapsing" role="tabpanel" aria-labelledby="headingFive">
			      	<div class="panel-body">
			      		<form method="post" action="outros.php">
					      	<div class="row">
								<div class="col-md-12" id="as">
									<div class="carousel" id="cblusa">
										<a class="carousel-item" href="#one!"><img src="img/p/o1.png"></a>
										<a class="carousel-item" href="#two!"><img src="img/p/o2.png"></a>
										<a class="carousel-item" href="#four!"><img src="img/p/o3.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/o4.png"></a>
										<a class="carousel-item" href="#eight!"><img src="img/p/o5.png"></a>
										<a class="carousel-item" href="#nine!"><img src="img/p/o6.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/o7.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/o3.png"></a>
										<a class="carousel-item" href="#six!"><img src="img/p/o4.png"></a>
									</div>
								</div>
							</div>
							</Br>
							<div class="row">
								<div class="col-md-4"></div>
									<div class="col-md-4">
										<?php 
											if(isset($_SESSION['email'])){	
												echo "<button type='submit' style='width: 70%;' class='btn-i9 btn-lg waves-effect' >PERSONALIZAR</button>";
											}else{
												echo "<button type='button' style='width: 70%;' class='btn-i9 btn-lg waves-effect' >FAÇA O LOGIN PARA PERSONALIZAR</button>";
											}
										?>
									</div>
								<div class="col-md-4"></div>
							</div>
						</form>
			      	</div>
			    </div>

		  	</div>
		</div>
		<br><br><br><br><br><br>
	</section>	

	<br><br><br><br><br><br>
	<!-- -----------------------------------RODAPÉ ----------------------------------- -->

	<footer class="blue">
        <div class="footer-copyright" style="color: white;">
	        <div class="col-md-5 col-md-offset-3 ">
	        	2018 © I9 Conceitos  
	        </div>	
	        <div class="col-md-2">
	        	<a type="button" class="btn  waves-effect" style="font-weight: 1000;" href="https://www.facebook.com/I9-Conceitos-1790436684620481/" target="_blank"><i class="fab fa-facebook-f fa-2x"></i></a>	
				<a type="button" class="btn waves-effect" style="font-weight: 1000;" href="https://www.instagram.com/i9conceitos" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
	        </div>
	        <br><br>
        </div>
    </footer>



	<!-- ----------------------------------- MODAL DO LOGIN ----------------------------------- -->

	<div id="modal1" class="modal" style="font-family:Montserrat; width: 40%;">
		<a type="button"  class="modal-action modal-close pull-right" style="margin: 2%; color: #446bd9;"><i class="fas fa-times fa-2x"> </i> </a>
		<div class="row" style="margin: 7%;">
			<h4 align="center" style="font-size: 2em;">Login</h4><br>

			<form class="col s12" method="post" action="php/logincadastro.php">
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

		</div>
	</div>

	<!-- ----------------------------------- MODAL DO CADASTRO ----------------------------------- -->

	<div id="cadastro" class="modal " style="font-family:Montserrat; width: 60%;">
		<a type="button"  class="modal-action modal-close pull-right" style="margin: 2%; color: #446bd9;"><i class="fas fa-times fa-2x"></i> </a>
		<div class="row" style="margin-left: 4%; margin-right: 4%; margin-top: 2%;">
			<h4 align="center" style="font-size: 2em;">Cadastro</h4><br>

			<form class="col s12" method="post" action="php/logincadastro.php">
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

		</div>	
	</div>


	<!-- ----------------------------------- IMPORTS JS ----------------------------------- -->

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>
	<script src="js/jquery.easing.js"></script>
	<script type="text/javascript" src="js/typed.js"></script>
	<script  src="js/index.js"></script>


	<!-- ----------------------------------- EDIÇÕES CSS LOCAIS ----------------------------------- -->
	<style type="text/css">
		body{background: url(img/fund.png); background-repeat: no-repeat; background-color: black;}
		/*body{background: linear-gradient(to bottom left, #fe3578, #5ca3fe);}*/
		body{background-color: white; font-family: Montserrat;overflow-x: hidden; }
		#fundo{height: 800px;}
		#fundo img{margin-top: 10%}

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
			src: url('fonts/trench100free.ttf');
		}
		@font-face {
			font-family: Montserrat;
			src: url('fonts/Montserrat/Montserrat-Regular.ttf');
		}
		@font-face {
			font-family: Montserrat-light;
			src: url('fonts/Montserrat/Montserrat-light.ttf');
		}
		@font-face {Montserrat-ExtraLight
			font-family: Montserrat-bold;
			src: url('fonts/Montserrat/Montserrat-bold.ttf');
		}
		@font-face {
			font-family: Montserrat-ExtraLight;
			src: url('fonts/Montserrat/Montserrat-Light.ttf');
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

	<!-- ----------------------------------- EDIÇÕES JS LOCAIS ----------------------------------- -->
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