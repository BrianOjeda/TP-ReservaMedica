<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<?php
session_start();

 ?>
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
 <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/funcionesAjax.js"></script>
<script type="text/javascript" src="js/funcionesABM.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="css/animacion.css">
<!-- Estos archivos son para geolocalizacion -->
<script type="text/javascript" src="js/geolocalizacionCommon.js"></script>
<script type="text/javascript" src="js/moduloGeolocalizacion.js"></script>
<script type="text/javascript" src="js/funcionesMapa.js"></script>

<html>
<head>
	<meta charset="UTF-8">
	<title>Reserva Medica</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<script type="text/javascript">VerEnMapa();</script>
<body onload="botonesPrincipales()">
	<div class="background">
		<div class="page">
			<a href="index.php" id="logo">Pediatria</a>
			<div id="botones" class="sidebar">
				
			</div>
			<?php if(isset($_SESSION['registrado']))
			{ ?>
			<div class="body" id="body" name="body">
				<div class="programs">
					<div>
						<div>
							<div>
								<h4>Donde encontrarnos...</h4>
								<h3>En el mapa se puede ver la localizacion de nuestra clinica.</h3>
								
								 <div id="principal">
								     
								</div>

						
						</div>
					</div>
				</div>
			</div>
			<?php 	}else	{
		echo "<h4 class='glyphicon'>No estas registrado, debe loguearse para ver el contenido de la pagina</h4>";
	}?>
			<div class="footer">
				
			</div>
	</div>
	

	 
</body>
</html>