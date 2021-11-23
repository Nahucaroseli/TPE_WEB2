<?php
require_once "./Model/JuegoModel.php";
require_once "./View/JuegoView.php";
require_once "Helpers/AuthHelper.php";
require_once "Model/GeneroModel.php";
class JuegoController {

    private $juegomodel;
    private $juegoview;
    private $authHelper;
    private $verificar;
    private $genero;

    function __construct(){
        $this->juegomodel = new JuegoModel();
        $this->juegoview = new JuegoView();
        $this->authHelper = new AuthHelper();
        $this->genero = new GeneroModel();
    }
    function getJuegos(){
        $generos = $this->genero->getallGenero();
        $verificar = false;
        $juegos = $this->juegomodel->getallJuego();
        session_start();
        if(isset($_SESSION['logged'])){
          
            $verificar = $_SESSION['logged'];
        }
        $this->juegoview->mostrarJuegos($juegos,$verificar,$generos);
    }
    function getJuegobyId($id){
        session_start();
        $juego = $this->juegomodel->getJuego($id);
        if(isset($_SESSION['isAdmin'])){
            $user = $_SESSION['isAdmin'];
            $this->juegoview->mostrarJuegoporid($juego,$user);
        }else{
            $this->juegoview->mostrarJuegoporid($juego,null);
        }
       
    
      
    }

    function agregarJuego(){
        $this->authHelper->checkLoggedIn();
        if(($_FILES["img"]["type"]=="image/png") || ($_FILES["img"]["type"]=="image/jpg")){
            $img=$_FILES["img"];
            $origen=$img["tmp_name"];
            $destino="public/".uniqid().$img["name"];
            copy($origen,$destino);
            $this->juegomodel->addJuego($_POST['genero'],$_POST['nombre'],$_POST['descripcion'],$_POST['calificacion'],$destino,$_POST['precio']);   
            $this->juegoview->showJuegoLocation();
        
    }
   
    }
    function eliminarJuego($id){
        $this->authHelper->checkLoggedIn();
        $this->juegomodel->deleteJuego($id);
        $this->juegoview->showJuegoLocation();
    }
    function modificarJuego($id){
        $this->authHelper->checkLoggedIn();
        $generos = $this->genero->getallGenero();
        $juego = $this->juegomodel->getJuego($id);
        $this->juegoview->mostrarForm($juego,$generos);

    }
    function modificar(){
            $this->juegomodel->updateJuego($_POST['id_juego'],$_POST['genero'],$_POST['nombre'],$_POST['descripcion'],$_POST['calificacion'],$_POST['precio']);
            $this->juegoview->showJuegoLocation();
    }

  
}