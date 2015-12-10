<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<?php require_once "class/usuario.php";
session_start();  
?>
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
			<a href="index.php" id="logo">Pediatria</a>
			<div id="botones" class="sidebar">
				
			</div>
			<?php 

			if(isset($_SESSION['registrado']))
			{ 
				$tipo=usuario::traerTipoUsuario($_SESSION['registrado']);
				if("admin"==$tipo) {
					
				
				?>
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
							  </a>
							    <a onclick="Mostrar('grillaReserva')" class="list-group-item  list-group-item list-group-item-success">
								 <h4 class="list-group-item-heading">Mostrar todas las reservas disponibles</h4>
							  </a>
							   <a onclick="Mostrar('listaPersonas')" class="list-group-item  list-group-item list-group-item-success">
								 <h4 class="list-group-item-heading">Mostrar todas las personas</h4>
							  </a>
							</div>
						
						</div>
					</div>
				</div>
			</div>
			<?php }else{ echo "<h4 class='glyphicon'>No tiene permisos para entrar en esta pagina</h4>";} 
				}else	{
		echo "<h4 class='glyphicon'>No estas registrado, debe loguearse para ver el contenido de la pagina</h4>";
		}?>
			<div class="footer">
				
			</div>
	</div>
</body>
</html>