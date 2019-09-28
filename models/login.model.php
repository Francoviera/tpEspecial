<?php

    class LoginModel{
        private $db;

        public function __construct(){
            $this->db = new PDO ('mysql:host=localhost;'      //definimos el tipo de base de datos que vamos a usar
            .'dbname=db_compras;charset=utf8'           //la tabla de donde vamos a agarrar los datos
            , 'root', '');                              //usuario--contraseña
         
        }
        public function obtenerDatosUser(){
            $query= $this->db->prepare('SELECT * FROM usuarios WHERE email= ?');
            $query->execute(array($email));

            return $query->fetch(PDO::FETCH_OBJ);
        }
    }