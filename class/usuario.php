<?php
	/**
	 * 
	 */
	require_once("AccesoDatos.php");
	 class usuario 
	 {
	 	public $id;
	 	public $user;
	 	public $pass;
	 	public $tipo;
	 	//function __construct(argument)
	 	//{
	 		# code...
	 	//}

	 	public static function traerID($usuario,$contraseña)
	 	{

	  		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerID('$usuario','$contraseña')");
			$consulta->execute();			
			return $consulta->fetchObject("usuario");
  
	 	}

	 	public static function traerTipoUsuario($id)
	 	{

	  		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL traerTipoUsuario($id)");
			$consulta->execute();			
			$tipo=$consulta->fetchObject("usuario");
			return $tipo->tipo;
  
	 	}
	 	public static function traerUsuario($id)
	 	{

	  		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL traerUsuario($id)");
			$consulta->execute();			
			$usuario=$consulta->fetchObject("usuario");
			return $usuario;
  
	 	}
	 } 
 ?>