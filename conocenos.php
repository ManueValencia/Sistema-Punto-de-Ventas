
<!DOCTYPE html>
<html>
<head>
	<title>Index.php</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Bad+Script|Pacifico|Playball|Yellowtail&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
</head>
<body>

	<?php
	session_start();
	include_once 'DB.php'; 
	if (isset($_SESSION['email'])){
		$idCli=$_SESSION['idcli'];
		$total=$_SESSION['Total'];
?>
	<header>
		<div class="logoHeder">
			<!--logo-->
			<img src="img/logo.png">
		</div>
		<div class="divMenu">
			<nav>
				<ul class="menu">
				<li><a class="link" href="index.php">Inicio</a></li>
				<li><a class="link" href="productos.php">Categorias</a></li>
				<li><a class="link" href="conocenos.php">Conocenos</a></li>
				<li><a class="link" href="carrito.php">Carrito</a></li>
				<li><a class="link" href="logout.php">Cerrar Secion</a></li>
			</ul>
			<h5 class="correo">Nombre: <?php echo $_SESSION['nombre'];?> .</h5>
			</nav>
		</div>
	</header>

	<?php	
 		}else{ 

?>
		<header>
		<div class="logoHeder">
			<!--logo-->
			<img src="img/logo.png">
		</div>
		<div class="divMenu">
			<nav>
				<ul class="menu">
				<li><a class="link" href="index.php">Inicio</a></li>
				<li><a class="link" href="productos.php">Categorias</a></li>
				<li><a class="link" href="conocenos.php">Conocenos</a></li>
				<li><a class="link" href="carrito.php">Carrito</a></li>
			</ul>
			
			</nav>
		</div>
	</header>
<?php
 		 }
?>




	<section>
		<div class="conocenos">


			<h1>-SLOGAN-SLOGAN-SLOGAN-SLOGAN-SLOGAN-</h1>
			<br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum. do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum. do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum. do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
						<li class="letra">Telefono:</li>
						<li class="letra">612-13-1-6915</li>
						<li class="letra">Correo:</li>
						<li class="letra">la_exquisita@gmail.com</li>
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
						<li class="letra">Telefono:</li>
						<li class="letra">612-13-1-6915</li>
						<li class="letra">Correo:</li>
						<li class="letra">la_exquisita@gmail.com</li>
					</ul>
				</div>			
			</div>

			<div class="line"></div>

			<div class="redes foot">
				<div class="contac1">
					<a href="https://www.facebook.com"><img class="icon3" src="img/fb.png"></a>
				</div>
				<div class="contac2">
					<a href=""><img class="icon3" src="img/tw.png"></a>
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