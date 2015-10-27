
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

