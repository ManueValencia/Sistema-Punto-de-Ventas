<?php 
	include 'DB.php';
	session_start();
	$email=$_POST['email'];
	$pass=$_POST['pass'];


	$consulta="SELECT * FROM cliente WHERE email='$email' and pass='$pass'";
	$result=mysqli_query($conn,$consulta);
	$filas=mysqli_num_rows($result);


	$email_mysql="SELECT email FROM cliente WHERE email='$email' and pass='$pass'";
	$resultado = $conn -> query($email_mysql);
	$fila = $resultado -> fetch_array();

	$pass_mysql="SELECT pass FROM cliente WHERE email='$email' and pass='$pass'";
	$resultado2 = $conn -> query($pass_mysql);
	$fila2 = $resultado2 -> fetch_array();

	$id_mysql="SELECT idCliente FROM cliente WHERE email='$email' and pass='$pass'";
	$resultado3 = $conn -> query($id_mysql);
	$fila3 = $resultado3 -> fetch_array();

	$nombre_mysql="SELECT nombre FROM cliente WHERE email='$email' and pass='$pass'";
	$resultado4 = $conn -> query($nombre_mysql);
	$fila4 = $resultado4 -> fetch_array();

	if($fila>0){
		$_SESSION['email']=$fila["email"];
		$_SESSION['nombre']=$fila4["nombre"];
		$_SESSION['idcli']=$fila3["idCliente"];
		$_SESSION['Total']=0;
		header("location:index.php");
	}else{
		echo '<script type="text/javascript">alert("Correo o Contraseña invalida");
				window.location.href="login.php";</script>';
	}
	mysqli_free_result($result);
	mysqli_close($conn);





 ?>