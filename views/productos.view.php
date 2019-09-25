<?php
    require_once('libs/Smarty.class.php');

    class ProductView{

        private $smarty;
        public function __construct(){
            $this->smarty= new Smarty();
            $this->smarty->assign('baseURL', BASE_URL);
        }

        public function mostrarInventario($inventario){
            $this->smarty->assign('titulo', 'Lista de Productos');
            $this->smarty->assign('inventario', $inventario);

            $this->smarty->display('templates/productos.tpl');
        }

        public function home(){
            $this->smarty->assign('titulo', 'Inicio');

            $this->smarty->display('templates/home.tpl');
        }

        public function categorias($categorias){
            $this->smarty->assign('titulo', 'Categorias');
            $this->smarty->assign('categorias', $categorias);

            $this->smarty->display('templates/categorias.tpl');
        }
        public function productosId($productos, $categoria){
            $this->smarty->assign('titulo', 'Categoria');
            $this->smarty->assign('productos', $productos);
            $this->smarty->assign('categoria', $categoria);

            $this->smarty->display('templates/id_categoria.tpl');
        }
    }