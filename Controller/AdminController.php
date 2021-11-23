<?php

require_once "Model/UserModel.php";
require_once "View/AdminView.php";
require_once "Helpers/AuthHelper.php";

class AdminController{

    private $model;
    private $view;
    private $authHelper;

    function __construct(){
        $this->model = new UserModel();
        $this->view = new AdminView();
        $this->authHelper = new AuthHelper();
    }

    
    function obtenerUsuarios(){
       
        $this->authHelper->isAdmin();
        $usuarios = $this->model->getAllUsers();
        $this->view->mostrarUsuarios($usuarios);
    }

    function editarPermiso($id){
        $isAdmin = $_POST['isAdmin'];
        if($this->authHelper->admin()){
            $this->model->updateUsuario($isAdmin,$id);
            $this->view->showUsuarioLocation();
        }else{
            header("Location: ".BASE_URL ."Juego");
        }
        
        
    }

    function borrarUsuario(){
        $id = $_POST['id_usuario'];
        if($this->authHelper->admin()){
            $this->model->deleteUsuario($id);
            $this->view->showUsuarioLocation();
        }
            else{
                header("Location: ".BASE_URL ."Juego");
            }
    
}
}