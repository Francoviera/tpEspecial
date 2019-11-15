<?php
    include_once('models/api.model.php');
    include_once('api.view.php');

    class ProductController{
        private $apiModel;
        private $apiView;

        public function construct__ (){
            $this->apiModel = new ApiModel();
            $this->apiView = new ApiView();
        }

        
    }