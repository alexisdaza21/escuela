<?php 
require_once("Modelos/usuarios.php");
	class homecontroller{

		public static function main($action){

	        $_this = new homeController();
			switch ($action) {
				case "home":
					$_this->home();
					break;
				case "login":
				    $_this->login();
				    break;	
				case "logout":
					$_this->logout();
					break;	
				default:
				    throw new Exception("Accion no definida");	
				
			}
		}
		private function home(){
			require "Vistas/home/home.php";
		}
		private function login(){

		
			if (isset($_POST["login"])) {
				$documento = $_POST["login"]["Documento"];
				$contrasena = $_POST["login"]["pas"];
				$usuario = new Usuarios();
				$usuario->findByDocument($documento);
				if (password_verify( $contrasena,$usuario->contrasena)) {
					$_SESSION["u"]= $usuario;
				//	$_SESSION["id"]= $usuario->id_usuario;
					$_SESSION["Perfil"] = $usuario->perfil;
					//$_SESSION["Perfil"]="Administrador";
					if ($_SESSION["Perfil"]!="Administrador" ) {
						header("location:index.php?c=habitacion&a=admin");
					}else header("location:index.php?c=home&a=home");
				}else{
					header("location:index.php?$c=home&a=home&error=true");
				}
			}
			require "Vistas/home/home.php";
		}
		private function logout(){
			session_destroy();
			header("location:index.php?$c=home&a=home");
		}
	}


 ?>