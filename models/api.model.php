<?php
    class ApiModel{

        private $db;

        public function __construct(){
            $this->db = new PDO ('mysql:host=localhost;'     
            .'dbname=db_compras;charset=utf8'           
            , 'root', '');                            
         
        }
        
        public function CargarComentario($texto, $puntaje, $id_producto, $id_usuario){
            $query= $this->db->prepare("INSERT INTO comentarios (texto, puntaje, id_producto_fk, id_usuario_fk) VALUES(?,?,?,?)");
            $query->execute([$texto, $puntaje, $id_producto, $id_usuario]);
        }
        public function deleteComentario($id){
            $query= $this->db->prepare("DELETE FROM comentarios WHERE id= ?");
            $query->execute([$id]);
        }
        public function getComentarios($id){
            $query= $this->db->prepare("SELECT * FROM comentarios WHERE id_producto_fk= ?");
            $query->execute([$id]);

            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        public function getComentariosDesc($id){
            $query= $this->db->prepare("SELECT * FROM comentarios WHERE id_producto_fk= ? ORDER BY comentarios.puntaje DESC");
            $query->execute([$id]);

            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        public function getComentariosAsc($id){
            $query= $this->db->prepare("SELECT * FROM comentarios WHERE id_producto_fk= ? ORDER BY comentarios.puntaje ASC");
            $query->execute([$id]);

            return $query->fetchAll(PDO::FETCH_OBJ);
        }
    } 