<?php
    require_once('libs/Smarty.class.php');

    class LoginView{

        public function mostrarLogin(){
            $smarty= new Smarty();
            $smarty->assign('titulo', 'Inicio de Secion');

            $smarty->display('templates/login.tpl');
        }
    }