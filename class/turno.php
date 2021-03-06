<?php
class turno
{
	public $id;
 	public $idDate;
  	public $idMedico;
  	public $idHora;

  	public function Borrar()
	 {
	 		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				delete 
				from turno_medico 				
				WHERE idTurno=:id");	
				$consulta->bindValue(':id',$this->id, PDO::PARAM_STR);		
				$consulta->execute();
				return $consulta->rowCount();
	 }

	public static function BorrarCdPorAnio($año)
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				delete 
				from cds 				
				WHERE jahr=:anio");	
				$consulta->bindValue(':anio',$año, PDO::PARAM_INT);		
				$consulta->execute();
				return $consulta->rowCount();

	 }
	public function ModificarCd()
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				update cds 
				set titel='$this->titulo',
				interpret='$this->cantante',
				jahr='$this->año'
				WHERE id='$this->id'");
			return $consulta->execute();

	 }
	
  
	 public function InsertarElCd()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into cds (titel,interpret,jahr)values('$this->titulo','$this->cantante','$this->año')");
				$consulta->execute();
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
				

	 }

	  public function ModificarCdParametros()
	 {
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				update cds 
				set titel=:titulo,
				interpret=:cantante,
				jahr=:anio
				WHERE id=:id");
			$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
			$consulta->bindValue(':titulo',$this->titulo, PDO::PARAM_INT);
			$consulta->bindValue(':anio', $this->año, PDO::PARAM_STR);
			$consulta->bindValue(':cantante', $this->cantante, PDO::PARAM_STR);
			return $consulta->execute();
	 }

	 public function Insertar()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("call InsertarTurno(:idDate,:idHora,:idMedico)");
				$consulta->bindValue(':idDate',$this->idDate, PDO::PARAM_STR);
				$consulta->bindValue(':idHora', $this->idHora, PDO::PARAM_STR);
				$consulta->bindValue(':idMedico', $this->idMedico, PDO::PARAM_STR);
				$consulta->execute();		
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
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


  	public static function TraerTodosLosTurnos()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			//$consulta =$objetoAccesoDato->RetornarConsulta("call TraerTodosLosTurnos()");
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT `idTurno` as id,`idMedico` as idMedico, `idDate` as idDate,`idhora` as idHora from turno_medico
			where idTurno not in

			(SELECT t.idTurno FROM turno_medico t join reserva r 
			on (t.idTurno=r.idTurno))");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "turno");		
	}

	public static function TraerUnTurno($id) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT `idTurno` as id, `idMedico` as idMedico, `idDate` as idDate, `idhora` as idHora FROM `turno_medico` WHERE idTurno=$id");
			$consulta->execute();
			$cdBuscado= $consulta->fetchObject('turno');
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