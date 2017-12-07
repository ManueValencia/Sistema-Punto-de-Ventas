
function validarlog() {

	var email,pass,expresion;
	email=document.getElementById("emaill").value;
	pass=document.getElementById("passl").value;

	expresion = /\w+@\w+\.+[a-z]/;

	if( email ==="" || pass ==="" ){
		alert("Todos los campos son abligatorios");
		return false;
	}else if(!expresion.test(email)){
		alert("El Correo es incorrecto");
			return false;
	}


}