<?php 
	include 'DB.php';
    session_start();

    $agregar=$_POST["agregar"];

    $consulta="SELECT * FROM producto WHERE idProducto='$agregar'";
    $result = $conn -> query($consulta);
    $filas = $result -> fetch_array();

    /*$img="SELECT img FROM producto WHERE idProducto='$id'";
        $resultado4 = $conn -> query($img);
        $fila4 = $resultado4 -> fetch_array();*/

    $id=$filas[0];
    $nombre=$filas[1];
    $descripcion=$filas[2];
    $precio=$filas[3];
    $tamanio=$filas[4];
    $cantidad=$filas[5];
    $img=$filas[6];

    $id=$_SESSION["id"];
    $nombre=$_SESSION["nombre"];
    $descripcion=$_SESSION["descipcion"];
    $precio=$_SESSION["precio"];
    $tamanio=$_SESSION["tamanio"];
    $cantidad=$_SESSION["cantidad"];
    $img=$_SESSION["img"];
	


	
    echo $id;
    echo "<br>";
    echo $nombre;
    echo "<br>";
    echo $descripcion;
    echo "<br>";
    echo $cantidad;
    echo "<br>";
    echo $img;
    echo "<br>";
    echo $tamanio;
    echo "<br>";
    echo $precio;
    echo "<br>";

		/*$name = $_POST["nombre"];
        $apellidop = $_POST["apellidop"];
        $apellidom = $_POST["apellidom"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $dia = $_POST["dia"];
        $mes = $_POST["mes"];
        $año = $_POST["año"];
        $codigop = $_POST["codigop"];
        $fecha = $dia.$mes.$año;

        echo $name;
        	echo "<br>";
        echo $apellidop;
        	echo "<br>";
        echo $apellidom;
        	echo "<br>";
        echo $email;
        	echo "<br>";
        echo $password;
        	echo "<br>";
        echo $dia;
        	echo "<br>";
        echo $mes;
        	echo "<br>";
        echo $año;
        	echo "<br>";
        echo $codigop;
        	echo "<br>";
        echo $fecha;*/
 ?>