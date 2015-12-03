
<?php 
session_start();
if(isset($_SESSION['registrado']))
{
	require_once("class/AccesoDatos.php");
	require_once("class/reservar.php");
	$arrayReserva=reservar::TraerTodasLasReservas();
	echo "<h2> Bienvenido: ". $_SESSION['registrado']."</h2>";

 ?>
<table class="table"  style=" background-color: beige;">
	<thead>
		<tr>
			<th>Editar</th><th>Borrar</th><th>Obra social</th><th>Sexo</th><th>Turno</th><th>Historia clinica</th><th>Titular</th>
		</tr>
	</thead>
	<tbody>

		<?php 


foreach ($arrayReserva as $cd) {
	echo"<tr>
			<td><a onclick='EditarCD($cd->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
			<td><a onclick='BorrarCD($cd->id)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
			<td>$cd->obraSocial</td>
			<td>$cd->sexo</td>
			<td>$cd->turno</td>
			<td>$cd->historia</td>
			<td>$cd->titular</td>
		</tr>   ";
}
		 ?>
	</tbody>
</table>

<?php 	}else	{
		echo "<h4 class='widgettitle'>No estas registrado</h4>";
	}

	 ?>