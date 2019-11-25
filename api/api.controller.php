<?php
    include_once('models/api.model.php');
    include_once('api.view.php');
    

    class ApiProductController{
        private $apiModel;
        private $apiView;

        private $data;

        public function __construct (){
            $this->apiModel = new ApiModel();
            $this->apiView = new ApiView();
            $this->data = file_get_contents("php://input"); 
        }

        private function getData() {
            return json_decode($this->data);
        }
    
        public function subirComentario($params = []){
            $data=$this->getData();

            $comentario= $data->comentario;
            $idProducto= $data->idProducto;
            $idUsuario=  $data->idUsuario;

            $this->apiModel->cargarComentario($comentario, $idProducto, $idUsuario);

            if($data){
                $this->apiView->response("Se cargo de forma exitosa", 200);
            } else{
                $this->apiView->response("Fallo al cargar el comentario", 404);
            }

        }

        public function editarComentario($texto, $id_producto, $id_usuario,$id){

            $this->apiModel->editComentario($texto, $id_producto, $id_usuario, $id);
            
        }
        
        public function eliminarComentario($params = null){
            $id= $params[':ID'];

            $this->apiModel->deleteComentario($id);
        }

        public function obtenerComentarios($params = null){
            $id= $params[':ID'];
            $comentarios= $this->apiModel->getComentarios($id);

            if($comentarios){
                $this->apiView->response($comentarios, 200);
            }
            else{
                $this->apiView->response(null, 404);
            }
        }
    }