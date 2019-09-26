<?php
    require_once('controllers/productos.controller.php');
    require_once('controllers/login.controller.php');

    define('BASE_URL', 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    if($_GET["action"] === ''){
        $_GET['action'] = 'home';
    }
    else {
        $partesURL= explode("/", $_GET["action"]);

      switch ($partesURL[0]) {
        case 'login':
            $controller = new LoginController();
            $controller->mostrarLogin();

            break;
        case 'productos':
            $controller = new ProductController();
            $controller->mostrarProductos();

            break;
        
        case 'editarProducto':
                $nombre= $_POST["nombre"];
                $precio= $_POST["precio"];
                $cantidad= $_POST["cantidad"];
                $categoria= $_POST["categoria"];
                $id= $_POST["id"];
                $controller = new ProductController();
                $controller->editarProducto($nombre, $precio, $cantidad, $categoria, $id);
            
            break;

        case 'agregarProducto':
                $nombre= $_POST["nombre"];
                $precio= $_POST["precio"];
                $cantidad= $_POST["cantidad"];
                $categoria= $_POST["categoria"];
                $controller = new ProductController();
                $controller->agregarProducto($nombre, $precio, $cantidad, $categoria);

            break;
        
        case 'categorias':
            $controller = new ProductController();
            $controller->mostrarCategorias();

            break;

        case 'eliminarCategoria':
            $id= $partesURL[1];
            $controller = new ProductController();
            $controller->eliminarCategoria($id);

            break;
        case 'agregarCategoria':
            $controller = new ProductController();
            $tipo= $_POST["tipo"];
            $desc= $_POST["desc"];
            $controller->agregarCategoria($tipo, $desc);

            break;
 
        case 'editarCategoria':
            $controller = new ProductController();
            $tipo= $_POST["tipo"];
            $desc= $_POST["desc"];
            $id= $_POST["id"];
            $controller->editarCategoria($tipo, $desc, $id);

            break;
        case 'categoria':
            $id= $partesURL[1];
            $controller = new ProductController();
            $controller->mostrarCategoriaId($id);

        case 'home':
            $controller = new ProductController();
            $controller->mostrarHome();
            break;

        case 'eliminarProducto':
            $id= $partesURL[1];

            $controller= new ProductController();
            $controller->eliminarProducto($id);
            break;


        default:
            echo "<h1>Error 404 - Page not found </h1>";
            break;
        }
    }