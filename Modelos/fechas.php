<?php 

require_once("Conexion.php");

class Fechas extends Conexion{ 

	public $id_fechas;
	public $fecha;
	public $hora;
	public $local;
	public $visitante;
	public $goles_local;
	public $goles_visitante;

	public function __construct(){
	
		parent::__construct();
	}
	public function save($fech,$hor,$loc,$vis,$gloc,$gvis){

		$this->fecha = $fech;
		$this->hora = $hor;
		$this->local = $loc;
		$this->visitante = $vis;
		$this->goles_local = $gloc;
		$this->goles_visitante = $gvis;

		$conexion = $this->getConexion();
		$stm = $conexion-> prepare("INSERT INTO fechas VALUES (:id_fechas,:fecha,:hora,:local,:visitante,:goles_local,:goles_visitante )");
		try{
			 $stm->execute((array) $this);
			 return true;
		}catch(Exception  $e){
			return false;
		}
		}
	public function update(){

		$conexion = $this->getConexion();
		$stm = $conexion-> prepare("UPDATE fechas SET fecha = :fecha, hora = :hora,local = :local, visitante = :visitante, goles_local = :goles_local, goles_visitante = :goles_visitante WHERE id_fechas = :id");
		 
		 $stm->bindParam(":fechas",$this->fechas);
		 $stm->bindParam(":hora",$this->hora);
		 $stm->bindParam(":local",$this->local);
		 $stm->bindParam(":visitante",$this->visitante);	 
		 $stm->bindParam(":goles_local",$this->goles_local);
	 	 $stm->bindParam(":goles_visitante",$this->goles_visitante);

		 $stm->bindParam(":id",$this->id_fechas);

		 $stm->execute();
	}
	public function findByPk($id){
		$conexion = $this->getConexion();
		$stm = $conexion->prepare("SELECT * FROM fechas WHERE id_fechas = :id");
		$stm ->setFetchMode(PDO::FETCH_INTO,$this);

		$stm->bindParam(":id",$id);
		$stm-> execute();
		$stm->fetch();
		
	}
	public function delete($id){
		$conexion = $this->getConexion();
		$stm =$conexion->prepare("DELETE FROM fechas WHERE id_fechas = :id");

		$stm->bindParam(":id",$id);
		$stm->execute();

}

		public function admin(){
		$conexion = $this->getConexion();
		$stm =$conexion->prepare("SELECT * FROM fechas");
		$stm->setFetchMode(PDO::FETCH_CLASS,'Fechas');
		$fechas = array();	
		$stm->execute();

			
			while ($obj = $stm->fetch()) {
				$fechas[]=$obj;
			}
			
			//print_r($usuario);
			return $fechas;

}
}


 ?>
