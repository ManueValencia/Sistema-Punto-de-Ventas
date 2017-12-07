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
	<title>Registro.php</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Bad+Script|Pacifico|Playball|Yellowtail&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
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
		<div class="cont2">

			<div class="blanco1">
				<?php 
				if(!$_POST){

				?>
				<form action="User.php"  class="for" method="POST" onsubmit="return validar();">
				    <div class="form-group"> <!-- Full Name -->
				        <label for="nombrer" class="control-label">Nombre</label>
				        <input required type="text" class="form-control" id="nombrer" name="nombre" placeholder="Nombre">
				    </div>    

				    <div class="form-group"> <!-- Full Name -->
				        <label for="apellidopr" class="control-label">Apellido Paterno</label>
				        <input required type="text" class="form-control" id="apellidopr" name="apellidop" placeholder="Apellido Paterno">
				    </div>                  
				                            
				    <div class="form-group"> <!-- Full Name -->
				        <label for="apellidomr" class="control-label">Apellido Materno</label>
				        <input required type="text" class="form-control" id="apellidomr" name="apellidom" placeholder="Apellido Materno">
				    </div>      

				    <div class="form-group"> <!-- City-->
				        <label for="email" class="control-label">Direccion de Correo:</label>
					    <input required type="email" class="form-control" id="emailr" name="email" placeholder="exjemplo@correo.com">
				    </div>

				    <div class="form-group"> <!-- City-->
				        <label for="password" class="control-label">Contraseña</label>
					    <input required type="password" class="form-control" id="passr" name="password" placeholder="*************">
				    </div>

				    <div class="form-group"> <!-- City-->
				        <label for="password" class="control-label">Telefono</label>
					    <input required type="text" class="form-control" id="telr" name="tel" placeholder="1234567890">
				    </div>                                          
				                            
				    <div class="form-group"> <!-- State Button -->
				        <label for="state_id" class="control-label">Fecha de Nacimiento</label>
				        <br>
					        <select class=" combo" id="dia" name="dia">
					            <option value="01">1</option>
								<option value="02">2</option>
								<option value="03">3</option>
								<option value="04">4</option>
								<option value="05">5</option>
								<option value="06">6</option>
								<option value="07">7</option>
								<option value="08">8</option>
								<option value="09">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
					        </select>  

					        <select class=" combo" id="mes" name="mes">
					            <option value="01">Enero</option>
								<option value="02">Febrero</option>
								<option value="03">Marzo</option>
								<option value="04">Abril</option>
								<option value="05">Mayo</option>
								<option value="06">Junio</option>
								<option value="07">Julio</option>
								<option value="08">Agosto</option>
								<option value="09">Septiembre</option>
								<option value="10">Octubre</option>
								<option value="11">Noviembre</option>
								<option value="12">Diciembre</option>
					        </select>

					        <select class=" combo" id="año" name="año">
								<option value="2002">2002</option>
								<option value="2003">2003</option>
								<option value="2004">2004</option>
								<option value="2005">2005</option>
								<option value="2006">2006</option>
								<option value="2007">2007</option>
								<option value="2008">2008</option>
								<option value="2009">2009</option>
								<option value="2010">2010</option>
								<option value="2011">2011</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
					        </select>
				    </div>
				    
				    <div class="form-group"> <!-- Zip Code-->
				        <label for="codigop" class="control-label">Codigo Postal</label>
				        <input required type="text" class="form-control" id="codigopr" name="codigop" placeholder="#####">
				    </div>        
				    
				    <div class="form-group"> <!-- Submit Button -->
				        <button type="submit" class="btn  www">Crear Cuenta</button>
				        <a href="login.php" class="ww">Iniciar sesion</a>
				    </div>     
				    
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
	<script type="text/javascript" src="validar.js"></script>
</body>
</html>
