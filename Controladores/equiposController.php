<?php 
//clase
require_once("Modelos/equipos.php");

class equiposController{
	public static function main ($action){
		$_this = new equiposController();
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
		$equi = new Equipos();
		$equipos = $equi->admin();

		require"vistas/equipos/admin.php";
	}
	private function create(){
		if(isset($_POST["Equipos"])){
			//guardar en la BBDD
			$equi = $_POST["Equipos"]["equipo"];
			$cat = $_POST["Equipos"]["categoria"];

			$equipos = new Equipos();
	
			//$equipos->findBydocument($documento);
			$guardo = $equipos->save($equi,$cat);
			if ($guardo){
					//$_SESSION["documento"]=$doc;
					header("Location: index.php?c=equipos&a=admin");
				}else{
					header("Location: index.php?c=equipos&a=admin&error=true");
				}
			}else
				require "vistas/equipos/create.php";
		}
		private function update(){
		$equipos = new Equipos();
		$equipos->findByPk($_GET["id"]);

		if(isset($_POST["Equipos"])){
			$equipos->equipo = $_POST["Equipos"]["equipo"];
			$equipos->categoria = $_POST["Equipos"]["categoria"];

			$equipos->update();
			header("Location: index.php?c=equipos&a=admin");
		}else{
			require "Vistas/equipos/update.php";
		}
	}
		private function delete(){
        $equipos= new Equipos();
        $equipos->delete($_GET["id"]);

        if(isset($_GET["id"])){
            $equipos->delete($_GET["id"]);

            header("Location: index.php?c=equipos&a=admin");

        }else{
            header("Location: index.php?c=equipos&a=admin");
        }
	}
		
}

 ?>