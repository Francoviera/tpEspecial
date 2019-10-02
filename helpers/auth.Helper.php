<?php
    class AuthHelper {
        public function __construct() {}
        
        public function login($user){
            session_start();
            $_SESSION['EMAIL']= $user->email;
            $_SESSION['ID_USER']= $user->id;
        }
        public function logout() {
                session_start();
                session_destroy();
        }
        public function checkLogin() {
            session_start();
            if (!isset($_SESSION['EMAIL'])) {
                header('Location: login');
                die();
            }
                
        }
        public function getLoggedUserName() {
            if (session_status() != PHP_SESSION_ACTIVE)
                session_start();
            return $_SESSION['EMAIL'];
        }    
    }
    
