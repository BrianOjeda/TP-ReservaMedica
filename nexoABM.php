<?php 
require_once("class/AccesoDatos.php");
require_once("class/persona.php");
require_once("class/especialidad.php");
require_once("class/medico.php");
require_once("class/turno.php");

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
			$persona->foto=$_POST['foto'];
			$persona->Guardar();
			echo "Persona insertada correctamente";

		break;
	case 'GuardarEspecialidad':
			$especialidad = new especialidad();		
			$especialidad->descripcion=$_POST['especialidad'];
			$especialidad->Guardar();
			echo "Especialidad insertada correctamente";
		break;
	case 'GuardarMedico':
			$medico = new medico();		
			$medico->idEspecialidad=$_POST['especialidad'];
			$medico->idPersona=$_POST['persona'];
			$medico->Guardar();
			echo "Medico insertada correctamente";
		break;	
	case 'GuardarTurno':
			$turno = new turno();		
			$turno->idMedico=$_POST['medico'];
			$turno->idDate=$_POST['date'];
			$turno->idHora=$_POST['hora'];
			$turno->Guardar();
			echo "turno insertado correctamente";
		break;	
	default:
		# code...
		break;
}

 ?>