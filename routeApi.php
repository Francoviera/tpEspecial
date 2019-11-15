<?php
    require_once('controllers/productos.controller.php');
    require_once('controllers/login.controller.php');
    require_once('Router.php');

    define('BASE_URL', 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $r = new Router();
    $r->addRoute();