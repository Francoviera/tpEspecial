<?php
    include_once('models/productos.model.php');
    include_once('models/categorias.model.php');
    include_once('views/productos.view.php');
    
    class ProductController{
        private $modelCategory;
        private $modelProduct;
        private $view;

        public function __construct() {
            $this->modelCategory = new CategoryModel();
            $this->modelProduct = new ProductModel();
            $this->view = new ProductView();
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

            header("Location: http://localhost/tpEspecial/productos"); 
        }
        public function editarProducto($nombre, $precio, $cantidad, $categoria, $id){
            $this->modelProduct->editar($nombre, $precio, $cantidad, $categoria, $id);

            // header("Location: http://localhost/tpEspecial/productos"); 
        }
        public function agregarProducto($nombre, $precio, $cantidad, $categoria){
            // if ($nombre != '' && $cantidad != ''){
                // $resultado= $this->model->verificarExistencia($nombre);
                // if( $resultado == 0){
                    $this->modelProduct->guardar($nombre, $precio, $cantidad, $categoria);
                    header("Location: http://localhost/tpEspecial/productos"); 
                // } else{
                //     $this->model->actualizar($resultado, $nombre, $precio, $cantidad);
                //     header("Location: http://localhost/tpEspecial/productos"); 
                // }
            // }
            // else{
            //     $this->view->mostrarError();
            // }  
        }
        /*public function agregarAlCarrito(){
            //los datos del input que ingresa el usuario
            
            $producto= $_POST["producto"];
            $cantidad= $_POST["cantidad"];

            $precio= $this->model->obtenerPrecio($producto);
            $total= $this->model->calcularTotal($cantidad, $precio);
            
        }*/
    }