<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
 <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/funcionesAjax.js"></script>
<script type="text/javascript" src="js/funcionesABM.js"></script>

<div class="CajaInicio animated bounceInRight">
	<h1> Alta Persona</h1>
			<!--  -->
	 <form class="form-ingreso" action="nexoABM.php" enctype="multipart/form-data" method="post">
       
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
         <label for="Foto" class="sr-only">Foto</label>
         <input type="file" name="foto" id="foto" />   
       <input type="hidden" name="queHacer" id="queHacer" value="GuardarPersona" /> 
        <button  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar </button>
     
      </form>
</div>
		