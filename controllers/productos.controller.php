<?php
    include_once('models/productos.model.php');
    include_once('models/categorias.model.php');
    include_once('views/productos.view.php');
    
    class ProductController{
        private $modelCategory;
        private $modelProduct;
        private $view;

        public function __construct() {
            $this->checkLogin();
            $this->modelCategory = new CategoryModel();
            $this->modelProduct = new ProductModel();
            $this->view = new ProductView();
        }
        private function checkLogin() {
            session_start();
            if (!isset($_SESSION['id_user'])) {
                header('Location: login');
                die();
            }
                
        }
    
        public function mostrarHome(){
            $this->view->home();
        }
        public function mostrarCategorias(){
            $categorias= $this->modelCategory->getCategorias();
            $this->view->categorias($categorias);
        }
        public function mostrarCategoria($id){
            $categoria= $this->modelCategory->getCategoria($id);
            $inventario= $this->modelProduct->getInventario();
            $this->view->categoria($id, $categoria, $inventario);
        }
        public function mostrarCategoriaId($id){
            $productos= $this->modelProduct->getProductosId($id);
            $categoria= $this->modelCategory->getCategoriaId($id);

            $this->view->productosId($productos, $categoria);
        }
        public function mostrarProductos(){
            // obtengo los productos del model
            // $inventario= $this->model->getInventario();
            $productoConCategoria= $this->modelProduct->getProductoConCategoria();

            // se las paso a la vista
            $this->view->mostrarInventario($productoConCategoria);
        }
        public function eliminarProducto($id){
            $this->modelProduct->eliminar($id);

            header('Location: ../productos'); 
        }
        public function editarProducto($nombre, $precio, $cantidad, $categoria, $id){
            $this->modelProduct->editar($nombre, $precio, $cantidad, $categoria, $id);

            header("Location: productos"); 
        }
        public function agregarProducto($nombre, $precio, $cantidad, $categoria){
            // if ($nombre != '' && $cantidad != ''){
                $resultado= $this->modelProduct->verificarExistencia($nombre);
                if($resultado === false){
                    $this->modelProduct->guardar($nombre, $precio, $cantidad, $categoria);
                     header("Location: productos"); 
                } else{
                    $this->modelProduct->actualizar($precio, $cantidad, $resultado->id);
                     header("Location: productos"); 
                }
            // }
            // else{
            //     $this->view->mostrarError();
            // }  
        }
        public function agregarCategoria($tipo, $desc){
            $resultado= $this->modelCategory->verificarExistencia($tipo);
            if($resultado === false){
                var_dump($resultado);
                $this->modelCategory->guardar($tipo, $desc);
                    header("Location: categorias"); 
            } else{
                $this->modelCategory->actualizar($tipo, $desc, $resultado->id);
                    header("Location: categorias"); 
            }
        }
        public function editarCategoria($tipo, $desc, $id){
            $this->modelCategory->editar($tipo, $desc, $id);
            header("Location: categorias");
        }
        public function eliminarCategoria($id){
            $this->modelCategory->eliminar($id);
            header("Location: ../categorias");
        }



        /*public function agregarAlCarrito(){
            //los datos del input que ingresa el usuario
            
            $producto= $_POST["producto"];
            $cantidad= $_POST["cantidad"];

            $precio= $this->model->obtenerPrecio($producto);
            $total= $this->model->calcularTotal($cantidad, $precio);
            
        }*/
    }