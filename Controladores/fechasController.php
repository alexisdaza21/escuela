<?php 
//clase
require_once("Modelos/fechas.php");

class fechasController{
	public static function main ($action){
		$_this = new fechasController();
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
		
		$fech = new Fechas();
		$fechas = $fech->admin();
		
		require"vistas/fechas/admin.php";
	}
	private function create(){
		if(isset($_POST["Fechas"])){
			//guardar en la BBDD
			$fech = $_POST["Fechas"]["fecha"];
			$hor = $_POST["Fechas"]["hora"];
			$loc = $_POST["Fechas"]["local"];
			$vis = $_POST["Fechas"]["visitante"];
			$gloc = $_POST["Fechas"]["goles_local"];
			$gvis = $_POST["Fechas"]["goles_visitante"];
			$fechas = new Fechas();
	
			//$usuarios->findBydocument($documento);
			$guardo = $fechas->save($fech,$hor,$loc,$vis,$gloc, $gvis );
			if ($guardo){
					//$_SESSION["documento"]=$doc;
					header("Location: index.php?c=fechas&a=admin");
				}else{
					header("Location: index.php?c=fechas&a=admin&error=true");
				}
			}else
				require "vistas/fechas/create.php";
		}
		private function update(){
		$fechas = new Fechas();
		$fechas->findByPk($_GET["id"]);

		if(isset($_POST["Fechas"])){
			$fechas->fecha = $_POST["Fechas"]["fecha"];
			$fechas->hora = $_POST["Fechas"]["hora"];
			$fechas->local = $_POST["Fechas"]["local"];
			$fechas->visitante = $_POST["Fechas"]["visitante"];
			$fechas->goles_local = $_POST["Fechas"]["goles_local"];
			$fechas->goles_visitante = $_POST["Fechas"]["goles_visitante"];

			$fechas->update();
			header("Location: index.php?c=fechas&a=admin");
		}else{
			require "Vistas/fechas/update.php";
		}
	}
		private function delete(){
        $fechas = new Fechas();
        $fechas->delete($_GET["id"]);

        if(isset($_GET["id"])){
            $fechas->delete($_GET["id"]);

            header("Location: index.php?c=fechas&a=admin");

        }else{
            header("Location: index.php?c=fechas&a=admin");
        }
	}
		
}

 ?>