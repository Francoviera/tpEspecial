<?php
    require_once('libs/Smarty.class.php');

    class ProductView{

        private $smarty;
        private $authHelper;
        public function __construct(){
            $this->authHelper= new AuthHelper();
            $userName= $this->authHelper->getLoggedUserName();
            $this->smarty= new Smarty();
            $this->smarty->assign('baseURL', BASE_URL);
            $this->smarty->assign('userName', $userName);
        }

        public function mostrarInventario($inventario){
            $this->smarty->assign('titulo', 'Lista del Inventario');
            $this->smarty->assign('inventario', $inventario);
            $this->smarty->assign('nameJS', 'productos');

            $this->smarty->display('templates/productos.tpl');
        }
        public function mostrarProductosUser($productos){
            $this->smarty->assign('titulo', 'Lista de Productos');
            $this->smarty->assign('productos', $productos);

            $this->smarty->display('templates/productosUser.tpl');
        }

        public function home(){
            $this->smarty->assign('titulo', 'Inicio');

            $this->smarty->display('templates/home.tpl');
        }

        public function categorias($categorias){
            $this->smarty->assign('titulo', 'Categorias');
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->assign('nameJS', 'categorias');

            $this->smarty->display('templates/categorias.tpl');
        }
        public function categoriasUser($categorias){
            $this->smarty->assign('titulo', 'Categorias');
            $this->smarty->assign('categorias', $categorias);

            $this->smarty->display('templates/categoriasUser.tpl');
        }
        public function productosId($productos, $categoria){
            $this->smarty->assign('titulo', 'Categoria');
            $this->smarty->assign('productos', $productos);
            $this->smarty->assign('categoria', $categoria);
            $this->smarty->assign('nameJS', 'categorias');
            

            $this->smarty->display('templates/id_categoria.tpl');
        }
    }