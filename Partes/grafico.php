 <script src="./bower_components/jquery/dist/jquery.min.js"></script>
    <script src="./bower_components/highcharts/highcharts.js"></script>
    <script src="./bower_components/highcharts/modules/data.js"></script>
<script type="text/javascript" src="js/grafico.js"></script>
<?php
require("class/estadistica.php");
require("class/AccesoDatos.php");
require("class/especialidad.php");


$especialidades=especialidad::TraerTodoLasEspecialidades();
echo "<table id='tabla' ";
			echo "<tr><td>Especialidad</td><td>Cantidad</td></tr>";
			foreach ($especialidades as $espe)
			 {
				$value=estadistica::TraerMedicoPorEspecialidad($espe->id);
				echo "<tr>";
				echo "<td>$value->especialidad</td>";
				echo "<td>$value->cantidad</td>";
				echo "</tr>";
			}			
		echo "</table>";  
?>
<div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>