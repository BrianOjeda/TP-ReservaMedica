<?php 
  require("class/AccesoDatos.php"); 
  require("class/hora.php"); 
  require("class/medico.php"); 
  require("class/date.php");
 require("class/obraSocial.php");


  $arrayMedico=medico::TraerTodosLosMedicos();
  $arrayDate=date::TraerTodasLasFechas();
  $arrayHora=hora::TraerTodasLasHoras();
  $arrayObraSocial=obraSocial::TraerObraSociales();

 
 ?>

<div class="CajaInicio animated bounceInRight">
	<h1> Alta Reserva</h1>
			<!--  -->
	 <form class="form-ingreso" onsubmit="GuardarTurno();return false" enctype="multipart/form-data">
        <h4>Obras sociales disponibles</h4>
           <select id="medico" name="medico" class="list-group-item  list-group-item list-group-item-success form-control">
                   <?php
                       foreach ($arrayObraSocial as $obra) 
                        {
                           echo "<option value='$obra->id'>$obra->descripcion</option>";
                        } 
                   ?>
            </select>
        </br>
        <table>
          <tr>
            <td>
               <h4>Sexo del paciente</h4>
                  <h6>Masculino <input type="radio" name="sexo" id="sexo" value="1"></h6>
                  <h6>Femenino <input type="radio" name="sexo" id="sexo" value="2"></h6>
            </td>
            <td>
              <?php 
                for ($i=0; $i < 20; $i++) { 
                  echo "&nbsp;&nbsp;";
                }
               ?>
            </td>
            <td>
                <h4>Es titular</h4>
                  <h6>Si <input type="radio" name="titular" id="titular" value="1"></h6>
                  <h6>No <input type="radio" name="titular" id="titular" value="2"></h6>
            </td>
          </tr>
        </table>
       
        
         <h4>Alguna vez</h4>
         <table>
          <tr>
            <td>
               <h6>Sufrio alguna fractura &nbsp;&nbsp;<input type="checkbox" name="fractura" id="fractura" value="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
            </td>
            <td>
              <h6>Sufrio un ACB &nbsp;&nbsp;<input type="checkbox" name="acb" id="acb" value="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
            </td>
            <td>
               <h6>Sufrio algun tipo de trastorno &nbsp;&nbsp;<input type="checkbox" name="trastorno" id="trastorno" value="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
            </td>
          </tr>
         </table>
          <br>
            <select id="medico" name="medico" class="list-group-item  list-group-item list-group-item-success form-control">
                   <?php
                       foreach ($arrayObraSocial as $obra) 
                        {
                           echo "<option value='$obra->id'>$obra->descripcion</option>";
                        } 
                   ?>
            </select>
        <button  class="btn btn-lg colorBoton btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar </button>
     
      </form>
</div>