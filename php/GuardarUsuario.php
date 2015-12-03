<?php
session_start();
require_once("../class/AccesoDatos.php");
require_once("../class/persona.php");


 

if(isset($_POST['nombre']) && isset($_POST['apellido']) && $_POST['direccion'] && isset($_POST['telefono']) && isset($_POST['dni']) )
    {
       
    

        $ruta=getcwd();  //ruta directorio actual
        $rutaDestino=$ruta."/fotos/";
    	$NOMEXT=explode(".", $_FILES['fichero0']['name']);
        $EXT=end($NOMEXT);
        $nomarch=$NOMEXT[0].".".$EXT;  // no olvidar el "." separador de nombre/ext
        $rutaActual = $ruta."/FotosTemp/".$nomarch;
        $nuevoNombreDeFoto = $_POST['dni'].".".$EXT;
        //Renombro con el email/usuario
        rename ($ruta."/FotosTemp/".$nomarch,$ruta."/FotosTemp/".$nuevoNombreDeFoto);
        $rutaActual = $ruta."/FotosTemp/".$nuevoNombreDeFoto;
       // echo $nomarch;
       // echo "	</br>";
        //echo $rutaActual;
         //echo "	</br>";
        //echo $rutaDestino.$nuevoNombreDeFoto;
         //echo "	</br>";
        //Muevo a carpeta Fotos
		rename($rutaActual,$rutaDestino.$nuevoNombreDeFoto);
        //
            $persona = new persona();
            $persona->nombre=$_POST['nombre'];
            $persona->apellido=$_POST['apellido'];
            $persona->direccion=$_POST['direccion'];
            $persona->telefono=$_POST['telefono'];
            $persona->dni=$_POST['dni'];
            $persona->foto=$nuevoNombreDeFoto;
             $persona->Guardar();

        echo "Foto Guardada con éxito en carpeta Fotos del servidor";
        //Guardar usuario en BD
    }
    
    else
    {
    	echo "Error: Debe ingresar todos los campos";
    }
    
?>