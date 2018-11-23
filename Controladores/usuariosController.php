<?php 
//clase
require_once("Modelos/usuarios.php");

class usuariosController{
	public static function main ($action){
		$_this = new usuariosController();
		switch ($action) {
			case 'create':
				$_this->create();
				break;
			case 'delete':
				$_this->delete();
				break;
			case 'update':
				$_this->update();
				break;
			case "admin":
				$_this->admin();
			break;
			
			default:
				throw new Exception("Accion no definido");
				break;
		}
	}

	private function admin (){
		$user = new Usuarios();
		$usuario = $user->admin();

		require"vistas/usuarios/admin.php";
	}
		
}

 ?>