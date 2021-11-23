<?php

require_once 'libs/Router/Router.php';
require_once 'Api/ComentarioApiController.php';

$router = new Router();

$router->addRoute('comentario/:ID','GET','ComentarioApiController','obtenerComentariosbyJuego');
$router->addRoute('comentario/:ID', 'DELETE', 'ComentarioApiController','borrarComentario');
$router->addRoute('comentario', 'POST', 'ComentarioApiController', 'agregarComentario');
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);