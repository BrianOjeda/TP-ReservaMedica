 
function Borrar(id)
{
	
	// var id = $("#idParaBorrar").val();
	$.ajax({
        type: 'DELETE',
        url: datos.urlLocal + id,
        success: function(data, textStatus, jqXHR){
            //console.log(textStatus);
			cargar();            
        },
        error: function(jqXHR, textStatus, errorThrown){
            console.log(errorThrown);
        }
    });

	// document.getElementById('idParaBorrar').value = id;
	// document.frmBorrar.submit();
}
function Modificar(id)
{
	
	document.getElementById('idParaModificar').value = id;
	document.frmModificar.submit();
}

function renderLista(data) {
	

	var lista = data == null ? [] : (data instanceof Array ? data : [data]);
	
	$('#listaPersonas tr:not(:first)').remove();
	
	$.each(lista, function(index, persona) {
				
		$('#listaPersonas').append("<tr><td><img  class='fotoGrilla' src='fotos/" + persona.foto + "' /></td><td>"+ persona.nombre +"</td><td>"+ persona.apellido + "</td><td>"+ persona.dni +"</td></tr>");				

	});
}

function cargar(){
	alert("carga");
		$.ajax({
	        type: "GET",
	        url: datos.urlLocal,
	        success: function(data, textStatus, jqXHR){
	            // console.log(data);
	            renderLista(data);
	        },
	        error: function(jqXHR, textStatus, errorThrown){
	            // console.log(errorThrown);
	            alert("No se pudo modificar " + errorThrown);
	        }
	    });
}
   		
