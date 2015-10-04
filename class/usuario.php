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
	 	//function __construct(argument)
	 	//{
	 		# code...
	 	//}

	 	public static function traerID($usuario,$contraseña)
	 	{

	  		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerID('$usuario','$contraseña')");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "usuario");
  
	 	}
	 } 
 ?>