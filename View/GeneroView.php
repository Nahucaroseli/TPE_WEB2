<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";
require_once "Model/GeneroModel.php";
require_once "Controller/GeneroController.php";



class GeneroView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function mostrarGeneros($generos,$verificar){
        $this->smarty->assign('generos', $generos);
        $this->smarty->assign('verificar', $verificar);
        $this->smarty->display('templates/listagenero.tpl');
    }
    function mostrarJuegosporGenero($juegos){
        $this->smarty->assign('juegos', $juegos);
        $this->smarty->display('templates/mostrarGenero.tpl');
    }
    function mostrarForm($genero){
        $this->smarty->assign('genero', $genero);
        $this->smarty->display('templates/FormEditGenero.tpl');
    }
    function showGeneroLocation(){
        header("Location: ".BASE_URL."Genero");
    }
}