<?php
require_once "Controller/JuegoController.php";
require_once "Controller/GeneroController.php";
require_once "Controller/LoginController.php";
require_once "Controller/AdminController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'Juego'; // acción por defecto si no envían
}

$juegoController = new JuegoController();
$generoController = new GeneroController();
$loginController = new LoginController();
$adminController = new AdminController();
$params = explode("/", $action);

switch($params[0]){
    case 'busquedaFiltro':
        $juegoController->obtenerJuegosporFiltro();
        break;
    case 'borrarUsuario':
        $adminController->borrarUsuario($params[1]);
        break;
    case 'editarPermiso':
        $adminController->editarPermiso($params[1]);
        break;
    case 'Usuario':
        $adminController->obtenerUsuarios();
        break;
    case 'logout':
        $loginController->Logout();
        break;
    case 'verify':
        $loginController->verifyLogin();
        break;
    case 'RegisterPage':
        $loginController->Register();
        break;
    case 'updateGenre':
        $generoController->modificar();
        break;
    case 'updateGenero':
        $generoController->modificarGenero($params[1]);
        break;
    case 'updateGame':
        $juegoController->modificar();
        break;
    case 'Register':
        $loginController->mostrarRegister();
        break;
    case 'Login':
        $loginController->mostrarLogin();
        break;
    case 'eliminarGenero':
        $generoController->eliminarGenero($params[1]);
        break;
    case 'addGenero':
        $generoController->agregarGenero();
        break;  
    case 'updateJuego':
        $juegoController->modificarJuego($params[1]);
        break;
    case 'Genero':
        $generoController->getGeneros();
        break;
    case 'addJuego':
        $juegoController->agregarJuego();
        break;
    case 'eliminarJuego':
        $juegoController->eliminarJuego($params[1]);
        break;
    case 'verGenero':
        $generoController->getJuegosporGenero($params[1]);
        break;
    case 'verJuego':
        $juegoController->getJuegobyId($params[1]);
        break;
    case 'Juego':
        $juegoController->getJuegos();
        break;
    default:
        echo("404 Error Not Found");
        break;
}





