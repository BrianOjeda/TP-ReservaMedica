    <?php
    require_once("class\AccesoDatos.php");

    require("class\obraSocial.php"); 

      $arrayObrasocial=obraSocial::TraerObraSociales();
     ?> 
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/altaReserva.css">
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
   
     <div id="headerAlta" class="headerAlta">
        
     </div>
    <form class="form-ingreso" onsubmit="GuardarCD();return false">
        
       
        <input type="radio" name="sex" value="Masculino" >Masculino
        <input type="radio" name="sex" value="Femenino"  >Femenino

        <p><input type="checkbox" name="check"/> Con obra social</p>
          <p><input type="checkbox"  /> Sin obra social</p>

            <p> <h4 class="form-ingreso-heading ">Obra social:</h4></p> 

            <select name="ObraSocial" class="list-group-item  list-group-item list-group-item-success combo">
                 <?php
                     foreach ($arrayObrasocial as $obraSocial) 
                      {
                         echo "<option value='$obraSocial->id'>$obraSocial->descripcion</option>";
                       } 
                 ?>
              </select>
         <p> <h4 class="form-ingreso-heading combo" >Turnos disponibles:</h4></p> 
        <select name="unidades" class="combo">
          <?php 
              for ($i=0; $i < 5; $i++) { 

                # code...
                echo"
                       <option >turno1</option>
                       <option >turno2</option>
                       <option>turno3</option>";
              }

         ?>
        </select>

        <textarea rows="4" cols="50" class="estilotextarea list-group-item-success"> lalala</textarea></br>
        <textarea rows="4" cols="50" class=" list-group-item-success">lalala</textarea></br>
        <textarea rows="4" cols="50" class=" list-group-item-success">lala</textarea></br>

       <input readonly   type="hidden"    id="idCD" class="form-control" >
      
      
        <button  class="btn btn-lg btn-success " type="button  "><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar </button>
  
      </form>