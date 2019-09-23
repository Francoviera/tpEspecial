<?php
    require_once('controllers/productos.controller.php');
    require_once('controllers/productos.controller.php');

    if($_GET["action"] === ''){
        $_GET['action'] = 'home';
    }
    else {
        $partesURL= explode("/", $_GET["action"]);

      switch ($partesURL[0]) {
        case 'productos':
            $controller = new ProductController();
            $controller->mostrarProductos();
            
            if (isset($partesURL[1]) && $partesURL[1] === "editar"){
                $nombre= $_POST["nombre"];
                $precio= $_POST["precio"];
                $cantidad= $_POST["cantidad"];
                $categoria= $_POST["categoria"];
                $controller->editarProducto($nombre, $precio, $cantidad, $categoria, $partesURL[2]);
            }

            if (isset($partesURL[1]) && $partesURL[1] === "agregar"){
                $nombre= $_POST["nombre"];
                $precio= $_POST["precio"];
                $cantidad= $_POST["cantidad"];
                $categoria= $_POST["categoria"];
                $controller->agregarProducto($nombre, $precio, $cantidad, $categoria);
            }

            break;
        
        case 'categorias':
            $controller = new ProductController();
            $controller->mostrarCategorias();

            if(isset($partesURL[1]) && $partesURL[1] === "agregar"){
                $tipo= $_POST["tipo"];
                $desc= $_POST["desc"];
                $controller->agregarCategoria($tipo, $desc);
            }
            break;
        
        case 'categoria':
            $id= $partesURL[1];
            $controller = new ProductController();
            $controller->mostrarCategoriaId($id);
            break;

        case 'home':
            $controller = new ProductController();
            $controller->mostrarHome();
            break;

        case 'eliminar':
            $id= $partesURL[1];

            $controller= new ProductController();
            $controller->eliminarProducto($id);
            break;


        default:
            echo "<h1>Error 404 - Page not found </h1>";
            break;
        }
    }