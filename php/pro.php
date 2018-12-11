<?php
session_start();
include_once("conexao.php");

	$cd = (int) $_POST['botao'];
	
	$consu = "SELECT * FROM conversas where cdusuario=$cd";
	$li = mysqli_query($conn, $consu);
	$info = mysqli_fetch_assoc($li);

	if(isset($_POST['mensagem'])){
		$msg = $_POST['mensagem'];

		$conv1 = "SELECT mensagem_adm FROM conversas where cdusuario=$cd";
		$conv2 = mysqli_query($conn, $conv1);
		$info = mysqli_fetch_assoc($conv2);
		$antiga = $info['mensagem_adm'];
		$antiga .= "<br>".$msg; 

		$ms = "UPDATE conversas SET mensagem_adm='$antiga' where cdusuario=$cd";
		$ms = mysqli_query($conn,$ms);
		if($ms){
		}else{
		echo "<script type='text/javascript'>alert('Erro ao enviar mensagem, tente novamente mais tarde');</script>";
		}
	}

	$consu = "SELECT * FROM conversas where cdusuario=$cd";
	$li = mysqli_query($conn, $consu);
	$info = mysqli_fetch_assoc($li);
	?>
	<div class="col s6">	
    	<ul>
			<li class="other">
				<a class="user" href="#"><img alt="" src="../img/i92.png"/></a>
				<div class="date">
				</div>
				<div class="message">
					<div class="hider">
					<span>Clique para ler</span>
					</div>
					<p>
					<?php
						echo $info['mensagem_adm'];
					?>	
					</p>
				</div>
			</li>
		</ul>
	</div>	