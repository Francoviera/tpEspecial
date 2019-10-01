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
        
        case 'logIn':
            
            $controller = new LoginController();
            $controller->verificarLogin();

            break;
        
        case 'logout':
            $controller = new LoginController();
            $controller->logout();
            break;
        
        case 'singup':
            
            $controller = new LoginController();
            $controller->singup();

            break;

        case 'productos':
            $controller = new ProductController();
            $controller->mostrarProductos();

            break;
        
        case 'editarProducto':
                $controller = new ProductController();
                $controller->editarProducto();
            
            break;

        case 'agregarProducto':
                $controller = new ProductController();
                $controller->agregarProducto();

            break;
        
        case 'categorias':
            $controller = new ProductController();
            $controller->mostrarCategorias();

            break;

        case 'eliminarCategoria':
            $controller = new ProductController();
            $controller->eliminarCategoria();

            break;
        case 'agregarCategoria':
            $controller = new ProductController();
            $controller->agregarCategoria();

            break;
 
        case 'editarCategoria':
            $controller = new ProductController();
            $controller->editarCategoria();

            break;
        case 'categoria':
            $controller = new ProductController();
            $controller->mostrarCategoriaId();

        case 'home':
            $controller = new ProductController();
            $controller->mostrarHome();
            break;

        case 'eliminarProducto':
            $controller= new ProductController();
            $controller->eliminarProducto();
            break;


        default:
            echo "<h1>Error 404 - Page not found </h1>";
            break;
        }
    }