<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
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
												<th>Nombre</th><th>Apellido</th><th>Turnos disponibles</th><th>Reservar</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											for ($i=0; $i < 5; $i++) { 

												# code...
												echo"<tr >
												<td>Roberto</td>
												<td>Te Elijo</td>
												<td><select name='turnos'>

							           			 <option >turno1</option>
							           			 <option >turno2</option>
							           			 <option>turno3</option></select></td>";
							           			 echo "<td><input type='button' value='Reservar' onclick='";
							           			 echo 'Mostrar("altaReserva")';
							           			 echo "' ></td></tr>";
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