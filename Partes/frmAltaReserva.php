<?php 
  require("class/AccesoDatos.php"); 
  require("class/hora.php"); 
  require("class/medico.php"); 
  require("class/date.php");



  $arrayMedico=medico::TraerTodosLosMedicos();
  $arrayDate=date::TraerTodasLasFechas();
  $arrayHora=hora::TraerTodasLasHoras();
  $idMedico=$_GET['idMedico'];
   echo "<script type='text/javascript'>alert(' $idMedico');</script>";

 ?>

<div class="CajaInicio animated bounceInRight">
	<h1> Alta Turno</h1>
			<!--  -->
	 <form class="form-ingreso" onsubmit="GuardarTurno();return false" enctype="multipart/form-data">
       
         <select id="medico" name="medico" class="list-group-item  list-group-item list-group-item-success form-control">
                 <?php
                     foreach ($arrayMedico as $medico) 
                      {
                         echo "<option value='$medico->id'>Nombre:$medico->nombre Apellido: $medico->apellido especialidad:$medico->especialidad </option>";
                      } 
                 ?>
          </select>
        </br>
           <select id="date" name="date" class="list-group-item  list-group-item list-group-item-success form-control">
                 <?php
                     foreach ($arrayDate as $date) 
                      {
                         echo "<option value='$date->id'>$date->fecha</option>";
                       } 
                 ?>
          </select>
        </br>
         <select id="hora" name="hora" class="list-group-item  list-group-item list-group-item-success form-control">
                 <?php
                     foreach ($arrayHora as $hora) 
                      {
                         echo "<option value='$hora->id'>$hora->descripcion</option>";
                       } 
                 ?>
          </select>
        </br>
        <button  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar </button>
     
      </form>
</div>