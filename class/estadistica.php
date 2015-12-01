<?php
class estadistica
{
	public $especialidad;
 	public $cantidad;
  	//public $idPersona;
  	//public $nombre;
  	//public $apellido;
  	//public $especialidad;
  	//public $foto;

  
  	public static function TraerMedicoPorEspecialidad($especialidad)
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT descripcion as especialidad,count(*) as cantidad  FROM `medico` m join especialidad e 
			on(m.idEspecialidad=e.idEspecialidad) WHERE m.idEspecialidad=:es");
			$consulta->bindValue(':es',$especialidad, PDO::PARAM_STR);
			$consulta->execute();			
			$cdBuscado= $consulta->fetchObject('estadistica');
			return $cdBuscado;				
		
	}
	



	

}