<?php

class UserModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_juegos;charset=utf8', 'root', '');
    }

    function getAllUsers(){
        $query = $this->db->prepare("SELECT * FROM usuario");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    
    function addUser($email,$password){
        $query = $this->db->prepare("INSERT INTO usuario(email,password) VALUES(?,?)");
        $query->execute(array($email,$password));
    }
    function getUser($email){
        $query = $this->db->prepare("SELECT * FROM usuario WHERE email=?");
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
       
    }
    
    function updateUsuario($isAdmin,$id){
        $query = $this->db->prepare("UPDATE usuario SET isAdmin=? WHERE id_usuario=?");
        $query->execute(array($isAdmin,$id));

    }

    function deleteUsuario($id){
        $query = $this->db->prepare("DELETE FROM usuario WHERE id_usuario=?");
        $query->execute(array($id));
    }
}