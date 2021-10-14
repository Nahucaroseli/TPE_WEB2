<?php
require_once  "Model/GeneroModel.php";
require_once "View/GeneroView.php";
require_once "Helpers/AuthHelper.php";

class GeneroController{
    private $generomodel;
    private $generoview;
    private $authHelper;
    private $verificar;

    function __construct(){
        $this->generomodel = new GeneroModel();
        $this->generoview = new GeneroView();
        $this->authHelper = new AuthHelper();
    }
    function getGeneros(){
        $verificar = false;  
        $generos = $this->generomodel->getallGenero();
        session_start();
        if(isset($_SESSION['logged'])){
            $verificar = $_SESSION['logged'];
        }

        $this->generoview->mostrarGeneros($generos,$verificar);
    }
    function getJuegosporGenero($id){
        $juegosbygeneros = $this->generomodel->getJuegosbyGenre($id);
        $this->generoview->mostrarJuegosporGenero($juegosbygeneros);
    }
    function agregarGenero(){
        $this->authHelper->checkLoggedIn();
        if(!empty($_POST['nombreGenero'])){
            $this->generomodel->addGenero($_POST['nombreGenero'],$_POST['descripcion'],$_POST['tag']);
            $this->generoview->showGeneroLocation();
        }
    }
    function eliminarGenero($id){
        $this->authHelper->checkLoggedIn();
        $this->generomodel->deleteGenero($id);
        $this->generoview->showGeneroLocation();
    }
    function modificarGenero($id){
        $this->authHelper->checkLoggedIn();
        $genero = $this->generomodel->getGenero($id);
        $this->generoview->mostrarForm($genero);
    }
    function modificar(){
        $this->generomodel->updateGenero($_POST['id_genero'],$_POST['nombreGenero'],$_POST['descripcion'],$_POST['tag']);
        $this->generoview->showGeneroLocation();
    }
}