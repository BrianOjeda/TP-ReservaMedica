<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<?php
	require_once("class/AccesoDatos.php");
	require_once("class/especialidad.php");
	require_once("class/medico.php");
	require_once("class/turno.php"); 

	$arrayMedico=medico::TraerTodosLosMedicos();
	$arrayTurno=turno::TraerTodosLosTurnos();
 ?>
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
 <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/funcionesAjax.js"></script>
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
					<div>
						<div>
							<div>
								<h4>Profesionales disponibles</h4>
								<h3>En el cuadro puede visualizar los profesionales con los turnos que tienen disponibles.</h3>
								
							<div class="featured">
								
								
								<table  class="table table-hover table-responsive">
			
										<thead>
											<tr>
												<th >Reserva tu turno</th>
											</tr>
											<tr>
												<th>Nombre</th><th>Apellido</th><th>Turnos disponibles</th><th>Foto</th><th>Reservar</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											foreach ($arrayMedico as $medico) {

											echo"	<tr>
												<td>$medico->nombre</td>
												<td>$medico->apellido</td>";
												foreach ($arrayTurno as $turno) {
													if($turno->idMedico==$medico->idMedico)
													{
														echo "<td><select name='turnos'>

									           			 <option value='$turno->id'>$turno->idHora</option>";
									  
													}
												}

												echo"	</tr>";
											}
											
										
											 ?>
										</tbody>
								</table>
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