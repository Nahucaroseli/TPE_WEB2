<?php

class ComentarioModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_juegos;charset=utf8', 'root', '');
    }
    function getComentariosbyJuego($id,$atributo,$criterio){
        
        $sentencia=$this->db->prepare("SELECT comentario.texto , comentario.puntaje , comentario.id , comentario.fecha FROM comentario JOIN juego ON comentario.id_juego = juego.id_juego WHERE comentario.id_juego=? ORDER BY $atributo $criterio");
        $sentencia->execute(array($id));
        $comentarios=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;

    }
    function getComentariosbyPuntos($id,$puntaje){
        
        $sentencia=$this->db->prepare("SELECT comentario.texto , comentario.puntaje , comentario.id , comentario.fecha FROM comentario JOIN juego ON comentario.id_juego = juego.id_juego WHERE comentario.id_juego=?");
        $sentencia->execute(array($id));
        $comentarios=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;

    }

    function getComentario($id){
        $sentencia=$this->db->prepare("SELECT * FROM comentario WHERE id=?");
        $sentencia->execute(array($id));
        $comentario=$sentencia->fetch(PDO::FETCH_OBJ);
        return $comentario;
    }

    function deleteComentario($id){
        $sentencia=$this->db->prepare("DELETE FROM comentario WHERE id=?");
        $sentencia->execute(array($id));
    }
    function insertComentario($texto,$fecha,$puntaje,$id_juego){
       $sentencia=$this->db->prepare("INSERT INTO comentario(texto,fecha,puntaje,id_juego) VALUES(?,?,?,?)");
       $sentencia->execute(array($texto,$fecha,$puntaje,$id_juego));
       return $this->db->lastInsertId();
    }
}