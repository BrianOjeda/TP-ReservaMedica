	<?php 
//require_once("clases/AccesoDatos.php");
//require_once("clases/cd.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	
	case 'pediatria':
			include("Partes/frmPediatria.php");
		break;
	case 'altaTurno':
			include("Partes/frmAltaTurno.php");
		break;
	case 'BotonesGrilla':
			include("partes/BotonesGrilla.php");
		break;
	case 'grillaJudicialSemanal':
			include("partes/grillaJudicialSemanal.php");
		break;
	case 'grillaHechoDeConflicto':
			include("partes/grillaHechoDeConflicto.php");
		break;
	case 'formIndicadoresTratamiento':
			include("partes/formIndicadoresTratamiento.php");
		break;
	case 'formAlteracionSeguridadTratamiento':
			include("partes/formAlteracionSeguridadTratamiento.php");
		break;
	case 'formIngresoEgreso':
			include("partes/formIngresoEgreso.php");
		break;
	case 'formLBA':
			include("partes/formLBA.php");
		break;
	case 'formLesa':
			include("partes/formLesa.php");
		break;
	case 'formTrabajo':
			include("partes/formTrabajo.php");
		break;	
	case 'formDecesos':
			include("partes/formDecesos.php");
		break;	
	case 'formExtranjeros':
			include("partes/formExtranjeros.php");
		break;
	case 'formDelitos':
			include("partes/formDelitos.php");
		break;	
	case 'formReincidentes':
			include("partes/formReincidentes.php");
		break;	
	case 'AgregarExcel':
		echo '<script>alert("lalal");</script>';
		break;
	case 'formHechoDeConflicto':
		include("partes/formHechoDeConflicto.php");
		break;
/////////////////grilla/////////////////////////////////////////////
	case 'grillaAlteracion':
		include("partes/grillaAlteracion.php");
		break;
	case 'grillaDecesos':
			include("partes/grillaDecesos.php");
		break;
	case 'grillaDelitos':
			include("partes/grillaDelitos.php");
		break;
	case 'grillaExtranjeros':
			include("partes/grillaExtranjeros.php");
		break;
	case 'grillaHechos':
			include("partes/grillaHechoDeConflicto.php");
		break;
	case 'grillaIndicadores':
			include("partes/grillaIndicadores.php");
		break;
	case 'grillaIngresos':
			include("partes/grillaIngresos.php");
		break;
	case 'grillaLba':
			include("partes/grillaLba.php");
		break;
	case 'grillaLesa':
			include("partes/grillaLesa.php");
		break;
	case 'grillaReincidentes':
			include("partes/grillaReincidentes.php");
		break;	
	case 'grillaTrabajo':
			include("partes/grillaTrabajo.php");
		break;	
	case 'grillaVista':
			include("partes/grillaVista.php");
		break;
	default:
		# code...
		break;
}

 ?>