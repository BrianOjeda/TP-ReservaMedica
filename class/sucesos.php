<?php
/**
 * 
 */
 class sucesos 
 {
 	public $id;
 	public $fractura;
 	public $acb;
 	public $trastorno;
 	
 	
  	public function TraerUltimoId()
  	{
  			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("call TraerUltimoIdSuceso");
			$consulta->execute();			
			$suceso=$consulta->fetchObject("sucesos");	
			return $suceso->id;
  	}
	 public function Insertar()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("call insertarSucesos($this->fractura,$this->acb,$this->trastorno)");
				$consulta->execute();
				return $this->TraerUltimoId();
	 }

	
 } 
 ?>