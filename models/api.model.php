<?php
    class ApiModel{

        private $db;

        public function __construct(){
            $this->db = new PDO ('mysql:host=localhost;'     
            .'dbname=db_compras;charset=utf8'           
            , 'root', '');                            
         
        }

    }