<?php   
    include_once('views/login.view.php');

    class LoginController{
        private $view;


        public function __construct(){
            $this->view= new LoginView();
        }
        public function mostrarLogin(){
            $this->view->mostrarLogin();
        }
    }