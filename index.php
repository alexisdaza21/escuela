<?php 
	require("Modelos/usuarios.php");
	session_start(); 

	$action = "home";
	$controller = "home";

	if (isset($_GET["a"])) 
		$action = $_GET["a"];
	

	if (isset($_GET["c"])) 
		$controller = $_GET["c"];
	
		if (!isset($_SESSION["u"]) && $_GET["a"]!="home" && $_GET["a"]!="login" ) 
				header("location:index.php?c=home&a=home");

		switch ($controller) {
			case "alquileres":
				require "Controladores/alquileresController.php";
				alquileresController::main($action);
				break;
			case "habitacion":
				require "Controladores/habitacionController.php";
			HabitacionController::main($action);
				break;
			case 'productos':
				require "Controladores/productosController.php";
				productosController::main($action);
				break;
			case 'servicios':
				require "Controladores/serviciosController.php";
				serviciosController::main($action);
				break;
			case 'usuarios':
				require "Controladores/usuariosController.php";
				usuariosController::main($action);
				break;
				break;
			case 'vehiculos':
				require "Controladores/vehiculosController.php";
				vehiculosController::main($action);
				break;
			default://controlador de inicio
			require "Controladores/homeController.php";
			//accion estatica ::
			homeController::main($action);
		}
 ?>
 