<?php
	session_start();
	include_once 'DB.php';
	if(isset($_SESSION['email'])){
		header("location:index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login.php</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Bad+Script|Pacifico|Playball|Yellowtail&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
	<script src="validarlog.js"></script>
</head>
<body>

	
	<header>
		<div class="logoHeder">
			<!--logo-->
			<img src="img/logo.png">
		</div>
		<div class="divMenu">
			<div class="slogan">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do .</p>
			</div>
			<nav>
				<ul class="menu">
				<li><a class="link" href="conocenos.php">Conocenos</a></li>
			</ul>
			</nav>
		</div>
	</header>

	<section>
		<div class="cont">

			<div class="blanco">
				<?php 
				if(!$_POST){

				?>
				<form action="log.php" class="for" method="POST" onsubmit="return validarlog();">
					<div class="form-group">
						<label for="email">Direccion de Correo:</label>
					    <input type="email" class="form-control" id="emaill" name="email" placeholder="exjemplo@correo.com">
					</div>
					<div class="form-group">
					    <label for="pass">Contraseña:</label>
					    <input type="password" class="form-control" id="passl" name="pass" placeholder="exjemploContraseña123">
					</div>
					<button type="submit" class="btn login">Iniciar Sesion</button>
					<a href="registro.php">Crear Cuenta Aquí</a>
				</form> 
				<?php 
				}
				 ?>
			</div>
			
		</div>

	</section>







	<footer>

		<div class="f">
			<div class="contacto foot">
				<div class="contac1">
					<img class="icon1" src="img/car.png">
				</div>
				<div class="contac">
					<ul>
						<li>Telefono:</li>
						<li>612-13-1-6915</li>
						<li>Correo:</li>
						<li>la_exquisita@gmail.com</li>
					</ul>
				</div>
			</div>

			<div class="line"></div>

			<div class="direccion foot">
				<div class="contac1">
					<img class="icon2" src="img/ico.jpg">
				</div>
				<div class="contac">
					<ul>
						<li>Telefono:</li>
						<li>612-13-1-6915</li>
						<li>Correo:</li>
						<li>la_exquisita@gmail.com</li>
					</ul>
				</div>			
			</div>

			<div class="line"></div>

			<div class="redes foot">
				<div class="contac1">
					<img class="icon3" src="img/fb.png">
				</div>
				<div class="contac2">
					<img class="icon3" src="img/tw.png">
				</div>		
				<!--
					<div class="contac1">
						<img class="icon1" src="img/fb.png">
					</div>
					<div class="contac1">
						<img class="icon1" src="img/tw.png">
					</div>-->
			</div>
		</div>
		
	</footer>






	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
</body>
</html>