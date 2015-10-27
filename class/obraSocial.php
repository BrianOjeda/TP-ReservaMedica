<?php
/**
 * 
 */
 class obraSocial 
 {
 	
 	public $id;
 	public $descripcion;


 	public static function TraerObraSociales()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("call TraerObraSociales");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "obraSocial");		
	}
 } 
 ?>