
function validar() {

	var nombre,apellidop,apellidom,email,pass,codigop,expresion;
	nombre=document.getElementById("nombrer").value;
	apellidop=document.getElementById("apellidopr").value;
	apellidom=document.getElementById("apellidomr").value;
	email=document.getElementById("emailr").value;
	pass=document.getElementById("passr").value;
	tel=document.getElementById("telr").value;
	codigop=document.getElementById("codigopr").value;

	expresion = /\w+@\w+\.+[a-z]/;

	if( nombre ==="" || apellidop ==="" || apellidom ==="" 
		|| email ==="" || pass ==="" || tel==="" || codigop ==="" ){

			alert("Todos los campos son abligatorios");
			return false;
	}
	else if(nombre.length>50){
		alert("El Nombre es muy largo");
			return false;
	}else if(apellidop.length>50){
		alert("El Apellido Paterno es muy largo");
			return false;
	}else if(apellidom.length>50){
		alert("El nombre es muy largo");
			return false;
	}else if(email.length>100){
		alert("El Apellido Materno es muy largo");
			return false;
	}else if(!expresion.test(email)){
		alert("El Correo es incorrecto");
			return false;
	}else if(pass.length<8){
		alert("La Contraseña es muy corta");
			return false;
	}else if(pass.length>40){
		alert("La Contraseña es muy larga");
			return false;
	}else if(tel.length>10){
		alert("El Telefono es muy Largo");
			return false;
	}else if(tel.length<10){
		alert("El Telefono es muy Corto");
			return false;
	}else if(isNaN(tel)){
		alert("Telefono no Valido");
			return false;
	}else if(codigop.length>5){
		alert("El Codigo Postal es muy Largo");
			return false;
	}else if(codigop.length<5){
		alert("El Codigo Postal es muy Corto");
			return false;
	}else if(isNaN(codigop)){
		alert("El Codigo Postal no es Valido");
			return false;
	}


}