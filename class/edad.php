<?php
/**
 * 
 */
 class edad 
 {
 	
 	public $id;
 	public $descripcion;


 	public static function TraerEdades()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("call TraerEdades");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "edad");		
	}
 } 
 ?>