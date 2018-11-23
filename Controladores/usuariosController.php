<?php 
//clase
require_once("Modelos/Usuarios.php");

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
			case 'view':
				$_this->view();
				break;
			case "admin":
				$_this->admin();
				break;
			
			default:
				throw new Exception("Accion no definido");
				break;
		}
	}
	private function create(){
		if(isset($_POST["Usuarios"])){
			//guardar en la BBDD
			$nom = $_POST["Usuarios"]["nombres"];
			$ape = $_POST["Usuarios"]["apellidos"];
			$per = $_POST ["Usuarios"]["perfil"];
			$doc = $_POST["Usuarios"]["documento"];
			$con = $_POST["Usuarios"]["contrasena"];
			$usuarios = new Usuarios();
			$BCRYPT = password_hash($con, PASSWORD_DEFAULT);
			$usuarios->findBydocument($documento);
			$guardo = $usuarios->save($nom,$ape,$per,$doc,$BCRYPT);
			if ($guardo){
					$_SESSION["documento"]=$doc;
					header("Location: index.php?c=usuarios&a=admin");
				}else{
					header("Location: index.php?c=usuarios&a=admin&error=true");
				}
			}else
				require "vistas/usuarios/create.php";
		}
	private function admin (){
		$user = new Usuarios();
		$usuario = $user->admin();

		require"vistas/usuarios/admin.php";
	}
	

	private function update(){
		$usuario = new Usuarios();
		$usuario->findByPk($_GET["id"]);

		if(isset($_POST["Usuarios"])){
			$usuario->nombres = $_POST["Usuarios"]["nombres"];
			$usuario->apellidos = $_POST["Usuarios"]["apellidos"];
			$usuario->perfil = $_POST["Usuarios"]["perfil"];
			$usuario->documento = $_POST["Usuarios"]["documento"];
			$usuario->contrasena = $_POST["Usuarios"]["contrasena"];


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
	private function view(){
				$usuario= new Usuarios();
				$usuarios = $usuario->view ($_POST['nhab']);
			require "vistas/usuarios/consultar.php";
			}
		
}

 ?>