<?php 
require_once("class/AccesoDatos.php");
require_once("class/persona.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	case 'BorrarCD':
			$cd = new cd();
			$cd->id=$_POST['id'];
			$cantidad=$cd->BorrarCd();
			echo $cantidad;

		break;
	case 'GuardarPersona':
			$persona = new persona();
			$persona->nombre=$_POST['nombre'];
			$persona->apellido=$_POST['apellido'];
			$persona->direccion=$_POST['direccion'];
			$persona->telefono=$_POST['telefono'];
			$persona->dni=$_POST['dni'];
			$persona->Guardar();
			echo "Persona insertada correctamente";

		break;
	case 'TraerCD':
			$cd = cd::TraerUnCd($_POST['id']);		
			echo json_encode($cd) ;

		break;
	default:
		# code...
		break;
}

 ?>