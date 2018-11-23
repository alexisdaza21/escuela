<?php 

require_once("Conexion.php");

class Usuarios extends Conexion{ 

	public $id_usuarios;
	public $nombres;
	public $apellidos;
	public $documento;
	public $pass;
	public $tipo;
	

	public function __construct(){
	
		parent::__construct();
	}
	public function save($nom,$ape,$doc,$pass,$tip){

		$this->nombres = $nom;
		$this->apellidos = $ape;
		$this->documento = $doc;
		$this->pass = $pass;
		$this->tipo = $tip;

		$conexion = $this->getConexion();
		$stm = $conexion-> prepare("INSERT INTO usuarios VALUES (:id_usuarios,:nombres,:apellidos,:documento,:pass,:tipo)");
		try{
			 $stm->execute((array) $this);
			 return true;
		}catch(Exception  $e){
			return false;
		}
		}
	public function update(){

		$conexion = $this->getConexion();
		$stm = $conexion-> prepare("UPDATE usuarios SET nombres = :nombres, apellidos = :apellidos,documento = :documento, pass = :pass, tipo = :tipo WHERE id_usuarios = :id");
		 
		 $stm->bindParam(":nombres",$this->nombres);
		 $stm->bindParam(":apellidos",$this->apellidos);
		 $stm->bindParam(":documento",$this->documento);
		 $stm->bindParam(":pass",$this->pass);		 
		 $stm->bindParam(":tipo",$this->tipo);
		
		 $stm->bindParam(":id",$this->id_usuarios);

		 $stm->execute();
	}
	public function findByPk($id){
		$conexion = $this->getConexion();
		$stm = $conexion->prepare("SELECT * FROM usuarios WHERE id_usuarios = :id");
		$stm ->setFetchMode(PDO::FETCH_INTO,$this);

		$stm->bindParam(":id",$id);
		$stm-> execute();
		$stm->fetch();
		
	}
	public function findbydocument($doc){
		$conexion = $this->getConexion();
		$stm = $conexion->prepare("SELECT * FROM usuarios WHERE documento = :doc");
		$stm->setFetchMode(PDO::FETCH_INTO,$this);
		$stm->bindParam(":doc",$doc);
		$stm->execute();
		$stm->fetch();
	}
	public function delete($id){
		$conexion = $this->getConexion();
		$stm =$conexion->prepare("DELETE FROM usuarios WHERE id_usuarios = :id");

		$stm->bindParam(":id",$id);
		$stm->execute();

}

public function view($id) {
            $conexion =$this->getConexion();
			$stm = $conexion->prepare("SELECT * FROM Usuarios WHERE nombres = :data or apellidos = :data or documento = :data or pass = :data or tipo = :data");
            $stm->bindParam(":data", $id);
			
			$stm->setFetchMode(PDO::FETCH_CLASS,'Usuarios');
			
			$usuarios = array();
			$stm->execute();
	
			while ($obj = $stm->fetch()) {
				$usuarios[]=$obj;
			}
			return $usuarios;
                }
		public function admin(){
		$conexion = $this->getConexion();
		$stm =$conexion->prepare("SELECT * FROM usuarios");
		$stm->setFetchMode(PDO::FETCH_CLASS,'Usuarios');
		$usuario = array();	
		$stm->execute();

			
			while ($obj = $stm->fetch()) {
				$usuario[]=$obj;
			}
			
			//print_r($usuario);
			return $usuario;

}
}


 ?>
