<?php
	session_start();
	include_once 'DB.php'; 
	if (isset($_SESSION['email'])){

		$GLOBALS['url'] = 'cat.php';
?>
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

	
	<header>
		<div class="logoHeder">
			<!--logo-->
			<a href="index.php"><img src="img/logo.png"></a>
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

	<section >
		

		<?php

			if ( isset($_POST['pastel']) ){
			$consulta="SELECT * FROM producto WHERE idTipo='1'";
			$producto=mysqli_query($conn,$consulta);
			$row=mysqli_num_rows($producto);

			if($row == 0 ){
				echo "<h6 class='titDiv'>Pronto estará la sección disponible con todos nuestros productos.</h6>"; 
			}else{
				echo "<div class='esp'></div>
						<h3 class='titDiv'>Pasteles</h3>
						<div class='esp'></div>";
				while( $row=mysqli_fetch_assoc($producto)){
		?>
				<div class="producto">

					<form action="proceso.php" method="POST">
						<div class="seccion">
							<img class="imgprod" name="img" value="" src="img/<?php echo $row['img'] ?>">
						</div>
						<div class="seccion">
							<h3 value="" name="nombre" id="tit"><?php echo $row['nombre'] ?></h3>
							<p value="" name="id">clave de Producto: <?php echo $row['idProducto'] ?>.</p>
						</div>
						<div class="seccion">
							<p class="desc" value="" name="descripcion"> 
								<?php echo $row['descripcion'] ?>
							</p>

						</div>
						<div class="seccion">
							<p value="" name="cantidad">Cant: <?php echo $row['cantidad'] ?> pza.</p>
							<p value="" name="precio">Precio: $ <?php echo $row['precio'] ?>.</p>
							<p value="" name="tamanio">Tamaño: <?php echo $row['tamanio'] ?> .</p>
						</div>
						<div class="seccion">
							<button type="submit" class="btncar" name="agregar" value="<?php echo $row['idProducto'] ?>">Agregar al carrito</button>
						</div>
					</form>
					
				</div>
				<div class="esp"></div>
		<?php
			}
		}				

		}elseif ( isset($_POST['galleta']) ){
			$consulta="SELECT * FROM producto WHERE idTipo='3'";
			$producto=mysqli_query($conn,$consulta);
			$row=mysqli_num_rows($producto);

			if($row == 0 ){
				echo "<h6 class='titDiv'>Pronto estará la sección disponible con todos nuestros productos.</h6>"; 
			}else{
				echo "<div class='esp'></div>
						<h3 class='titDiv'>Galletas</h3>
						<div class='esp'></div>";
				while( $row=mysqli_fetch_assoc($producto)){
		?>
				<div class="producto">
					<form action="proceso.php" method="POST">
						<div class="seccion">
							<img class="imgprod" name="img" value="" src="img/<?php echo $row['img'] ?>">
						</div>
						<div class="seccion">
							<h3 value="" name="nombre" id="tit"><?php echo $row['nombre'] ?></h3>
							<p value="" name="id">clave de Producto: <?php echo $row['idProducto'] ?>.</p>
						</div>
						<div class="seccion">
							<p class="desc" value="" name="descripcion"> 
								<?php echo $row['descripcion'] ?>
							</p>
						</div>
						<div class="seccion">
							<p value="" name="cantidad">Cant: <?php echo $row['cantidad'] ?> pza.</p>
							<p value="" name="precio">Precio: $ <?php echo $row['precio'] ?>.</p>
							<p value="" name="tamanio">Tamaño: <?php echo $row['tamanio'] ?> .</p>
						</div>
						<div class="seccion">
							<button type="submit" class="btncar" name="agregar" value="<?php echo $row['idProducto'] ?>">Agregar al carrito</button>
						</div>
					</form>
					
				</div>
				<div class="esp"></div>
				<?php
			}
		}
		}elseif ( isset($_POST['tarta']) ){
			$consulta="SELECT * FROM producto WHERE idTipo='2'";
			$producto=mysqli_query($conn,$consulta);
			$row=mysqli_num_rows($producto);
			if($row == 0 ){
				echo "<h6 class='titDiv'>Pronto estará la sección disponible con todos nuestros productos.</h6>"; 
			}else{
				echo "<div class='esp'></div>
						<h3 class='titDiv'>Tastas</h3>
						<div class='esp'></div>";
				while( $row=mysqli_fetch_assoc($producto)){
		?>
				<div class="producto">
					<form action="proceso.php" method="POST">
						<div class="seccion">
							<img class="imgprod" name="img" value="" src="img/<?php echo $row['img'] ?>">
						</div>
						<div class="seccion">
							<h3 value="" name="nombre" id="tit"><?php echo $row['nombre'] ?></h3>
							<p value="" name="id">clave de Producto: <?php echo $row['idProducto'] ?>.</p>
						</div>
						<div class="seccion">
							<p class="desc" value="" name="descripcion"> 
								<?php echo $row['descripcion'] ?>
							</p>
						</div>
						<div class="seccion">
							<p value="" name="cantidad">Cant: <?php echo $row['cantidad'] ?> pza.</p>
							<p value="" name="precio">Precio: $ <?php echo $row['precio'] ?>.</p>
							<p value="" name="tamanio">Tamaño: <?php echo $row['tamanio'] ?> .</p>
						</div>
						<div class="seccion">
							<button type="submit" class="btncar" name="agregar" value="<?php echo $row['idProducto'] ?>">Agregar al carrito</button>
						</div>
					</form>
				</div>
				<div class="esp"></div>
				<?php
			}
		}
	}		
		?>			
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
<?php 
}
else{
		 header("Location: login.php"); }
?>


