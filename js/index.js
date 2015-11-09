
 	$("#login-button").click(function(event)
 	{
		 event.preventDefault();
	 
		 $('form').fadeOut(500);
		 $('.wrapper').addClass('form-success');
		validarLogin();
	}
	);
 
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
				//alert(respuesta);
        		if(respuesta=="correcto")
        		{
					//$("#MensajeError").val("");
					window.location.href="index.php"; 			// vamos al menu
					alert("Usuario correcto, bienvenido");
        		}
        		else
        		{
        			alert(respuesta);
        			window.location.href = "login.php";
        			
        		}
		});
	funcionAjax.fail(function(retorno){	
		//$("#informe").html(retorno.responseText);	
		alert("Error :(");
	});	
}
