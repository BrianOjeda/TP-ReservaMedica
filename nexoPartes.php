	<?php 
//require_once("clases/AccesoDatos.php");
//require_once("clases/cd.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	case 'estadistica':
			include("Partes/grafico.php");
		break;
	case 'botonesPrincipales':
			include("Partes/botonesPrincipales.php");
		break;
	case 'pediatria':
			include("Partes/frmPediatria.php");
		break;
	case 'altaReserva':
			include("Partes/frmAltaReserva.php");
		break;
	case 'comboObraSocial':
			include("partes/comboOS.php");
		break;
		case 'base':
			include("partes/frmBaseDatos.php");
		break;
	case 'altaPersona':
		include("partes/frmAltaPersona.php");
	break;
	case 'altaPersonaRegistrado':
		include("partes/frmAltaPersonaRegistrado.php");
	break;
	case 'altaEspecialidad':
		include("partes/frmAltaEspecialidad.php");
	break;
	case 'altaMedico':
		include("partes/frmAltaMedico.php");
	break;
	case 'altaTurno':
		include("partes/frmAltaTurno.php");
		break;
	case 'grillaReserva':
		include("partes/frmGrillaReserva.php");
		break;
	case 'altaReserva':
		$idMedico=$_POST['medico'];
		$idTurno=$_POST['turno'];
		echo $idMedico."---".$idTurno;
		include("partes/frmAltaReserva.php");
		break;
	case 'VerEnMapa':
			include("partes/formMapaGoogle.php");
		break;
	case 'listaPersonas':
			include("formGrillaWS.php");
		break;
		
	default:
		# code...
		break;
}

 ?>