<?php

class AuthHelper{

    function __construct(){

    }

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['email'])){
            header("Location: ".BASE_URL."Login");
            die();
        }
    }

    function logout(){
        session_start();
        session_destroy();
    }



    function isAdmin(){
        session_start();
        if(!isset($_SESSION['isAdmin'])){
            header("Location: ".BASE_URL."Login");
            die();
        }
    }

    function admin(){
        session_start();
        return $_SESSION['isAdmin'];
    }


    function User(){
        session_start();
        if(isset($_SESSION['user'])){
            $user = $_SESSION['user'];
            return $user;
        }
        return null;
    }

}