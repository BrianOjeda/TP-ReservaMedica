<script type="text/javascript" src="./bower_components/jquery/dist/jquery.js"></script>
<script type="text/javascript" src="js/funcionesAjax.js"></script>
<?php require_once"partes/referencias.php" ;
?>
<link rel="stylesheet" type="text/css" href="default.css">	
<div class="CajaInicio animated bounceInRight">

		<h2>Base de datos</h2>
						
		<form id="FormIngreso">
 									
			   <a onclick="Mostrar('altaPersona')"class="list-group-item  list-group-item list-group-item-success">
			 	  <h4 class="list-group-item-heading">Agregar personal</h4>
			  </a>						
			  <a onclick="Mostrar('clinico')" class="list-group-item  list-group-item list-group-item-success">
				 <h4 class="list-group-item-heading">Agregar  medico</h4>
			  </a>
			    <a onclick="Mostrar('altaEspecialidad')" class="list-group-item  list-group-item list-group-item-success">
				 <h4 class="list-group-item-heading">Agregar  especialidad</h4>
			  </a>
			    <a onclick="Mostrar('clinico')" class="list-group-item  list-group-item list-group-item-success">
				 <h4 class="list-group-item-heading">Agregar  turno</h4>
			  </a>
												
		</form>
</div>