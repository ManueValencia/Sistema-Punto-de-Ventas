<?php

    include 'DB.php';
        $name = $_POST["nombre"];
        $apellidop = $_POST["apellidop"];
        $apellidom = $_POST["apellidom"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $tel=$_POST["tel"];
        $dia = $_POST["dia"];
        $mes = $_POST["mes"];
        $año = $_POST["año"];
        $codigop = $_POST["codigop"];
        $fecha = $año."-".$mes."-".$dia;






        $insert="INSERT INTO cliente(nombre,apellidop,apellidom,email,pass,tel,fecha,codigop) 
                    VALUES('$name','$apellidop','$apellidom','$email','$password','$tel','$fecha','$codigop')";

        $repetir=mysqli_query($conn, "select * from cliente where email = '$email'");

        if (mysqli_num_rows($repetir)>0) {
            echo '<script type="text/javascript">alert("Usuario ya registrado");
                    window.location.href="login.php";</script>';
            exit;
        }

        $result =mysqli_query($conn,$insert);
        if (!$result){
            echo 'no entro';
        }else{
            echo "entro";
            header("location:login.php");
        }