<?php
    require_once('libs/Smarty.class.php');

    class LoginView{

        private $smarty;
        public function __construct(){
            $this->smarty= new Smarty();
            $this->smarty->assign('baseURL', BASE_URL);
        }

        public function mostrarLogin(){
            $this->smarty->assign('titulo', 'Inicio de Secion');
            $this->smarty->assign('nameJS', 'login');
            $this->smarty->display('templates/login.tpl');
        }
        public function mostrarLoginError($error){
            $this->smarty->assign('titulo', 'Inicio de Secion');
            $this->smarty->assign('error', $error);
            $this->smarty->assign('nameJS', 'login');
            $this->smarty->display('templates/login.tpl');
        }
    }