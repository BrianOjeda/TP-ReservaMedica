
<?php 
  require("class/AccesoDatos.php"); 
  require("class/especialidad.php"); 
  require("class/persona.php"); 

  $arrayPersona=persona::TraerTodoLasPersonas();
  $arrayEspecialidad=especialidad::TraerTodoLasEspecialidades();
 ?>
<div class="CajaInicio animated bounceInRight">
	<h1> Alta Medico</h1>
			<!--  -->
	 <form class="form-ingreso" onsubmit="GuardarMedico();return false" enctype="multipart/form-data">
       
         <select id="persona" name="persona" class="list-group-item  list-group-item list-group-item-success form-control">
                 <?php
                     foreach ($arrayPersona as $persona) 
                      {
                         echo "<option value='$persona->id'>Nombre:$persona->nombre Apellido: $persona->apellido dni:$persona->dni </option>";
                      } 
                 ?>
          </select>
        </br>
           <select id="especialidad" name="especialidad" class="list-group-item  list-group-item list-group-item-success form-control">
                 <?php
                     foreach ($arrayEspecialidad as $especialidad) 
                      {
                         echo "<option value='$especialidad->id'>$especialidad->descripcion</option>";
                       } 
                 ?>
          </select>
        </br>
        <button  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar </button>
     
      </form>
</div>
		