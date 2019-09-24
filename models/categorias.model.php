<?php
    class CategoryModel{

        private $db;

        public function __construct(){
            $this->db = new PDO ('mysql:host=localhost;'      //definimos el tipo de base de datos que vamos a usar
            .'dbname=db_compras;charset=utf8'           //la tabla de donde vamos a agarrar los datos
            , 'root', '');                              //usuario--contraseña
         
        }
        public function getCategorias(){
            $query = $this->db->prepare('SELECT * FROM categorias');
            $query->execute();
    
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        public function getCategoriaId($id){
            $query= $this->db->prepare('SELECT * FROM categorias WHERE id_categorias_fk = ?');
            $query->execute(array($id));
            return $query->fetch(PDO::FETCH_OBJ);
        }
        public function eliminar($id){
            $query= $this->db->prepare("DELETE FROM categorias WHERE id_categorias_fk= ?");
            $query->execute(array($id));
        }
        public function editar($tipo, $desc, $id){
            $query= $this->db->prepare("UPDATE categorias SET tipo= ?, desc= ? WHERE id_categorias_fk= ?");
            $query->execute(array($tipo, $desc, $id));
        }
    }