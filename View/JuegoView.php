<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";
require_once "Model/JuegoModel.php";
require_once "Controller/JuegoController.php";

class JuegoView{


    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function mostrarJuegos($juegos,$verificar,$generos){
        $this->smarty->assign('juegos',$juegos);
        $this->smarty->assign('verificar',$verificar);
        $this->smarty->assign('generos',$generos);
        $this->smarty->display('templates/listajuego.tpl');
    }

    function mostrarJuegoporid($juego,$user){
        $this->smarty->assign('juego', $juego);
        $this->smarty->assign('user', $user);
        $this->smarty->display('templates/mostrarJuego.tpl');
    }
    
    function mostrarForm($juego,$generos){
        $this->smarty->assign('juego', $juego);
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('templates/FormEditJuego.tpl');
    }
    function showJuegoLocation(){
        header("Location: ".BASE_URL."Juego");
    }
    function showLoginLocation(){
        header("Location: ".BASE_URL."Login");
    }
}
