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
	private function create(){
		if(isset($_POST["Usuarios"])){
			//guardar en la BBDD
			$nom = $_POST["Usuarios"]["nombres"];
			$ape = $_POST["Usuarios"]["apellidos"];
			$doc = $_POST["Usuarios"]["documento"];
			$pass = $_POST["Usuarios"]["pass"];
			$tip = $_POST["Usuarios"]["tipo"];
			$usuarios = new Usuarios();
			$BCRYPT = password_hash($pass, PASSWORD_DEFAULT);
			//$usuarios->findBydocument($documento);
			$guardo = $usuarios->save($nom,$ape,$doc,$BCRYPT,$tip);
			if ($guardo){
					//$_SESSION["documento"]=$doc;
					header("Location: index.php?c=usuarios&a=admin");
				}else{
					header("Location: index.php?c=usuarios&a=admin&error=true");
				}
			}else
				require "vistas/usuarios/create.php";
		}
		private function update(){
		$usuario = new Usuarios();
		$usuario->findByPk($_GET["id"]);

		if(isset($_POST["Usuarios"])){
			$usuario->nombres = $_POST["Usuarios"]["nombres"];
			$usuario->apellidos = $_POST["Usuarios"]["apellidos"];
			$usuario->documento = $_POST["Usuarios"]["documento"];
			$usuario->pass = $_POST["Usuarios"]["pass"];
			$usuario->perfil = $_POST["Usuarios"]["tipo"];


			$usuario->update();
			header("Location: index.php?c=usuarios&a=admin");
		}else{
			require "Vistas/usuarios/update.php";
		}
	}
		private function delete(){
        $usuario = new Usuarios();
        $usuario->delete($_GET["id"]);

        if(isset($_GET["id"])){
            $usuario->delete($_GET["id"]);

            header("Location: index.php?c=usuarios&a=admin");

        }else{
            header("Location: index.php?c=usuarios&a=admin");
        }
	}
		
}

 ?>