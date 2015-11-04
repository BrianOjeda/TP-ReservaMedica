<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<?php
	require_once("class/AccesoDatos.php");
	require_once("class/especialidad.php");
	require_once("class/medico.php");
	require_once("class/turno.php"); 
	require_once("class/hora.php"); 

	$arrayMedico=medico::TraerTodosLosMedicos();
	$arrayTurno=turno::TraerTodosLosTurnos();
 ?>
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
 <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/funcionesAjax.js"></script>
<script type="text/javascript" src="js/funcionesABM.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="css/animacion.css">
<html>
<head>
	<meta charset="UTF-8">
	<title>Reserva Medica</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body onload="botonesPrincipales()">
	<div class="background">
		<div class="page">
			<a href="home.html" id="logo">Pediatria</a>
			<div id="botones" class="sidebar">
				
			</div>
			<div class="body">
				<div class="programs">
					<div>
						<div>
							<div>
								<h4>Profesionales disponibles</h4>
								<h3>En el cuadro puede visualizar los profesionales con los turnos que tienen disponibles.</h3>
								
							<div class="featured" style="overflow:scroll;">
								
								
								<table  class='table table-hover table-responsive' style="color:green;">
			
										<thead>
											<tr>
												<th >Reserva tu turno</th>
											</tr>
											<tr>
												<th>Nombre</th><th>Apellido</th><th>Turnos disponibles</th><th>Foto</th><th>Reservar</th>
											</tr>
										</thead>
										<tbody style="">
											<?php 
											foreach ($arrayMedico as $medico)
											 {
											 	$idTurno=0;
											 	$idHora=0;
											 	if($medico->especialidad=="pediatria" )
											 	{
														echo"
															<tr>
																<td>$medico->nombre</td>
																<td>$medico->apellido</td>
																<td>
																<select name='turnos'>";
																foreach ($arrayTurno as $turno)
																 {
																	if($turno->idMedico==$medico->id )
																	{
																		$hora=hora::TraerUnaHoraPorID($turno->idHora);
																		$idTurno=$turno->id;
																		$idHora=$hora->id;
																		//echo var_dump($hora);
																		echo "
														           			 <option value='$hora->id'>
														           			 	$hora->descripcion
														           			 </option>";
																	}
																}
															echo" </select>
															</td>";
															echo "<td><img  class='fotoGrilla' src='fotos/$medico->foto'</td>";
															echo "<td><input type='button' value='Reservar' onclick=".'"Reserva('."'$idTurno','$medico->id','$idHora')".'">';
															echo"</td>
															</tr>";
													}
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