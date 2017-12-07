<?php
	include_once 'DB.php'; 
    session_start();

    $idCli=$_SESSION['idcli'];

     $sSQL="DELETE FROM carrito Where idCliente='$idCli'";
		mysqli_query($conn,$sSQL);

    session_unset();
    session_destroy();
   
    header("location:login.php");