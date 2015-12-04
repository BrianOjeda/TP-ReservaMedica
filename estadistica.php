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
				
					
				?>
			<div class="body">
				<div class="programs">
					<div id="principal">
						<div>
						<div>
							<div>
								<h3>Porcentajes representado por un graficos torta</h3>
								
							</div>
						</div>
						<div id="principal">
							<input type="button" id="medico" name="medico" value="Medicos por especialidad" onclick="Mostrar('estadistica')">
							
						</div>
						
					
						<div class="section">
						
						</div>
					</div>
						
						</div>
					</div>
				</div>
			</div>
			<?php
				}else	{
		echo "<h4 class='glyphicon'>No estas registrado, debe loguearse para ver el contenido de la pagina</h4>";
		}?>
			<div class="footer">
			<!--	<div>
					
					
				</div>
				<p>
					&#169; Copyright 2016. All rights reserved
				</p> -->
			</div>
	</div>
</body>
</html>