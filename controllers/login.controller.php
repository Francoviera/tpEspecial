<?php   
    include_once('views/login.view.php');
    include_once('models/login.model.php');
    include_once('helpers/auth.Helper.php');

    class LoginController{
        private $viewLogin;
        private $modelLogin;
        private $authHelper;
        private $adminLogged;

        public function __construct(){
            $this->viewLogin= new LoginView();
            $this->modelLogin= new LoginModel();
            $this->authHelper= new AuthHelper();
            $this->adminLogged= $this->authHelper->checkAdmin();
        }
        public function mostrarLogin(){
            $this->viewLogin->mostrarLogin();
        }
        public function verificarLogin(){
            $email= $_POST["email"];
            $password= $_POST["password"];
            $datosUser= $this->modelLogin->obtenerDatosUser($email);
            if(!empty($email) && password_verify($password, $datosUser->contraseña )){
                $this->authHelper->login($datosUser);

                header("Location: productos");
            } else{
                $this->viewLogin->mostrarLoginError("Usuario o Contraseña Incorrectos");
            }
        }
        public function logout() {
            $this->authHelper->logout();
            header('Location: login');
        }
        public function mostrarSingup(){
            $this->viewLogin->mostrarSingup();
        }
        public function singup(){
            $email= $_POST["newEmail"];
            $password= $_POST["newPassword"];
            if(!empty($email)){
                $passwordHass= password_hash($password, PASSWORD_DEFAULT);
                $this->modelLogin->crearUsuario($email, $passwordHass);
                header('Location: login');
            }else{
                $this->viewLogin->mostrarLoginError("Complete todos los campos");
            }
        }
        public function adminConfig(){
            if ($this->adminLogged === true){
                $usuarios= $this->modelLogin->obtenerUsuariosRegistrados();
                $this->viewLogin->mostrarUsuariosRegistrados($usuarios);
            }
        }
        public function otorgarPermisoAdmin($params = null){
            $id= $params[':ID'];
            $this->modelLogin->agregarPermisoAdmin($id);
            header("Location: ../adminConfig"); 
        }
        public function removerPermisoAdmin($params = null){
            $id= $params[':ID'];
            $this->modelLogin->removerPermisoAdmin($id);
            header("Location: ../adminConfig"); 
        }
        public function eliminarUsuario($params = null){
            $id= $params[':ID'];
            $this->modelLogin->eliminarUsuario($id);
            header("Location: ../adminConfig"); 
        }
    }