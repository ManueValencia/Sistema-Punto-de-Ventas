<?php 
include 'DB.php';
include_once 'prod.php';
    session_start();

    //$p = new Producto();

    $agregar=$_POST["agregar"];
    $idcli=$_SESSION['idcli'];
    $url=$GLOBALS['url'];

    $consulta="SELECT * FROM producto WHERE idProducto='$agregar'";
    $result = $conn -> query($consulta);
    $filas = $result -> fetch_array();

    /*$p->id=$filas[0];
    $p->nombre=$filas[1];
    $p->descripcion=$filas[2];
    $p->precio=$filas[3];
    $p->tamanio=$filas[4];
    $p->cantidad=$filas[5];
    $p->img=$filas[6];*/

    $id=$filas[0];
    $nombre=$filas[1];
    $descripcion=$filas[2];
    $precio=$filas[3];
    $tamanio=$filas[4];
    $cantidad=$filas[5];
    $img=$filas[6];
    $_SESSION["Total"]+=$filas[3];
echo $agregar;
echo $idcli;

    $insert="INSERT INTO carrito(nombre,descripcion,precio,tamanio,cantidad,img,idProducto,idCliente) 
                        VALUES('$nombre','$descripcion','$precio','$tamanio','$cantidad','$img','$agregar','$idcli')";

    $result =mysqli_query($conn,$insert);



	/*if (isset($_SESSION["carrito"])) {
        
		$carrito=$_SESSION["carrito"];
	}else{
		$carrito=array();
	}
    $_SESSION['${"id".$i}']=$id;
    $_SESSION['${"nombre".$i}']=$nombre;
    $_SESSION['${"descripcion".$i}']=$descripcion;
    $_SESSION['${"precio".$i}']=$precio;
    $_SESSION['${"tamanio".$i}']=$tamanio;
    $_SESSION['${"cantidad".$i}']=$cantidad;
    $_SESSION['${"img".$i}']=$img;

	array_push($carrito, $p);

	$_SESSION["carrito"] = $carrito;*/

    //echo $_GLOBALS['url'];

	//header("location:".$_SERVER['HTTP_REFERER']);
    header("location:carrito.php");


 ?>