<?php   
    include_once('views/login.view.php');
    include_once('models/login.model.php');

    class LoginController{
        private $viewLogin;
        private $modelLogin;


        public function __construct(){
            $this->viewLogin= new LoginView();
        }
        public function mostrarLogin(){
            $this->viewLogin->mostrarLogin();
        }
        public function verificarLogin($username, $password){
            $datosUser= $this->modelLogin->obtenerDatosUser($username);
            if($datosUser != false && password_verify($password, $datosUser->password)){
                session_start();
                $_SESSION['email']= $email;
                $_SESSION['id_user']= $datosUser->id;

                header("Location: productos");
            } else{
                $this->viewLogin->mostrarLoginError("Usuario o Contraseña Incorrectos");
            }

        }
        public function logout() {
            session_start();
            session_destroy();
            header('Location: login');
        }
    
    }