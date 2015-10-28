

<div class="CajaInicio animated bounceInRight">
	<h1> Alta Persona</h1>
			<!--  -->
	 <form class="form-ingreso" onsubmit="GuardarPersona();return false" enctype="multipart/form-data">
       
        <label for="Nombre" class="sr-only">Nombre</label>
        <input type="text"  minlength="1"  id="nombre" title="Se necesita un nombre" class="form-control" placeholder="Nombre" required="" autofocus="">
        <label for="Apellido" class="sr-only">Apellido</label>
        <input type="text"  minlength="1"  id="apellido" title="Se necesita un apellido"  class="form-control" placeholder="Apellido" required="" autofocus="">
        <label for="Direccion" class="sr-only">Direccion</label>
        <input type="text"   minlength="1" title="Se necesita una direccion"  id="direccion" class="form-control" placeholder="Direccion" required="" autofocus="">
        <label for="Telefono" class="sr-only">Telefono</label>
        <input type="number"   minlength="1" title="Se necesita un Telefono"  id="telefono" class="form-control" placeholder="Telefono" required="" autofocus="">
        <label for="Dni" class="sr-only">Dni</label>
        <input type="number"   minlength="1" title="Se necesita un dni"  id="dni" class="form-control" placeholder="Dni" required="" autofocus="">
         <label for="Foto" class="sr-only">Foto</label>
         <input type="file" name="foto" id="foto" />   
       
        <button  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar </button>
     
      </form>
</div>
		