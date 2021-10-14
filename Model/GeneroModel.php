<?php

class GeneroModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_juegos;charset=utf8', 'root', '');
    }

    function getallGenero(){
        $query = $this->db->prepare("SELECT * FROM genero");
        $query->execute();
        $generos = $query->fetchAll(PDO::FETCH_OBJ);
        return $generos;
    }
    function getGenero($id){
        $query = $this->db->prepare("SELECT * FROM genero WHERE id_genero=?");
        $query->execute(array($id));
        $genero = $query->fetchAll(PDO::FETCH_OBJ);
        return $genero;
    }
    function getJuegosbyGenre($id){
        $query = $this->db->prepare("SELECT * FROM juego WHERE id_genero=?");
        $query->execute(array($id));
        $juegos = $query->fetchAll(PDO::FETCH_OBJ);
        return $juegos;
    }
    function addGenero($nombre,$descripcion,$tag){
        $query = $this->db->prepare("INSERT INTO genero(nombreGenero,descripcion,tag) VALUES(?,?,?)");
        $query->execute(array($nombre,$descripcion,$tag));
    }
    function deleteGenero($id){
        $query = $this->db->prepare("DELETE FROM genero WHERE id_genero=?");
        $query->execute(array($id));
    }
    function updateGenero($id_genero,$nombreGenero,$descripcion,$tag){
        $query = $this->db->prepare("UPDATE genero SET nombreGenero=? , descripcion=? , tag=? WHERE id_genero=?");
        $query->execute(array($nombreGenero,$descripcion,$tag,$id_genero));
    }
}