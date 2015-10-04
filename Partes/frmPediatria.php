
 <div id="header">
	<h1>Pediatria</h1>
	<h2>Reserve su turno</h2>
</div>
<link rel="stylesheet" href="css/miTabla.css">
<table  style=" margin: 0 auto; background-color: beige;background-color: #EDEFD3;
text-align:center;" WIDTH="50%">
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
           			 echo 'Mostrar("altaTurno")';
           			 echo "' ></td></tr>";
				}
			
		
				 ?>
			</tbody>
	</table>