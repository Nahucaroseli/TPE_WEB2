<?php

class JuegoModel {
    
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_juegos;charset=utf8', 'root', '');
    }
    
    function getallJuego(){
        $query = $this->db->prepare("SELECT a.* , b.* FROM juego a LEFT JOIN genero b ON a.id_genero = b.id_genero");
        $query->execute();
        $juegos = $query->fetchAll(PDO::FETCH_OBJ);
        return $juegos;
    }
    
    function getJuego($id){
        $query = $this->db->prepare("SELECT * FROM juego WHERE id_juego=?");
        $query->execute(array($id));
        $juego = $query->fetchAll(PDO::FETCH_OBJ);
        return $juego;
    }

    
    function addJuego($id_genero,$nombre,$descripcion,$calificacion,$precio){
        $query = $this->db->prepare("INSERT INTO juego(id_genero,nombre,descripcion,calificacion,precio) VALUES(?,?,?,?,?)");
        $query->execute(array($id_genero,$nombre,$descripcion,$calificacion,$precio));
    }
    function deleteJuego($id){
        var_dump($id);
        $query = $this->db->prepare("DELETE FROM juego WHERE id_juego=?");
        $query->execute(array($id));
    }
    
    function updateJuego($id_juego,$id_genero,$nombre,$descripcion,$calificacion,$precio){
        $query = $this->db->prepare("UPDATE juego SET id_genero=? , nombre=? , descripcion=? , calificacion=? , precio=? WHERE id_juego=?");
        $query->execute(array($id_genero,$nombre,$descripcion,$calificacion,$precio,$id_juego));
    }
}

