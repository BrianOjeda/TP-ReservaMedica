<?php 
require_once("class/AccesoDatos.php");
require_once("class/persona.php");
require_once("class/especialidad.php");
require_once("class/medico.php");
require_once("class/turno.php");
require_once("class/reservar.php");
require_once("class/sucesos.php");


	$queHago=$_POST['queHacer'];
	
	

	

switch ($queHago) {
	
	case 'GuardarPersona':
			$destino="fotos/".$_FILES["foto"]["name"];
		
			if(move_uploaded_file($_FILES["foto"]["tmp_name"], $destino))
			{
				$persona = new persona();
				$persona->nombre=$_POST['nombre'];
				$persona->apellido=$_POST['apellido'];
				$persona->direccion=$_POST['direccion'];
				$persona->telefono=$_POST['telefono'];
				$persona->dni=$_POST['dni'];
				$persona->foto=$_FILES["foto"]["name"];
				$persona->Guardar();
				echo "<script>alert('Persona insertada correctamente');</script>";
				header("location:baseDatos.php");
			}
			

		break;
	case 'GuardarEspecialidad':
			$especialidad = new especialidad();		
			$especialidad->descripcion=$_POST['especialidad'];
			$especialidad->Insertar();
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
		case 'GuardarReserva':

		$obra=$_POST['obra'];
		$sexo=$_POST['sexo'];
		$titular=$_POST['titular'];
		$fractura=$_POST['fractura'];
		$acb=$_POST['acb'];
		$trastorno=$_POST['trastorno'];
		$edad=$_POST['edad'];
		$hospital=$_POST['hospital'];
		$otroHospital=$_POST['otroHospital'];
		$historia=$_POST['historia'];
		$turno=$_POST['turno'];
		$persona=$_POST['persona'];
		$suceso=new sucesos();
		$suceso->trastorno=$trastorno;
		$suceso->acb=$acb;
		$suceso->fractura=$fractura;
		$sus=$suceso->Insertar();

		
			$reservar=new reservar();
			$reservar->obraSocial=$obra;
		 	$reservar->sexo=$sexo;
		 	$reservar->turno=$turno;
		 	$reservar->historia=$historia;
		 	$reservar->titular=$titular;
		 	$reservar->edad=$edad;
		 	$reservar->suceso=$sus;
		 	$reservar->internadoHospital=$hospital;
		 	$reservar->otroHospital=$otroHospital;
		 	$reservar->persona=$persona;
		 	//echo $obra."--".$sexo."--".$turno."--".$historia."--".$titular."---".$edad."--".$sus."--".$hospital."---".$otroHospital."---";
		 	$aux=$reservar->Insertar();
			echo "Insertado correctamente";
		break;	
		case 'buscarPersona':
			$per=persona::TraerUnaPersona($_POST['dni']);
			if ($per == null or $per->id==0)
			 {
			 	//echo "$per->id";
				echo "noregistrado";
			}
			else
			{
				//echo "noregistrado";
				echo "$per->id";
				//include("partes/frmAltaPersona.php");
			}
			# code...
			break;
	default:
		# code...
		break;
}

 ?>