$(function(){

	$('#pagado').on('submit',function(e){
		e.preventDefault()
		
		swal('Registro','Completado','success').then(function(){
			window.location.href= "sesion.html"
		})
	})
})