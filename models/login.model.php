<?php

    class LoginModel{
        private $db;

        public function __construct(){
            $this->db = new PDO ('mysql:host=localhost;'      
            .'dbname=db_compras;charset=utf8'           
            , 'root', '');                              
         
        }
        public function obtenerDatosUser($email){
            $query= $this->db->prepare('SELECT * FROM usuarios WHERE email= ?');
            $query->execute(array($email));

            return $query->fetch(PDO::FETCH_OBJ);
        }
        public function crearUsuario($email, $password){
            $query= $this->db->prepare('INSERT INTO usuarios(email, contraseña) VALUES(?,?)');
            $query->execute([$email, $password]);
        }
        public function obtenerUsuariosRegistrados(){
            $query = $this->db->prepare('SELECT * FROM usuarios');
            $query->execute();
    
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        public function agregarPermisoAdmin($id){
            $query= $this->db->prepare("UPDATE usuarios SET admin= 1  WHERE id= ?");
            $query->execute(array($id));
        }
        public function removerPermisoAdmin($id){
            $query= $this->db->prepare("UPDATE usuarios SET admin= 0  WHERE id= ?");
            $query->execute(array($id));
        }
        public function eliminarUsuario($id){
            $query= $this->db->prepare("DELETE FROM usuarios WHERE id= ?");
            $query->execute(array($id));
        }
    }