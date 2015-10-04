function BorrarCD(idParametro)
{
	//alert(idParametro);
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

function GuardarHDC()
{		
		alert($('select[name=fechas]').val());
		var aoi=$("#aoi").val();
		var incendio=$("#aoi-incendio").val();
		var lesiones=$("#aoi-lesiones").val();
		var penitenciario=$("#agregarPenitenciario").val();
		var autoagresion=$("#autoagresion").val();
		var suicidio=$("#tentativaSuicidio").val();
		var tomaRehenes=$("#tomaRehenes").val();
		var unidad=$('select[name=unidades]').val();
		var mes=$('select[name=fechas]').val();

		var funcionAjax=$.ajax({
		url:"nexoABM.php",
		type:"post",
		data:{
			queHacer:"GuardarHDC",
			aoi:aoi,
			incendio:incendio,
			lesiones:lesiones,
			penitenciario:penitenciario,
			autoagresion:autoagresion,
			suicidio:suicidio,
			tomaRehenes:tomaRehenes,
			unidad:unidad,
			mes:mes	
		}
	});
	funcionAjax.done(function(retorno){
		//	Mostrar("MostrarGrilla");
		alert(retorno);
		//alert("El registro se ingreso correctamente");
		//alert("Mi retorno"+retorno);
		//$("#informe").html("cantidad de agregados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		//$("#informe").html(retorno.responseText);	
		alert("Error al ingresar el registro");
	});	
}