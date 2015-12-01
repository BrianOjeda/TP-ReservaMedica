<?php 

require_once("../class/usuario.php");

$contrasena=md5($_POST['clave']);
//echo $contrasena;
$usuario=usuario::traerID($_POST['usuario'],$contrasena);
//if(count($arrayUsuario)<1)

if($usuario->id==null or $usuario->id ==0)
{
	echo "Error, reingrese usuario y contraseña";
}
else
{
	session_start(); 
	//echo $id;
	$_SESSION['registrado']= $usuario->id;
	echo "correcto";
}


 ?>