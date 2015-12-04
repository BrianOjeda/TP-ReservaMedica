<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
 <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/funcionesAjax.js"></script>
<script type="text/javascript" src="js/funcionesABM.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
 <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.js"></script>
  <script src="js/jsRegistroJquery.js"></script>
<div class="CajaInicio animated bounceInRight">
	<h1> Alta Persona</h1>
			<!--  -->
	 <form class="form-ingreso"  enctype="multipart/form-data" method="post" id="frmAltaPersona">
       
        <label for="Nombre" class="sr-only">Nombre</label>
        <input type="text"  minlength="1"  id="nombre" name="nombre" title="Se necesita un nombre" class="form-control" placeholder="Nombre" required="" autofocus="">
        <label for="Apellido" class="sr-only">Apellido</label>
        <input type="text"  minlength="1"  id="apellido" name="apellido"title="Se necesita un apellido"  class="form-control" placeholder="Apellido" required="" autofocus="">
        <label for="Direccion" class="sr-only">Direccion</label>
        <input type="text"   minlength="1" title="Se necesita una direccion"  id="direccion" name="direccion" class="form-control" placeholder="Direccion" required="" autofocus="">
        <label for="Telefono" class="sr-only">Telefono</label>
        <input type="number"   minlength="1" title="Se necesita un Telefono"  id="telefono" name="telefono"class="form-control" placeholder="Telefono" required="" autofocus="">
        <label for="Dni" class="sr-only">Dni</label>
        <input type="number"   minlength="1" title="Se necesita un dni"  id="dni" name="dni" class="form-control" placeholder="Dni" required="" autofocus="">
        <p>Foto<input class="form-control btn btn-info"  name="fichero" type="file" id="fichero"></p>
          <span id="error" class='error1' style="display: none;"></span>
         <p>Preview</p><img  name="imagen" id="imagen" src="" alt="Imagen aqui" width="280" height="250">   
       
        <button  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar </button>
     
      </form>
</div>
		