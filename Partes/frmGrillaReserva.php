<script type="text/javascript" src="js/funcionesABM.js"></script>
<?php 
session_start();
if(isset($_SESSION['registrado']))
{
	require_once("class/AccesoDatos.php");
	require_once("class/reservar.php");
	require_once("class/turno.php");
	require_once("class/medico.php");
	require_once("class/date.php");
	require_once("class/persona.php");
	require_once("class/hora.php");
	$arrayReserva=reservar::TraerTodasLasReservas();
	echo "<h2> Bienvenido: ". $_SESSION['registrado']."</h2>";

 ?>
<table class="table"  style=" background-color: beige;">
	<thead>
		<tr>
			<th>Editar</th><th>Borrar</th><th>Paciente</th><th>Dni</th><th>Medico</th>
		</tr>
	</thead>
	<tbody>

		<?php 


foreach ($arrayReserva as $cd) {
	$persona=persona::TraerUnaPersonaPorID($cd->persona);
	$turno=turno::TraerUnTurno($cd->turno);
	$medico=medico::TraerUnMedico($turno->idMedico);
	$datosMedico=persona::TraerUnaPersonaPorID($medico->idPersona);
	$fecha=date::TraerFecha($turno->idDate);
	$hora=hora::TraerUnaHoraPorID($turno->idHora);
	echo"<tr>
			<td><a onclick='BorrarReserva($cd->id)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
			<td>$persona->nombre </br> $persona->apellido</td>
			<td>$persona->dni</td>
			<td>$datosMedico->nombre </br> $datosMedico->apellido</td>
			<td>fecha:$fecha->fecha </br> $hora->descripcion</td>
		</tr>   ";
}
		 ?>
	</tbody>
</table>

<?php 	}else	{
		echo "<h4 class='widgettitle'>No estas registrado</h4>";
	}

	 ?>