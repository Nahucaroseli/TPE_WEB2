<?php
require_once 'libs/smarty-3.1.39\libs\Smarty.class.php';

class AdminView{
    private $smarty;
    public function __construct(){
        $this->smarty = new Smarty();
    }
    
    function mostrarUsuarios($usuarios){
        $this->smarty->assign('usuarios', $usuarios);
        $this->smarty->display("templates/Usuarios.tpl");
    }
    function showUsuarioLocation(){
        header("Location: ".BASE_URL."Usuario");
    }

}