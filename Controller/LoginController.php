<?php
require_once "Model/UserModel.php";
require_once "View/LoginView.php";

class LoginController{

    private $loginview;
    private $usermodel;
    private $authHelper;

    function __construct(){
        $this->loginview = new LoginView();
        $this->usermodel = new UserModel();
        $this->authHelper = new AuthHelper();
    }

    function mostrarLogin(){
        $this->loginview->showLogin();
    }
    function mostrarRegister(){
        $this->loginview->showRegister();
    }
    function Register(){
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            $userEmail = $_POST['email'];
            $userPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);

            $this->usermodel->addUser($userEmail,$userPassword);
        }
        $this->loginview->showLoginLocation();
        
       
    }
    function verifyLogin(){
        
        if(!empty($_POST['email']) && !empty($_POST['password']))
        {
            $userEmail = $_POST['email'];
            $userPassword = $_POST['password'];

            $user = $this->usermodel->getUser($userEmail);
            
            
            if($user && password_verify($userPassword, $user->password) && $user->isAdmin == 1)
            {
                    session_start();
                    $_SESSION['logged'] = true;
                    $_SESSION['email'] = $userEmail;
                    $_SESSION['isAdmin'] = true;
                    $this->loginview->showJuegos();
            }
            else if($user && password_verify($userPassword, $user->password))
            {
                session_start();
                $_SESSION['logged'] = true;
                $_SESSION['email'] = $userEmail;
                $_SESSION['isAdmin'] = false;
                $this->loginview->showJuegos();
            }
            else
            {
                $this->loginview->showLogin("Acceso denegado!");
            }

        }
    }

    function Logout(){
        $this->authHelper->logout();
        $this->loginview->showLoginLocation();
    }
}