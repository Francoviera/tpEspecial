<?php
    class AuthHelper {
        public function __construct() {}
        
        public function login($user){
            session_start();
            $_SESSION['EMAIL']= $user->email;
            $_SESSION['ADMIN']= $user->admin;
        }
        public function logout() {
                session_start();
                session_destroy();
        }
        public function checkLogin() {
            if (session_status() != PHP_SESSION_ACTIVE)
                session_start();
            if (isset($_SESSION['EMAIL'])) {
                return true;
            } else {
                return false;
            }
                
        }
        public function checkAdmin() {
            if (session_status() != PHP_SESSION_ACTIVE)
                session_start();
            if (isset($_SESSION['EMAIL']) && $_SESSION['ADMIN'] === "1") {
                return true;
            } else {
                return false;
            }
        }
        public function getLoggedUserName() {
            if (session_status() != PHP_SESSION_ACTIVE)
                session_start();
            if (isset($_SESSION['EMAIL'])) 
                return $_SESSION['EMAIL'];
            else
                return null;
        }    
    }
    
