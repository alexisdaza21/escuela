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
			case 'usuarios':
				require "Controladores/usuariosController.php";
					usuariosController::main($action);
			break;
			case 'equipos':
				require "Controladores/equiposController.php";
					equiposController::main($action);
			break;
			case 'fechas':
				require "Controladores/fechasController.php";
					fechasController::main($action);
			break;
			default://controlador de inicio
			require "Controladores/homeController.php";
			//accion estatica ::
			homeController::main($action);
		}
 ?>
 