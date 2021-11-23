<?php

require_once "Model/ComentarioModel.php";
require_once "Helpers/AuthHelper.php";
require_once "View/ComentarioApiView.php";


class ComentarioApiController{

    private $model;
    private $view;
    private $data;
    private $authHelper;

    function __construct(){
        $this->model = new ComentarioModel();
        $this->view = new ComentarioApiView();
        $this->authHelper = new AuthHelper();
        $this->data = file_get_contents("php://input");
    }


    function getData(){
        return json_decode($this->data);
    }


    function obtenerComentariosbyJuego($params = null){
        if(isset($_GET["sort"]) && isset($_GET["order"])){
            $atributo = $_GET["sort"];
            $criterio = $_GET["order"];
        } else {
            $atributo = "fecha";
            $criterio = "desc";
        }
        $id = $params[':ID'];
        $comentarios = $this->model->getComentariosbyJuego($id,$atributo,$criterio);
        if($comentarios){
            return $this->view->response($comentarios,200);
        }else{
            return $this->view->response([],200);
        }

    }

    function borrarComentario($params = []){
        $id = $params[':ID'];
        $comentario = $this->model->getComentario($id);

        if($comentario){
            $this->model->deleteComentario($id);
            return $this->view->response("El comentario $id se borro",200);

        }else{

            return $this->view->response("Error al eliminar el comentario $id",404);
        }

        
    }

    function agregarComentario(){
        $this->authHelper->checkLoggedIn();

        $body = $this->getData();
        $fecha = date("Y-m-d H:i:s");
        $id=$this->model->insertComentario($body->texto,$fecha,$body->puntaje,$body->id_juego);
        if($id != 0){
            return $this->view->response("Se inserto el comentario",200);
        }else{
            return $this->view->response("Error al insertar el comentario",404);
        }
    }



}