<script type="text/javascript" src="./bower_components/jquery/dist/jquery.js"></script>
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="css/animacion.css">
<link rel="stylesheet" type="text/css" href="default.css">
	<?php //require_once"partes/referencias.php" ;?>
 <div id="header">
	<h1>Pediatria</h1>
	<h2>Reserve su turno</h2>
</div>
<link rel="stylesheet" href="css/miTabla.css">
<table  class="table table-hover table-responsive" style="margin: 0 auto; width: 50%;
               vertical-align: top;border: 1px ;
                border-collapse: collapse;padding: 0.3em;caption-side: bottom;  ">
			<!--<thead style="margin:0;border:3px solid grey; border-top-width:0px;white-space:nowrap;">-->
			<thead>
				<tr>
					<th colspan ="4" style="background: #eee; width: 25%;text-align: center;
               vertical-align: top;border: 1px solid #000;
                border-collapse: collapse;padding: 0.3em;caption-side: bottom;  ">Reserva tu turno</th>
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