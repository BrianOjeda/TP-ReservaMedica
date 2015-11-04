<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
 <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/funcionesAjax.js"></script>
<script type="text/javascript" src="js/funcionesABM.js"></script>
<html>
<head>
	<meta charset="UTF-8">
	<title>Reserva Medica</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body onload="botonesPrincipales()">
	<div class="background">
		<div class="page">
			<a href="index.html" id="logo">Pediatria</a>
			<div id="botones" class="sidebar">
				
			</div>
			<div class="body">
				<div class="programs">
					<div id="principal">
						<div>
							<div>
								<h4>Alta de registros</h4>
								<h3>Seleccione el boton correspondiente para ingresar un registro nuevo.</h3>
								
							<div class="featured">
								
							   <a onclick="Mostrar('altaPersona')"class="list-group-item  list-group-item list-group-item-success">
							 	  <h4 class="list-group-item-heading">Agregar personal</h4>
							  </a>						
							  <a onclick="Mostrar('altaMedico')" class="list-group-item  list-group-item list-group-item-success">
								 <h4 class="list-group-item-heading">Agregar  medico</h4>
							  </a>
							    <a onclick="Mostrar('altaEspecialidad')" class="list-group-item  list-group-item list-group-item-success">
								 <h4 class="list-group-item-heading">Agregar  especialidad</h4>
							  </a>
							    <a onclick="Mostrar('altaTurno')" class="list-group-item  list-group-item list-group-item-success">
								 <h4 class="list-group-item-heading">Agregar  turno</h4>
							  </a>
							</div>
						
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
				
			</div>
	</div>
</body>
</html>