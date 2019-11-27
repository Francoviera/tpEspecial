<?php
    include_once('models/api.model.php');
    include_once('api.view.php');
    include_once('helpers/auth.Helper.php');

    class ApiProductController{
        private $apiModel;
        private $apiView;
        private $authHelper;
        private $checkAdmin;

        private $data;

        public function __construct (){
            $this->apiModel = new ApiModel();
            $this->apiView = new ApiView();
            $this->authHelper= new AuthHelper();
            $this->checkAdmin= $this->authHelper->checkAdmin();
            $this->data = file_get_contents("php://input"); 
        }

        private function getData() {
            return json_decode($this->data);
        }
    
        public function subirComentario($params = []){
            $data=$this->getData();

            $texto= $data->texto;
            $puntaje= $data->puntaje;
            $idProducto= $data->idProducto;
            $idUsuario=  $data->idUsuario;

            $this->apiModel->cargarComentario($texto, $puntaje, $idProducto, $idUsuario);

            if($data){
                $this->apiView->response("Se cargo de forma exitosa", 200);
            } else{
                $this->apiView->response("Fallo al cargar el comentario", 404);
            }

        }
        
        public function eliminarComentario($params = null){
            if($this->checkAdmin  === true){
                $id= $params[':ID'];
                $this->apiModel->deleteComentario($id);
            }
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
        public function obtenerComentariosDesc($params = null){
            $id= $params[':ID'];
            $comentarios= $this->apiModel->getComentariosDesc($id);

            if($comentarios){
                $this->apiView->response($comentarios, 200);
            }
            else{
                $this->apiView->response(null, 404);
            }
        }
        public function obtenerComentariosAsc($params = null){
            $id= $params[':ID'];
            $comentarios= $this->apiModel->getComentariosAsc($id);

            if($comentarios){
                $this->apiView->response($comentarios, 200);
            }
            else{
                $this->apiView->response(null, 404);
            }
        }
    }