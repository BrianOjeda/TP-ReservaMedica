<?php 
  require("class/AccesoDatos.php"); 
  require("class/hora.php"); 
  require("class/medico.php"); 
  require("class/date.php");
 require("class/obraSocial.php");
require("class/edad.php");

  $arrayMedico=medico::TraerTodosLosMedicos();
  $arrayDate=date::TraerTodasLasFechas();
  $arrayHora=hora::TraerTodasLasHoras();
  $arrayObraSocial=obraSocial::TraerObraSociales();
  $arrayEdades=edad::TraerEdades();
 
 ?>

<div class="CajaInicio animated bounceInRight">
	<h1> Alta Reserva</h1>
			<!--  -->
	 <form class="form-ingreso" onsubmit="GuardarReserva();return false" enctype="multipart/form-data">
        <h4>Obras sociales disponibles</h4>
           <select id="obra" name="obra" class="list-group-item  list-group-item list-group-item-success form-control">
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
          <h4>Edad del paciente</h4>
            <select id="edad" name="edad" class="list-group-item  list-group-item list-group-item-success form-control">
                   <?php
                       foreach ($arrayEdades as $edad) 
                        {
                           echo "<option value='$edad->id'>$edad->descripcion</option>";
                        } 
                   ?>
            </select>
            <br>
             <h4>Estuvo internado...</h4>
             <table>
              <tr>
                <td>
                   <h6>En este hospital&nbsp;&nbsp;<input type="checkbox" name="hospital" id="hospital" value="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                </td>
                <td>
                  <h6>En otro hospital &nbsp;&nbsp;<input type="checkbox" name="otroHospital" id="otroHospital" value="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                </td>
               
              </tr>
             </table>
              <br>
          <h4>Seleccione...</h4>
            <select id="area" name="area" class="list-group-item  list-group-item list-group-item-success form-control">
               <option value='$edad->id'>Agregar historia clinica</option>
               <option value='$edad->id'>No Agregar</option> 
            </select>
            <br>
            <textarea class="form-control" id="historia" name="historia">
            </textarea>
            <br>
            <br>
            <br>
            <input type="hidden" id="turno" name="turno">
        <button  class="btn btn-lg colorBoton btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar </button>
     
      </form>
</div>