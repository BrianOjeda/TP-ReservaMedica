<?php
class especialidad
{
	public $id;
 	public $descripcion;
 
  
	 public function Insertar()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("call InsertarEspecialidad(:descripcion)");
				$consulta->bindValue(':descripcion',$this->descripcion, PDO::PARAM_STR);
				$consulta->execute();		
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }
	


  	public static function TraerTodoLasEspecialidades()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("call TraerTodasLasEspecialidades()");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "especialidad");		
	}
	public static function TraerEspecialidad($id) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT idEspecialidad as id, descripcion as descripcion FROM especialidad WHERE idEspecialidad=$id");
			$consulta->execute();
			$cdBuscado= $consulta->fetchObject('especialidad');
			return $cdBuscado;					
	}
	
}