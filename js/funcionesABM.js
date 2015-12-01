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


function GuardarEspecialidad()
{		
		var especialidad=$("#especialidad").val();
	

		var funcionAjax=$.ajax({
		url:"nexoABM.php",
		type:"post",
		data:{
			queHacer:"GuardarEspecialidad",
			especialidad:especialidad,
		}
	});
	funcionAjax.done(function(retorno){
		alert(retorno);
		Mostrar('altaEspecialidad');
	});
	funcionAjax.fail(function(retorno){	
		alert("Error al ingresar el registro");
	});	

}
function GuardarPersona()
{		
		var nombre=$("#nombre").val();
		var apellido=$("#apellido").val();
		var direccion=$("#direccion").val();
		var telefono=$("#telefono").val();
		var dni=$("#dni").val();
		var foto = new FormData();

		jQuery.each($('#foto')[0].files, function(i, foto) {
		    foto.append('foto', foto);
		});
		//alert(foto);
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
			foto:foto,
		
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
function GuardarMedico()
{		
		var especialidad=$("#especialidad").val();
		var persona=$("#persona").val();
		var funcionAjax=$.ajax({
		url:"nexoABM.php",
		type:"post",
		data:{
			queHacer:"GuardarMedico",
			especialidad:especialidad,
			persona:persona
		}
	});
	funcionAjax.done(function(retorno){
		alert(retorno);
		Mostrar('altaMedico');
	});
	funcionAjax.fail(function(retorno){	
		alert("Error al ingresar el registro");
	});	

}
function GuardarTurno()
{		
		var medico=$("#medico").val();
		var date=$("#date").val();
		var hora=$("#hora").val();

		alert(medico);
		var funcionAjax=$.ajax({
		url:"nexoABM.php",
		type:"post",
		data:{
			queHacer:"GuardarTurno",
			medico:medico,
			date:date,
			hora:hora
		}
	});
	funcionAjax.done(function(retorno){
		alert(retorno);
		Mostrar('altaTurno');
	});
	funcionAjax.fail(function(retorno){	
		alert("Error al ingresar el registro");
	});	
}
	function GuardarReserva()
	{		
		var obra=$("#obra").val();

		var sexo=$('input:radio[name=sexo]:checked').val();
		var titular=$('input:radio[name=titular]:checked').val();

		var fractura=$('#fractura').is(':checked');
		var acb=$('#acb').is(':checked');
		var trastorno=$('#trastorno').is(':checked');

		var edad=$("#edad").val()
		var hospital=$('#hospital').is(':checked');
		var otroHospital=$('#otroHospital').is(':checked');
		var historia=$("#historia").val()
		var turno=$("#turno").val()

		//alert("obraSocial:"+obra+"--Sexo:"+sexo+"--titular:"+titular+"--fractura:"+fractura+"--abc:"+abc+"---trastorno:"+trastorno+"---edad:"+edad+"--hospital:"+hospital+"---otroHospital:"+otroHospital+"---historia:"+historia+"--turno:"+turno);

	


		var funcionAjax=$.ajax({
		url:"nexoABM.php",
		type:"post",
		data:{
			queHacer:"GuardarReserva",
			obra:obra,
			sexo:sexo,
			titular:titular,
			fractura:fractura,
			acb:acb,
			trastorno:trastorno,
			edad:edad,
			hospital:hospital,
			otroHospital:otroHospital,
			historia:historia,
			turno:turno
		}
	});
	funcionAjax.done(function(retorno){
		alert(retorno);
		Mostrar('altaReserva');
	});
	funcionAjax.fail(function(retorno){	
		alert("Error al ingresar el registro");
	});	

}