<?php
    include_once('models/productos.model.php');
    include_once('views/productos.view.php');
    
    class ProductController{
        private $model;
        private $view;

        public function __construct() {
            $this->model = new ProductModel();
            $this->view = new ProductView();
        }

        public function mostrarHome(){
            $this->view->home();
        }
        public function mostrarCategorias(){
            $categorias= $this->model->getCategorias();
            $this->view->categorias($categorias);
        }
        public function mostrarCategoria($id){
            $categoria= $this->model->getCategoria($id);
            $inventario= $this->model->getInventario();
            $this->view->categoria($id, $categoria, $inventario);
        }
        public function mostrarCategoriaId($id){
            $productos= $this->model->getProductosId($id);
            $categoria= $this->model->getCategoriaId($id);

            $this->view->productosId($productos, $categoria);
        }
        public function mostrarProductos(){
            // obtengo los productos del model
            // $inventario= $this->model->getInventario();
            $productoConCategoria= $this->model->getProductoConCategoria();

            // se las paso a la vista
            $this->view->mostrarInventario($productoConCategoria);
        }
        public function eliminarProducto($id){
            $this->model->eliminar($id);

            header("Location: http://localhost/tpEspecial/productos"); 
        }
        public function editarProducto($nombre, $precio, $cantidad, $categoria, $id){
            $this->model->editar($nombre, $precio, $cantidad, $categoria, $id);

            // header("Location: http://localhost/tpEspecial/productos"); 
        }
        public function agregarProducto($nombre, $precio, $cantidad, $categoria){
            // if ($nombre != '' && $cantidad != ''){
                // $resultado= $this->model->verificarExistencia($nombre);
                // if( $resultado == 0){
                    $this->model->guardar($nombre, $precio, $cantidad, $categoria);
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