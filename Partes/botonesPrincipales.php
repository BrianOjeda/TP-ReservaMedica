<?php
require("class/AccesoDatos.php");
 require("class/especialidad.php");

 $arrayEspecialidad=especialidad::TraerTodoLasEspecialidades();

 ?>
<ul>
	<li class="selected">
		<a href="index.php">Home</a>
	</li>
	<li>
		<a href="login.php">Login</a>
	</li>
	<li>
		<a href="estadistica.php">Estadisticas</a>
	</li>
	<li>
		<a href="ubicacion.php">Mapa</a>
	</li>
	<li>
		<a href="baseDatos.php">Base de datos</a>
	</li>
	<?php
		foreach ($arrayEspecialidad as $especialidad) {
		 	echo "<li>
				<a href='grillaEspecialidad.php?especialidad=$especialidad->id'>$especialidad->descripcion</a>
			</li>";
		 } 
	 ?>

</ul>