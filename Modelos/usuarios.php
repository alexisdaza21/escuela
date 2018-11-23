<?php 

require_once("Conexion.php");

class Usuarios extends Conexion{ 

	public $id_usuario;
	public $nombres;
	public $apellidos;
	public $perfil;
	public $documento;
	public $contrasena;
	

	public function __construct(){
	
		parent::__construct();
	}
	public function save($nom,$ape,$per,$doc,$con){

		$this->nombres = $nom;
		$this->apellidos = $ape;
		$this->perfil = $per;
		$this->documento = $doc;
		$this->contrasena = $con;

		$conexion = $this->getConexion();
		$stm = $conexion-> prepare("INSERT INTO usuarios VALUES (:id_usuario,:nombres,:apellidos,:perfil,:documento,:contrasena)");
		try{
			 $stm->execute((array) $this);
			 return true;
		}catch(Exception  $e){
			return false;
		}
		}
	public function update(){

		$conexion = $this->getConexion();
		$stm = $conexion-> prepare("UPDATE usuarios SET nombres = :nombres, apellidos = :apellidos, perfil = :perfil, documento = :documento, contrasena = :contrasena WHERE id_usuario = :id");
		 
		 $stm->bindParam(":nombres",$this->nombres);
		 $stm->bindParam(":apellidos",$this->apellidos);
		 $stm->bindParam(":perfil",$this->perfil);
		 $stm->bindParam(":documento",$this->documento);
		 $stm->bindParam(":contrasena",$this->contrasena);
		
		 $stm->bindParam(":id",$this->id_usuario);

		 $stm->execute();
	}
	public function findByPk($id){
		$conexion = $this->getConexion();
		$stm = $conexion->prepare("SELECT * FROM Usuarios WHERE id_usuario = :id");
		$stm ->setFetchMode(PDO::FETCH_INTO,$this);

		$stm->bindParam(":id",$id);
		$stm-> execute();
		$stm->fetch();
		
	}
	public function findbydocument($doc){
		$conexion = $this->getConexion();
		$stm = $conexion->prepare("SELECT * FROM Usuarios WHERE documento = :doc");
		$stm->setFetchMode(PDO::FETCH_INTO,$this);
		$stm->bindParam(":doc",$doc);
		$stm->execute();
		$stm->fetch();
	}
	public function delete($id){
		$conexion = $this->getConexion();
		$stm =$conexion->prepare("DELETE FROM Usuarios WHERE id_usuario = :id");

		$stm->bindParam(":id",$id);
		$stm->execute();

}

public function view($id) {
            $conexion =$this->getConexion();
			$stm = $conexion->prepare("SELECT * FROM Usuarios WHERE nombres = :data or apellidos = :data or documento = :data or perfil = :data");
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
		$stm =$conexion->prepare("SELECT * FROM Usuarios");
		$stm->setFetchMode(PDO::FETCH_CLASS,'usuarios');
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
