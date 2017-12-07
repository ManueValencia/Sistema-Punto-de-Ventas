<?php 
	include_once 'DB.php';
	   session_start();
	   $id=$_GET['id'];
	   $consulta="SELECT nombre,descripcion,cantidad,precio FROM producto WHERE idProducto='$id'";
	//----------------------------------------------------------------------------------------
		$nombreProducto="SELECT nombreProducto FROM producto WHERE idProducto='$id'";
		$resultado1 = $conn -> query($nombreProducto);
		$fila1 = $resultado1 -> fetch_array();

		$descripcion="SELECT descripcion FROM producto WHERE idProducto='$id'";
		$resultado2 = $conn -> query($descripcion);
		$fila2 = $resultado2 -> fetch_array();

		$precio="SELECT precio FROM producto WHERE idProducto='$id'";
		$resultado3 = $conn -> query($precio);
		$fila3 = $resultado3 -> fetch_array();

		$img="SELECT img FROM producto WHERE idProducto='$id'";
		$resultado4 = $conn -> query($img);
		$fila4 = $resultado4 -> fetch_array();
		
	//----------------------------------------------------------------------------------------

	   $result=mysqli_query($conn,$consulta);

		$filas=mysqli_num_rows($result);

		if($filas>0){
			echo "<span style='color: blue;'>Extracción de una fila - WHERE ...</span> <br><br>";

		$_SESSION['descripcion']=$fila2["nombreArtista"];
		$_SESSION['nombre']=$fila1["nombreDisco"];
		$_SESSION['precio']=$fila3["precio"];
		$_SESSION['img']=$fila4["img"];

		echo 'descripcion: '.$_SESSION["descripcion"];
		echo 'nombre: '.$_SESSION["nombre"];
		echo 'Precio: '.$_SESSION["precio"];
		header("location:carrito.php");
			
		}else{
			echo '<script> alert("nel");</script>';
		}
			

		mysqli_free_result($resultado1);
		mysqli_free_result($resultado2);
		mysqli_free_result($resultado3);
		mysqli_free_result($resultado4);
		mysqli_close($conn);
 ?>