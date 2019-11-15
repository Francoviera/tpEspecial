<?php
    require_once('libs/Smarty.class.php');

    class LoginView{

        private $smarty;

        public function construct__ (){
            $this->smarty= new Smarty();
            $this->smarty->assign('baseURL', BASE_URL);
            $this->smarty->assign('userName', $userName);
        }
    }