  <form class="form-ingreso" onsubmit="GuardarCD();return false">
        <h2 class="form-ingreso-heading">Ingreso y egresos</h2>
        



        <input type="radio" name="sex" value="male" checked>Male
        <input type="radio" name="sex" value="male" checked>Male


         <p><input type="checkbox" checked /> Html5</p>
         <p><input type="checkbox" checked /> Css3</p>


       <select name="unidades">
       
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
        <select name="unidades">
       
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

       
        <textarea rows="4" cols="50" class="form-control"> lalala</textarea>
        <textarea rows="4" cols="50" class="form-control">lalala</textarea>
        <textarea rows="4" cols="50" class="form-control">lala</textarea>

       <input readonly   type="hidden"    id="idCD" class="form-control" >
      
      
        <button  class="btn btn-lg btn-success btn-block" type="button  "><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar </button>
     
      </form>