function BorrarCD(idParametro)
{
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarCD",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		Mostrar("MostrarGrilla");
		$("#informe").html("cantidad de eliminados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}

function EditarCD(idParametro)
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerCD",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		var cd =JSON.parse(retorno);	
		$("#idCD").val(cd.id);
		$("#cantante").val(cd.cantante);
		$("#titulo").val(cd.titulo);
		$("#anio").val(cd.año);
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
	Mostrar("MostrarFormAlta");
}

function GuardarPersona()
{		
		var nombre=$("#nombre").val();
		var apellido=$("#apellido").val();
		var direccion=$("#direccion").val();
		var telefono=$("#telefono").val();
		var dni=$("#dni").val();
	

		var funcionAjax=$.ajax({
		url:"nexoABM.php",
		type:"post",
		data:{
			queHacer:"GuardarPersona",
			nombre:nombre,
			apellido:apellido,
			direccion:direccion,
			telefono:telefono,
			dni:dni,
		}
	});
	funcionAjax.done(function(retorno){
		alert(retorno);
		Mostrar('altaPersona');
	});
	funcionAjax.fail(function(retorno){	
		alert("Error al ingresar el registro");
	});	
}