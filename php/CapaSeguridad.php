<?php
//Inicio la sesión 
session_start(); 

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO 
	if(isset($_SESSION["autentificado"]))
	{
		if ($_SESSION["autentificado"] != "SI") { 
		
	 	//si no existe, envio a la página de autentificacion 
		   header("Location:Index.php"); 
		   	//ademas salgo de este script 
		   	exit(); 
		}
	}
	else
	{
		//echo '<script> alert("lala"); </script>';
		header("Location:Index.php"); 
		//echo '<script> alert("lala"); </script>';
		   	//ademas salgo de este script 
		   	exit(); 
	}

?>