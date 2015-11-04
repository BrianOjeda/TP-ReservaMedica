<?php 

require_once("../class/usuario.php");

$contrasena=md5($_POST['clave']);
//echo $contrasena;
$arrayUsuario=usuario::traerID($_POST['usuario'],$contrasena);
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
	$_SESSION['registrado']= $_POST['usuario'];
	echo "correcto";
}


 ?>