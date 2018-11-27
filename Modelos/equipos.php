<?php 

require_once("Conexion.php");

class Equipos extends Conexion{ 

	public $id_equipos;
	public $equipo;
	public $categoria;

	

	public function __construct(){
	
		parent::__construct();
	}
	public function save($equi,$cat){

		$this->equipo = $equi;
		$this->categoria = $cat;


		$conexion = $this->getConexion();
		$stm = $conexion-> prepare("INSERT INTO equipos VALUES (:id_equipos,:equipo,:categoria)");
		try{
			 $stm->execute((array) $this);
			 return true;
		}catch(Exception  $e){
			return false;
		}
		}
	public function update(){

		$conexion = $this->getConexion();
		$stm = $conexion-> prepare("UPDATE equipos SET equipo = :equipo, categoria = :categoria WHERE id_equipos = :id");
		 
		 $stm->bindParam(":equipo",$this->equipo);
		 $stm->bindParam(":categoria",$this->categoria);

		 $stm->bindParam(":id",$this->id_equipos);

		 $stm->execute();
	}
	public function findByPk($id){
		$conexion = $this->getConexion();
		$stm = $conexion->prepare("SELECT * FROM equipos WHERE id_equipos = :id");
		$stm ->setFetchMode(PDO::FETCH_INTO,$this);

		$stm->bindParam(":id",$id);
		$stm-> execute();
		$stm->fetch();
		
	}

	public function delete($id){
		$conexion = $this->getConexion();
		$stm =$conexion->prepare("DELETE FROM equipos WHERE id_equipos = :id");

		$stm->bindParam(":id",$id);
		$stm->execute();

}

		public function admin(){
		$conexion = $this->getConexion();
		$stm =$conexion->prepare("SELECT * FROM equipos");
		$stm->setFetchMode(PDO::FETCH_CLASS,'Equipos');
		$equipos = array();	
		$stm->execute();

			
			while ($obj = $stm->fetch()) {
				$equipos[]=$obj;
			}
			
			//print_r($equipos);
			return $equipos;

}
}


 ?>
