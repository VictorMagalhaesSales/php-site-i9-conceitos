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
	<link href="css/chat.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<link href="fonts/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css"> 

    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo1.css" />
    <script src="js/anime.min.js"></script>
    <script src="js/path-slider.js"></script>
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
			<div class="col-md-4" >
			</div>
			<div class="col-md-4">
				<div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav pull-left" id="hover">
						<li role="presentation"><a href="index.php" class="js-scroll-trigger"><i class="fas fa-home"></i></i>&nbsp VOLTAR </a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>


	<form method="get" action="php/inserirpedido.php">
		<div class="row" style="background-color: rgba(255,255,255,.7);margin-top: 7%;padding: 30px; border: 7px solid #446cda; box-shadow: 1px 1px 30px 1px black; background-image: url(../img/blusaf.png');">
		<div class="col s6" style="padding-left: 7%; margin-top: 11%;">
			<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
			    <symbol id="alarmclock" viewBox="0 0 30 32"><path class="icon__path" d="M 7.5,0 C 3.364,0 0,3.364 0,7.5 l 0,1.0625 c 0,0.276 0.224,0.5 0.5,0.5 0.276,0 0.5,-0.223 0.5,-0.5 L 1,7.5 C 1,3.916 3.916,1 7.5,1 L 8.375,1 C 8.651,1 8.875,0.776 8.875,0.5 8.875,0.224 8.651,0 8.375,0 L 7.5,0 z m 14,0 C 21.224,0 21,0.224 21,0.5 21,0.776 21.224,1 21.5,1 l 0.875,0 c 3.584,0 6.5,2.916 6.5,6.5 l 0,1.0625 c 0,0.276 0.224,0.5 0.5,0.5 0.276,0 0.5,-0.224 0.5,-0.5 l 0,-1.0625 C 29.875,3.364 26.511,0 22.375,0 L 21.5,0 z M 15,2 C 7.28,2 1,8.28 1,16 1,23.72 7.28,30 15,30 22.72,30 29,23.72 29,16 29,8.28 22.72,2 15,2 z m 0,1 C 22.168,3 28,8.832 28,16 28,23.168 22.168,29 15,29 7.832,29 2,23.168 2,16 2,8.832 7.832,3 15,3 z m -0.5,5.8125 c -0.276,0 -0.5,0.224 -0.5,0.5 L 14,16.5 c 0,0.133 0.06325,0.24975 0.15625,0.34375 l 4.90625,4.9375 c 0.098,0.098 0.21575,0.125 0.34375,0.125 0.128,0 0.277,-0.028 0.375,-0.125 0.195,-0.195 0.195,-0.52375 0,-0.71875 L 15,16.28125 15,9.3125 c 0,-0.276 -0.224,-0.5 -0.5,-0.5 z M 4.4375,27 c -0.126625,0.01813 -0.26025,0.077 -0.34375,0.1875 l -3,4 C 0.92875,31.4085 0.9665,31.74025 1.1875,31.90625 1.2775,31.97325 1.396,32 1.5,32 1.651,32 1.80825,31.9435 1.90625,31.8125 l 3,-4 C 5.07125,27.5915 5.0335,27.25975 4.8125,27.09375 4.7025,27.01175 4.564125,26.981875 4.4375,27 z m 20.9375,0 c -0.06294,0.01556 -0.13225,0.05275 -0.1875,0.09375 -0.221,0.166 -0.25875,0.49775 -0.09375,0.71875 l 3,4 C 28.19275,31.9435 28.349,32 28.5,32 c 0.104,0 0.2225,-0.02575 0.3125,-0.09375 0.221,-0.166 0.25875,-0.49775 0.09375,-0.71875 l -3,-4 C 25.781,27.021 25.563813,26.953312 25.375,27 z"></path></symbol>
			    <symbol id="camera" viewBox="0 0 42 32"><path class="icon__path" d="m 16.03125,0 c -2.935,0 -4,1.794 -4,3 l 0,1 C 12.03025,4.082 11.983,6 10,6 L 2.5,6 C 1.121,6 0,7.122 0,8.5 l 0,18 C 0,27.878 1.121,29 2.5,29 l 6,0 C 8.776,29 9,28.776 9,28.5 9,28.224 8.776,28 8.5,28 l -6,0 C 1.673,28 1,27.327 1,26.5 L 1,14 9,14 c -0.644,1.54 -1,3.229 -1,5 0,7.168 5.832,13 13,13 7.168,0 13,-5.832 13,-13 0,-1.771 -0.356,-3.46 -1,-5 l 8,0 0,12.5 c 0,0.827 -0.673,1.5 -1.5,1.5 l -7,0 c -0.276,0 -0.5,0.224 -0.5,0.5 0,0.276 0.224,0.5 0.5,0.5 l 7,0 c 1.379,0 2.5,-1.122 2.5,-2.5 l 0,-18 C 42,7.122 40.879,6 39.5,6 L 32,6 C 30.073,6 30.002,4.203 30,4 L 30,3 C 30,1.742 28.61,0 26,0 l -9.96875,0 z m 0,1 L 26,1 c 2.094,0 3,1.324 3,2 l 0,1 c 0,1.038 0.627,3 3,3 l 7.5,0 C 40.327,7 41,7.673 41,8.5 l 0,4.5 -8.25,0 c -0.074,0 -0.15575,0.0335 -0.21875,0.0625 C 30.36725,8.8835 26.022,6 21,6 15.978,6 11.63275,8.8835 9.46875,13.0625 9.40575,13.0335 9.324,13 9.25,13 L 1,13 1,8.5 C 1,7.673 1.673,7 2.5,7 L 10,7 c 2.368,0 3.01925,-1.958 3.03125,-3 l 0,-1 c 0,-0.804 0.799,-2 3,-2 z M 4.5,2 C 3.673,2 3,2.673 3,3.5 l 0,1 C 3,4.776 3.224,5 3.5,5 3.776,5 4,4.776 4,4.5 l 0,-1 C 4,3.224 4.225,3 4.5,3 l 4,0 C 8.775,3 9,3.224 9,3.5 l 0,1 C 9,4.776 9.224,5 9.5,5 9.776,5 10,4.776 10,4.5 l 0,-1 C 10,2.673 9.327,2 8.5,2 l -4,0 z M 21,7 c 6.617,0 12,5.383 12,12 0,6.617 -5.383,12 -12,12 C 14.383,31 9,25.617 9,19 9,12.383 14.383,7 21,7 z m 0,3 c -4.963,0 -9,4.038 -9,9 0,4.962 4.037,9 9,9 4.963,0 9,-4.038 9,-9 0,-4.962 -4.037,-9 -9,-9 z m 0,1 c 4.411,0 8,3.589 8,8 0,4.411 -3.589,8 -8,8 -4.411,0 -8,-3.589 -8,-8 0,-4.411 3.589,-8 8,-8 z"></path></symbol>
			    <symbol id="chat" viewBox="0 0 42 32"><path class="icon__path" d="M 16.6875,0 C 7.3355,0 0,5.929 0,13.5 c 0,4.539 3.211,7.782 6,9.75 l 0,6.65625 c 0,0.17 0.07675,0.31325 0.21875,0.40625 0.083,0.053 0.18625,0.09375 0.28125,0.09375 0.069,0 0.15275,-0.0335 0.21875,-0.0625 0.146,-0.065 3.54875,-1.6195 6.46875,-4.8125 1.265,0.235 2.702,0.46875 4,0.46875 C 26.6505,26 33,20.979 33,13.5 33,5.804 25.9925,0 16.6875,0 z m 0,1 C 25.4235,1 32,6.374 32,13.5 32,20.382 26.0535,25 17.1875,25 c -1.31,0 -2.80975,-0.255 -4.09375,-0.5 -0.173,-0.031 -0.35175,0.02525 -0.46875,0.15625 -2.05,2.312 -4.458,3.8045 -5.625,4.4375 L 7,23 C 7,22.835 6.91725,22.68775 6.78125,22.59375 4.14325,20.77875 1,17.723 1,13.5 1,6.489 7.8965,1 16.6875,1 z M 16.5,11.5 c -1.103,0 -2,0.897 -2,2 0,1.103 0.897,2 2,2 1.103,0 2,-0.897 2,-2 0,-1.103 -0.897,-2 -2,-2 z m 7,0 c -1.103,0 -2,0.897 -2,2 0,1.103 0.897,2 2,2 1.103,0 2,-0.897 2,-2 0,-1.103 -0.897,-2 -2,-2 z m -14,0.09375 c -1.103,0 -2,0.897 -2,2 0,1.103 0.897,2 2,2 1.103,0 2,-0.897 2,-2 0,-1.103 -0.897,-2 -2,-2 z m 7,0.90625 c 0.551,0 1,0.448 1,1 0,0.552 -0.449,1 -1,1 -0.551,0 -1,-0.448 -1,-1 0,-0.552 0.449,-1 1,-1 z m 7,0 c 0.551,0 1,0.448 1,1 0,0.552 -0.449,1 -1,1 -0.551,0 -1,-0.448 -1,-1 0,-0.552 0.449,-1 1,-1 z m -14,0.09375 c 0.551,0 1,0.448 1,1 0,0.552 -0.449,1 -1,1 -0.551,0 -1,-0.448 -1,-1 0,-0.552 0.449,-1 1,-1 z M 35.46875,14 c -0.194063,0.01823 -0.3745,0.1465 -0.4375,0.34375 -0.083,0.263 0.0495,0.541 0.3125,0.625 C 39.25175,16.21375 41,18.078 41,21 41,23.599 38.63075,25.62175 37.21875,26.59375 37.08275,26.68775 37,26.835 37,27 l 0,3.8125 C 36.27,30.5405 34.998,29.92125 33.875,28.65625 33.758,28.52525 33.57925,28.468 33.40625,28.5 c -0.285,0.055 -0.58,0.13975 -0.875,0.21875 C 32.02125,28.85575 31.499,29 31,29 c -2.568,0 -4.38075,-0.55525 -6.21875,-1.90625 -0.224,-0.164 -0.5235,-0.097 -0.6875,0.125 -0.164,0.223 -0.12825,0.5235 0.09375,0.6875 C 26.2145,29.39625 28.199,30 31,30 c 0.631,0 1.20925,-0.1585 1.78125,-0.3125 0.178,-0.049 0.35625,-0.084 0.53125,-0.125 1.869,1.974 4.00175,2.4195 4.09375,2.4375 0.033,0.007 0.05975,0 0.09375,0 0.114,0 0.2235,-0.051 0.3125,-0.125 C 37.9295,31.78 38,31.65 38,31.5 l 0,-4.25 c 2.582,-1.841 4,-4.046 4,-6.25 0,-3.381 -2.01275,-5.58975 -6.34375,-6.96875 -0.066,-0.0205 -0.122813,-0.03733 -0.1875,-0.03125 z"></path></symbol>
			    <symbol id="envelope" viewBox="0 0 38 32"><path class="icon__path" d="M 19,0 C 18.61525,0 18.2275,0.13975 17.9375,0.40625 L 0.25,11.09375 C 0.1,11.18475 0,11.325 0,11.5 L 0,30.4375 C 0,31.3005 0.72575,32 1.59375,32 l 34.8125,0 C 37.27425,32 38,31.3005 38,30.4375 L 38,11.5 c 0,-0.175 -0.1,-0.31525 -0.25,-0.40625 L 20.0625,0.40625 C 19.7725,0.13975 19.38475,0 19,0 z m 0,1 c 0.151,0 0.29925,0.04925 0.40625,0.15625 C 19.43525,1.18425 19.466,1.229 19.5,1.25 L 36.71875,11.625 24.25,19.0625 C 24.013,19.2045 23.9215,19.512 24.0625,19.75 24.1565,19.907 24.33,20 24.5,20 c 0.087,0 0.17,-0.0145 0.25,-0.0625 L 37,12.625 37,30.40625 20.0625,19.125 c -0.538,-0.429 -1.59175,-0.43525 -2.09375,-0.03125 L 1,30.40625 1,12.625 13.25,19.9375 C 13.33,19.9855 13.413,20 13.5,20 c 0.17,0 0.3435,-0.093 0.4375,-0.25 0.141,-0.237 0.0495,-0.5455 -0.1875,-0.6875 L 1.28125,11.625 18.5,1.25 C 18.535,1.229 18.56475,1.18425 18.59375,1.15625 18.70175,1.04925 18.849,1 19,1 z M 6.5,12 C 6.224,12 6,12.224 6,12.5 6,12.776 6.224,13 6.5,13 l 25,0 C 31.776,13 32,12.776 32,12.5 32,12.224 31.776,12 31.5,12 l -25,0 z M 19,19.8125 c 0.18225,0.0033 0.36525,0.044 0.46875,0.125 L 36.09375,31 1.90625,31 18.5625,19.90625 c 0.0865,-0.069 0.25525,-0.097 0.4375,-0.09375 z"></path></symbol>
			    <symbol id="lightbulb" viewBox="0 0 22 32"><path class="icon__path" d="M 11,0 C 5.71,0 0,4.206 0,11 c 0,3.353 1.34425,6.1745 3.90625,8.3125 0.027,0.034 0.05975,0.06875 0.09375,0.09375 1.901,2.062 1.987,2.43675 2,3.34375 0.006,0.359 0.003,0.47325 0,0.53125 L 6,23.5 C 5.985,23.952 5.96925,24.714 6.90625,25 L 15,26.78125 c 0.036,0.008 0.05875,0 0.09375,0 0.23,0 0.449,-0.17225 0.5,-0.40625 0.06,-0.27 -0.13625,-0.53475 -0.40625,-0.59375 l -8.03125,-1.75 C 7.00125,23.98425 6.986,23.97825 7,23.53125 l 0,-0.1875 C 7,23.34375 7.008,23.258 7,22.75 6.981,21.481 6.7015,20.8645 4.6875,18.6875 4.6485,18.6395 4.6145,18.5925 4.5625,18.5625 2.2065,16.5595 1,14.02 1,11 1,4.823 6.19,1 11,1 c 4.916,0 10,3.741 10,10 0,3.978 -1.94125,6.1825 -3.53125,7.5625 -0.055,0.026 -0.082,0.04775 -0.125,0.09375 C 15.30675,20.86025 15.019,21.481 15,22.75 c 0,0.03 -10e-4,0.05575 0,0.09375 l 0,0.03125 c -0.003,0.076 -10e-4,0.14025 0,0.15625 C 14.966,23.02625 14.875,23 14.875,23 l -4.1875,-1 c -0.272,-0.062 -0.562,0.107 -0.625,0.375 -0.063,0.269 0.106,0.561 0.375,0.625 l 4.15625,0.96875 c 0.055,0.02 0.54875,0.17 0.96875,-0.125 0.183,-0.129 0.3995,-0.391 0.4375,-0.875 l 0,-0.03125 c 0.001,-0.032 0,-0.05975 0,-0.09375 0,-0.009 0.001,-0.02325 0,-0.03125 L 16,22.75 c 0.013,-0.902 0.102,-1.28175 2,-3.34375 0.009,-0.007 0.02325,-0.02325 0.03125,-0.03125 C 20.69825,17.134 22,14.4 22,11 22,4.115 16.407,0 11,0 z M 6.90625,26.6875 c -0.192,0.03455 -0.3605,0.17325 -0.40625,0.375 -0.062,0.269 0.105,0.564 0.375,0.625 l 8,1.8125 c 0.038,0.009 0.089,0 0.125,0 0.229,0 0.448,-0.142 0.5,-0.375 0.062,-0.269 -0.105,-0.564 -0.375,-0.625 l -8,-1.8125 c -0.06775,-0.015 -0.15475,-0.01152 -0.21875,0 z m 0.5,2.875 C 7.2144844,29.597328 7.0465,29.73575 7,29.9375 c -0.06,0.27 0.105,0.53375 0.375,0.59375 L 13.875,32 c 0.038,0.009 0.089,0 0.125,0 0.229,0 0.448,-0.17325 0.5,-0.40625 C 14.56,31.32375 14.36375,31.06 14.09375,31 l -6.5,-1.4375 c -0.06775,-0.015 -0.1235781,-0.01161 -0.1875,0 z"></path></symbol>
			</svg>
			<div  style="margin-left: 5%; padding-top: 12%;" >
			    <!-- Path Slider Container -->
			    <div class="path-slider" >
			        <!-- SVG path to slide the items -->
			        <svg width="460px" height="310px" viewBox="0 0 460 310" style="background-image: url(img/perso.png);">
			            <path d="M 230 5 c -300 0 -300 300 0 300 c 300 0 300 -300 0 -300 Z" class="path-slider__path"></path>
			        </svg>
			        <!-- Slider items -->
			        <a href="#chat" class="path-slider__item" >
			        	<input type="radio"  id="pro" value="Chinelo personalizada" name="produto" style="background: transparent; border: transparent;display: none;"></input>
			        	<label for="pro">
			        	<img src="img/p/o1.png" class="circle" id="img" style=" width: 130px; cursor: pointer;">
				        <div class="item__title"><h3 class="pink-text">Chinelo <br>personalizado</h3><h5 class="pink-text">R$ 20,00</h5></div>
				    	</label>
			        </a>
			        <a href="#alarmclock" class="path-slider__item">
			        	<input type="radio"  id="pro2" value="Kit soneca" name="produto" style="background: transparent; border: transparent; display: none;"></input>
			        	<label for="pro2">
			            <img src="img/p/o3.png" class="circle" id="img" style=" width: 130px; cursor: pointer;">
			            <div class="item__title"><h3 class="pink-text">Kit soneca</h3><h5 class="pink-text">R$ 35,00 (Almofada, tapa olho e bolsa)</h5></div>
			            </label>
			        </a>
			        <a href="#camera" class="path-slider__item">
			        	<input type="radio"  id="pro3" value="Almochaveiros" name="produto" style="background: transparent; border: transparent; display: none;"></input>
			        	<label for="pro3">
			            <img src="img/p/o2.png" class="circle" id="img" style=" width: 130px; cursor: pointer;">
			            <div class="item__title"><h3 class="pink-text">Almochaveiros</h3><h5 class="pink-text">R$ 3,50 (10 peças)</h5></div>
			            </label>
			        </a>
			        <a href="#envelope" class="path-slider__item">
			        	<input type="radio"  id="pro4" value="Azulejos" name="produto" style="background: transparent; border: transparent; display: none;">	</input>
			        	<label for="pro4">
			        	<img src="img/p/o4.png" class="circle" id="img" style=" width: 130px; cursor: pointer;">
			            <div class="item__title"><h3 class="pink-text">Azulejos</h3><h5 class="pink-text"></h5></div>
			            </label>
			        </a>
			        <a href="#lightbulb" class="path-slider__item">
			        	<input type="radio"  id="pro5" value="Outros: outro" name="produto" style="background: transparent; border: transparent; display: none;"></input>
			        	<label for="pro5">
			        	<i class="fas fa-question-circle fa-9x" style="color: #5096ff; font-size: 120px; cursor: pointer;"></i>
			            <div class="item__title"><h3 class="pink-text">outro</h3></div>
			            </label>
			        </a>	        
			    </div>
			</div>
		</div>
		<div class="col s6">
			<h3 align="center" style="font-weight: bold; margin-top: 150px; margin-bottom: 50px; color: #3d78ff;">DETALHAMENTO DO PRODUTO</h3>
			<form method="post">
			<div class="input-field col-md-12">
				<i class="far fa-edit fa-9x prefix"></i>
	          	<label for="textarea1"><font style="color: rgba(0,0,0,0);">____</font>Detalhameto</label>
	          	<textarea id="textarea1" class="materialize-textarea" name="descricao"></textarea>
	        	<button type="submit" class="btn-i9 btn-floating pulse">Encaminhar pedido</button>
	        </div>
		</div>
		</div>
	</form>	



	<!-- ----------------------------------- IMPORTS JS ----------------------------------- -->

	<script src="js/demo1.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>
	<script src="js/jquery.easing.js"></script>
	<script type="text/javascript" src="js/typed.js"></script>
	<script  src="js/index.js"></script>

	<!-- ----------------------------------- EDIÇÕES CSS LOCAIS ----------------------------------- -->
	<style type="text/css">
			body{background: url(img/fund.png); background-repeat: no-repeat; background-color: white;}
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
			@font-face {
				font-family: Montserrat-bold;
				src: url('fonts/Montserrat/Montserrat-bold.ttf');
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
</body>
</html>