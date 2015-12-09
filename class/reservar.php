<?php
/**
 * 
 */
 class reservar 
 {
 	public $id;
 	public $obraSocial;
 	public $sexo;
 	public $turno;
 	public $historia;
 	public $titular;
 	public $edad;
 	public $suceso;
 	public $internadoHospital;
 	public $otroHospital;
 	public $persona;
  
	 public function Insertar()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("call insertarReserva(:obra,:sex,:tur,:histo,:ti,:ed,:su,:in,:otro,:per)");

			    $consulta->bindValue(':obra',$this->obraSocial, PDO::PARAM_STR);
				$consulta->bindValue(':sex', $this->sexo, PDO::PARAM_STR);
				$consulta->bindValue(':tur', $this->turno, PDO::PARAM_STR);
				$consulta->bindValue(':histo',$this->historia, PDO::PARAM_STR);
				$consulta->bindValue(':ti', $this->titular, PDO::PARAM_STR);
				$consulta->bindValue(':ed', $this->edad, PDO::PARAM_STR);
				$consulta->bindValue(':su',$this->suceso, PDO::PARAM_STR);
				$consulta->bindValue(':in', $this->internadoHospital, PDO::PARAM_STR);
				$consulta->bindValue(':otro', $this->otroHospital, PDO::PARAM_STR);
				$consulta->bindValue(':per', $this->persona, PDO::PARAM_STR);
				$consulta->execute();	

				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }
	 	public static function TraerTodasLasReservas()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT `idReserva` as id, `idObraSocial` as obraSocial,
			 `idTurno` as turno, `historiaClinica` as historia, `motivoTurno`, `titular` as titular, `resena` FROM `reserva` ");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "reservar");		
	}

	
 } 
 ?>