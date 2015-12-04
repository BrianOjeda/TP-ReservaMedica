<?php
class persona
{
	public $id;
 	public $nombre;
  	public $apellido;
  	public $direccion;
  	public $telefono;
  	public $dni;
  	public $foto;

  

	 

	 public function Insertar()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("call InsertarPersona(:nombre,:apellido,:direccion,:telefono,:dni,:foto)");
				$consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
				$consulta->bindValue(':apellido', $this->apellido, PDO::PARAM_STR);
				$consulta->bindValue(':direccion', $this->direccion, PDO::PARAM_STR);
				$consulta->bindValue(':telefono',$this->telefono, PDO::PARAM_INT);
				$consulta->bindValue(':dni', $this->dni, PDO::PARAM_INT);
				$consulta->bindValue(':foto', $this->foto, PDO::PARAM_STR);
				$consulta->execute();		
				return $this->UltimoID();
	 }
	 public function Guardar()
	 {

	 	if($this->id>0)
	 		{
	 			$this->ModificarCdParametros();
	 		}else {
	 			$this->Insertar();
	 		}

	 }

	public function UltimoID()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("SELECT max(`idPersona`) as id from persona ");
		$consulta->execute();
		$cdBuscado= $consulta->fetchObject('persona');
		return $cdBuscado->id;
	}
  	public static function TraerTodoLasPersonas()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("call TraerTodasLasPersonas()");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "persona");		
	}

	public static function TraerUnaPersona($id) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT `idPersona` as id, `nombre` as nombre, `apellido` as apellido, `dni` as dni, `direccion` as direccion, `telefono` as telefono, `foto` as foto FROM `persona` WHERE dni=:id");
			$consulta->bindValue(':id', $id, PDO::PARAM_STR);
			$consulta->execute();
			$cdBuscado= $consulta->fetchObject('persona');
			return $cdBuscado;				

			
	}

	public static function TraerUnCdAnio($id,$anio) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select  titel as titulo, interpret as cantante,jahr as año from cds  WHERE id=? AND jahr=?");
			$consulta->execute(array($id, $anio));
			$cdBuscado= $consulta->fetchObject('cd');
      		return $cdBuscado;				

			
	}

	public static function TraerUnCdAnioParamNombre($id,$anio) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select  titel as titulo, interpret as cantante,jahr as año from cds  WHERE id=:id AND jahr=:anio");
			$consulta->bindValue(':id', $id, PDO::PARAM_INT);
			$consulta->bindValue(':anio', $anio, PDO::PARAM_STR);
			$consulta->execute();
			$cdBuscado= $consulta->fetchObject('cd');
      		return $cdBuscado;				

			
	}
	
	public static function TraerUnCdAnioParamNombreArray($id,$anio) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select  titel as titulo, interpret as cantante,jahr as año from cds  WHERE id=:id AND jahr=:anio");
			$consulta->execute(array(':id'=> $id,':anio'=> $anio));
			$consulta->execute();
			$cdBuscado= $consulta->fetchObject('cd');
      		return $cdBuscado;				

			
	}

	public function mostrarDatos()
	{
	  	return "Metodo mostar:".$this->titulo."  ".$this->cantante."  ".$this->año;
	}

}