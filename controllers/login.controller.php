<?php   
    include_once('views/login.view.php');
    include_once('models/login.model.php');

    class LoginController{
        private $viewLogin;
        private $modelLogin;


        public function __construct(){
            $this->viewLogin= new LoginView();
            $this->modelLogin= new LoginModel();
        }
        public function mostrarLogin(){
            $this->viewLogin->mostrarLogin();
        }
        public function verificarLogin($email, $password){
            $datosUser= $this->modelLogin->obtenerDatosUser($email);
       
            if(!empty($datosUser) && password_verify($password, $datosUser->contraseña )){
                session_start();
                $_SESSION['EMAIL']= $email;
                $_SESSION['ID_USER']= $datosUser->id;

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
        public function singup($email, $password){
            $passwordHass= password_hash($password, PASSWORD_DEFAULT);
            $this->modelLogin->crearUsuario($email, $passwordHass);
            
            //header('Location: login'); //preguntar si esta bien asi o hay que hacer una constante para login
        }
    
    }