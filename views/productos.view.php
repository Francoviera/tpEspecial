<?php
    require_once('libs/Smarty.class.php');

    class ProductView{

        public function mostrarInventario($inventario){
            $smarty= new Smarty();
            $smarty->assign('titulo', 'Lista de Productos');
            $smarty->assign('inventario', $inventario);

            $smarty->display('templates/productos.tpl');
        }

        public function home(){
            $smarty= new Smarty();
            $smarty->assign('titulo', 'Inicio');

            $smarty->display('templates/home.tpl');
        }

        public function categorias($categorias){
            $smarty= new Smarty();
            $smarty->assign('titulo', 'Categorias');
            $smarty->assign('categorias', $categorias);

            $smarty->display('templates/categorias.tpl');
        }
        public function productosId($productos, $categoria){
            $smarty= new Smarty();
            $smarty->assign('titulo', 'Categoria');
            $smarty->assign('productos', $productos);
            $smarty->assign('categoria', $categoria);

            $smarty->display('templates/id_categoria.tpl');
        }
    }