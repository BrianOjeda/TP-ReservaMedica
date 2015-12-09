//entra en el ready cuando se ha cargado todo el dom
$(document).ready(function(){
     //evento change del input file
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
               //alert(msg);
    		        var strIndex = msg.indexOf('Error');
                    if(strIndex == -1) {
                        //string no encontrado
        		        //$("#mensaje").html(msg + "<br><strong>Persona insertada correctamente!</strong>");
        		        //$("#mensaje").show();
                        if(msg=="existe")
                        {
                            alert("ya existe esa persona con ese dni");
                        }
                        else
                        {
                            $("#idPersona").val(msg);
                            alert("Persona insertada correctamente");
                            document.getElementById("nombre").value="";
                            document.getElementById("apellido").value="";
                            document.getElementById("telefono").value="";
                            document.getElementById("direccion").value="";
                            document.getElementById("dni").value="";
                            document.getElementById("fichero").value="";
                            $("#principal").html("<h3>Esta registrado</h3>");
                            $("#noEsta").html("<h3></h3>");
                        }
                        
        				//setTimeout(function() {
        				  //  $('#mensaje').fadeOut('fast');
        				   // window.location.href="menu.php";
        				    
        				//}, 2500);
                    }
                   else
                    {
                        alert(msg);
                    }
    			});//fin done
    	    }
    });
});

function cargar(){
    var files = $("#fichero").get(0).files; // $("#fichero") slector por id de jquery  
    var envio = new FormData();
    for (var i = 0; i < files.length; i++) {
    envio.append("fichero0", files[i]);
    }
    var promise = $.ajax
            ({
            type: "POST",
            url: "php/ajaxFoto.php",
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
                        $('#imagen').attr("src", "php/FotosTemp/" + files[0].name);
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