 


 $("#login-button").click(function(event){
		 event.preventDefault();
	 
	 $('form').fadeOut(500);
	 $('.wrapper').addClass('form-success');
	validarLogin();
});

 function validarLogin()
{
		var varUsuario=$("#correo").val();
		var varClave=$("#clave").val();

	var funcionAjax=$.ajax({
		url:"php/ValidarUsuario.php",
		type:"post",
		data:{
			usuario:varUsuario,
			clave:varClave
		}
	});

	funcionAjax.done(function(respuesta){

        		if(respuesta=="correcto")
        		{
					//$("#MensajeError").val("");
					window.location.href="http://localhost/ReservaMedica/home.php"; 			// vamos al menu
					alert("hola");
        		}
        		else
        		{
        			window.location.href = "http://localhost/ReservaMedica/Index.php";
        			alert(respuesta);
        		}
		});
	funcionAjax.fail(function(retorno){	
		//$("#informe").html(retorno.responseText);	
		alert("Error al ingresar el registro");
	});	
}