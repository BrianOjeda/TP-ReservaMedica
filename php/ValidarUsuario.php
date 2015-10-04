<?php 

require_once("../class/usuario.php");
//require("AccesoDatos.php");
//session_start();
	//echo "Validado por ajax";
	//if($_GET('usuario')=="octavio")
	//{
//		echo true;
//	}
//	else
//	{
//		echo false;
//	}
//var_dump($_POST);

//echo "lala";
$arrayUsuario=usuario::traerID($_POST['usuario'],$_POST['clave']);
//if(count($arrayUsuario)<1)
$id=0;
foreach ($arrayUsuario as $usuario ) {
	# code...
	$id=$usuario->id;
}
if($id==null or $id ==0)
{
	echo "Error, reingrese usuario y contraseña";
}
else
{
	session_start(); 
	$_SESSION["autentificado"]= "SI"; 
	echo "correcto";
	//var_dump($arrayUsuario);
}

//$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
//$consulta = $objetoAccesoDato->RetornarConsulta("SELECT IdUsuario FROM Usuario WHERE Usuario='".$_POST['usuario']."' and Password='".$_POST['clave']."'");
//var_dump($consulta);
//if()
//{
//	echo 1;
//	$_SESSION['usuarioRegistrado']=$_POST['nombre'];
//}
//else
//{
//	echo false;
//}

 ?>