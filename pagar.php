<?php 
include_once 'DB.php'; 
    session_start();

    $idCli=$_SESSION['idcli'];

     $sSQL="DELETE FROM carrito Where idCliente='$idCli'";
	mysqli_query($conn,$sSQL);
	$_SESSION['Total']=0;
   
    echo '<script type="text/javascript">alert("Compra realizada con exito");
				window.location.href="index.php";</script>';



 ?>