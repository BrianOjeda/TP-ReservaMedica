
function botonesPrincipales()
{
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexoPartes.php",
		type:"post",
		data:{queHacer:"botonesPrincipales"}
	});
	funcionAjax.done(function(retorno){
		$("#botones").html(retorno);
		//alert(retorno);
		//$("#informe").html("<img src='imagenes/data_entry.png' />");	
	});
	funcionAjax.fail(function(retorno){
		$("#botones").html("Error!! :(");
		//$("#informe").html("<img src='imagenes/data_entry.png' />");	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}
function Mostrar(queMostrar)
{
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexoPartes.php",
		type:"post",
		data:{queHacer:queMostrar}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		//alert(retorno);
		//$("#informe").html("<img src='imagenes/data_entry.png' />");	
	});
	funcionAjax.fail(function(retorno){
		$("#principal").html("Error!! :(");
		//$("#informe").html("<img src='imagenes/data_entry.png' />");	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}
function Reserva(tur)
{
		//alert(queMostrar);
		
		var turno=tur;
		//alert(turno);
	var funcionAjax=$.ajax({
		url:"nexoPartes.php",
		type:"post",
		data:{
			  queHacer:"altaReserva"
				}
	});
	funcionAjax.done(function(retorno){
		//alert(retorno);
		$("#body").html(retorno);
		$("#turno").val(turno);
		//$("#cantante").val(cd.cantante);
		//$("#titulo").val(cd.titulo);
		//$("#anio").val(cd.año);
		//alert(retorno);
		//$("#informe").html("<img src='imagenes/data_entry.png' />");	
	});
	funcionAjax.fail(function(retorno){
		$("#page").html("Error!! :(");
		//$("#informe").html("<img src='imagenes/data_entry.png' />");	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}
function deslogear()
{	
	var funcionAjax=$.ajax({
		url:"php/deslogearUsuario.php",
		type:"post"		
	});
	funcionAjax.done(function(retorno){
		window.location.href = "index.php";
			
	});	
}
function buscarPersona()
{
		//alert(queMostrar);
	var dni=$("#dni").val();
	var funcionAjax=$.ajax({
		url:"nexoABM.php",
		type:"post",
		data:{queHacer:"buscarPersona",
			  dni:dni}
	});
	funcionAjax.done(function(retorno){
		$("#registrado").html(retorno);
			//alert(retorno);
		//$("#informe").html("<img src='imagenes/data_entry.png' />");	
	});
	funcionAjax.fail(function(retorno){
		$("#principal").html("Error!! :(");
		//$("#informe").html("<img src='imagenes/data_entry.png' />");	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}
//function validarObraSocial()
//{
 //if ($('#check').is(':checked')) 
   // {
     //                
      //	$('#ObraSocial').attr('disabled','-1')
    //}
    // else
    //{
                        
     //	$('#ObraSocial').removeAttr('disabled')

    //}
//}
//function Grilla(queMostrar)
//{
//	var funcionAjax=$.ajax({
//		url:"grilla.php",
//		type:"post",
//		data:{queHacer:queMostrar}
//	});
//	funcionAjax.done(function(retorno){
//		$("#principal").html(retorno);
//		$("#informe").html("<img src='imagenes/data_entry.png' />");	
//	});
//	funcionAjax.fail(function(retorno){
	//	$("#principal").html("Error!! :(");
	//	$("#informe").html("<img src='imagenes/data_entry.png' />");	
	//});
	//funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	//});
//}

