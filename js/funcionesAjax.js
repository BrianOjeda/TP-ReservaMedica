
//function MostrarError()
//{
//	var funcionAjax=$.ajax({url:"nexoNoExiste.php",type:"post",data:{queHacer:"MostrarTexto"}});
//	funcionAjax.done(function(retorno){
//		$("#principal").html(retorno);
//		$("#informe").html("Correcto!!!");
//	});
//	funcionAjax.fail(function(retorno){
//			$("#principal").html("error :(");
//		$("#informe").html(retorno.responseText);		
//	});
//	funcionAjax.always(function(retorno){
//		//alert("siempre "+retorno.statusText);
//	});
//}
//function MostrarSinParametros()
//{
//	var funcionAjax=$.ajax({url:"nexoTexto.php"});
//	funcionAjax.done(function(retorno){
//	$("#principal").html(retorno);
//		$("#informe").html("Correcto!!");
//	});
//	funcionAjax.fail(function(retorno){
//		$("#principal").html(":(");
//		$("#informe").html(retorno.responseText);	
//	});
//	funcionAjax.always(function(retorno){
//		alert("siempre "+retorno.statusText);

//	});
//}

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

function AgregarJudicialSemanal(queMostrar)
{
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"AgregarExcel",archivo:queMostrar}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		$("#informe").html("<img src='imagenes/data_entry.png' />");	
		alert("Archivo Agregado :*");
	});
	funcionAjax.fail(function(retorno){
		$("#principal").html("Error!! :(");
		$("#informe").html("<img src='imagenes/data_entry.png' />");	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}
//function MostarLogin()
//{
		//alert(queMostrar);
//	var funcionAjax=$.ajax({
//		url:"nexo.php",
//		type:"post",
//		data:{queHacer:"MostarLogin"}
//	});
//	funcionAjax.done(function(retorno){
//		$("#principal").html(retorno);
		//$("#informe").html("Correcto Form login!!!");	
//	});
//	funcionAjax.fail(function(retorno){
//		$("#botonesABM").html(":(");
		//$("#informe").html(retorno.responseText);	
//	});
//	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

//	});
//}