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
	document.getElementById("fichero").addEventListener('change', cargar, false);
    
    $("#mensaje").hide();
    //Validacion del formulario
    $("#frmAltaPersona").validate({
    	event: "blur",
        rules: 
        {
            'nombre': "required",
            'apellido': "required",
            'direccion': "required",
            'telefono':  "required",
            'dni':  "required",
            'fichero': "required"
        },
    	messages: 
        {
            'nombre': "<span class='error1'>Ingresa tu nombre</span>",
            'apellido': "<span class='error1'>Ingresa tu apellido</span>",
            'direccion': "<span class='error1'>Ingresa tu dirección</span>",
            'telefono': "<span class='error1'>Ingresa tu telefono</span>", 
            'dni': "<span class='error1'ingresa tu dni</span>",
            'fichero': "<span class='error1'>Selecciona una imagen </span>"
            
        },
    	debug: true,
        errorElement: "label",
    	submitHandler: function(form){
    	    var envio = new FormData();
    	    var files = $("#fichero").get(0).files; // $("#fichero") slector por id de jquery 
            envio.append("nombre", $("#nombre").val());
            envio.append("apellido", $("#apellido").val());
            envio.append("telefono", $("#telefono").val());
            envio.append("direccion", $("#direccion").val());
            envio.append("dni", $("#dni").val());
   
            for (var i = 0; i < files.length; i++) {
            envio.append("fichero0", files[i]);
            }
           // alert("antes de ajax");
    		var miAjax = $.ajax({
    			type: "POST",
    			url:"php/GuardarUsuario.php",
    			contentType: false,
    		    processData: false,
    			data: envio,
    		});
    		miAjax.done(function(msg){
               alert(msg);
    		        var strIndex = msg.indexOf('Error');
                    if(strIndex == -1) {
                
                        alert("Persona insertada correctamente");
    					//$("#registrado").html("<h3>Ya esta registrado</h3>");
    					$("#idPersona").val(punto);
       
                    }
                   else
                    {
                        alert(msg);
                    }
    			});//fin done
    	    }
		    });
		//});

}
function cargar(){
    var files = $("#fichero").get(0).files; // $("#fichero") slector por id de jquery  
    var envio = new FormData();
    for (var i = 0; i < files.length; i++) {
    envio.append("fichero0", files[i]);
    }
    var promise = $.ajax
            ({
            type: "POST",
            url: "ajaxFoto.php",
            contentType: false,
    		processData: false,
            data: envio,
            cache: false,
            dataType: "text"
          });// fin del ajax
            
    // la funcion Ajax me devuelve una promesa de javascript, algo que va a hacerse. Cuando el servidor responde y si la respuesta del servidor es exitosa ingresa al done y ejecuta la función que se le pasa
    promise.done(function (dato){ 
                    $('#error').hide();
                    console.log(dato);
                    var strIndex = dato.indexOf('Error');
                    if(strIndex == -1) {
                        //string no encontrado
                        $('#imagen').attr("src", "FotosTemp/" + files[0].name);
                         $('#error').html("");
                    } else {
                        //string encontrado
                        $('#error').html(dato);
                        $('#error').show();
                        $('#imagen').attr("src", "");
                        $('#fichero').val("");
                    }
                       
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

		var persona=$("#idPersona").val()

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
			turno:turno,
			persona:persona
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