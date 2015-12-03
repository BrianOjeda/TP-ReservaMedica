<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sala De Juegos Registro</title>

		<!--Estilos-->
			<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/animacion.css">
		<link rel="stylesheet" type="text/css" href="css/estilosValidacion.css">
		 <link rel="icon" href="http://www.octavio.com.ar/favicon.ico">
		<!--final de Estilos-->

		<!--Lógica-Programación-->

	    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	    <script src="js/jquery.form.js"></script>
	    <script src="js/jquery.validate.js"></script>
	    <script src="js/jsRegistroJquery.js"></script>
	    
       
	</head>
	<body style="zoom: 0.8;">
	
	<div id="header"><a href="index.php" class="btn btn-danger">inicio</a></div>
		<div class="CajaInicio animated bounceInRight">
			<h3>Registro en la sala</h3>
			
    		<form id="frmRegistro" class="form-ingreso " >
    
            <fieldset>
        		<legend>Registrate y juga!</legend>
        		<p>Nombre<input class="form-control" name="nombre" type="text" maxlength="50" value="maria" id="nombre" > </p>
        		<p>Apellido<input class="form-control" name="apellido" type="text" maxlength="50" value="quispe" id="apellido"></p>
        		<p>Legajo<input class="form-control" name="legajo" type="text" value="123123" id="legajo" ></p>
        		<p>Direccion<input class="form-control" name="dire" type="text" maxlength="50" value="lalala 1320" id="dire" ></p>
        		<p>E-mail (sera tu nombre de usuario)<input class="form-control" name="email" type="text" value="quispe@ymail.com" id="email" maxlength="50"></p>
        		<p>Fecha de nacimiento<input class="form-control" name="fecha" type="date" value="1999-07-29" id="fecha"></p>
        		<p>Password<input class="form-control" name="pass" type="password" value="qweqwe" id="pass"></p>
        		<p>Confirmar Password<input class="form-control" name="pass2" type="password" value="qweqwe" id="pass2"></p>
        		<p>Foto<input class="form-control btn btn-info"  name="fichero" type="file" id="fichero"></p>
        		<span id="error" class='error1' style="display: none;"></span>
                <p>Preview</p><img  name="imagen" id="imagen" src="" alt="Imagen aqui" width="280" height="250">
                <p><input class="btn btn-info" type="submit" value="Registrarse" name="btnRegistro"></p
    	    </fieldset>
    	   
    		</form>
    		<hr>
    		 <div id="mensaje" style="display: none;">&nbsp;</div>
		</div>
		</body >
		</html>
