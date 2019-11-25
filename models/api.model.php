<?php
    class ApiModel{

        private $db;

        public function __construct(){
            $this->db = new PDO ('mysql:host=localhost;'     
            .'dbname=db_compras;charset=utf8'           
            , 'root', '');                            
         
        }
        
        public function CargarComentario($texto, $id_producto, $id_usuario){
            $query= $this->db->prepare("INSERT INTO comentarios (texto, id_producto_fk, id_usuario_fk) VALUES(?,?,?)");
            $query->execute([$texto, $id_producto, $id_usuario]);
        }

        public function editarComentario($texto, $id_producto, $id_usuario, $id){
            $query= $this->db->prepare("UPDATE comentarios SET texto= ? WHERE id= ?");
            $query->execute([$texto, $id_producto, $id_usuario, $id]);
        }

        public function eliminarComentario($id){
            $query= $this->db->prepare("DELETE FROM comentarios WHERE id= ?");
            $query->execute([$id]);
        }
        public function getComentarios($id){
            $query= $this->db->prepare("SELECT * FROM comentarios WHERE id_producto_fk= ?");
            $query->execute([$id]);

            return $query->fetchAll(PDO::FETCH_OBJ);
        }
    } 