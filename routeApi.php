<?php
    require_once('api/api.controller.php');
    require_once('Router.php');

    define('BASE_URL', 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $r = new Router();
    // $r->addRoute("obtenerComentarios", "GET", "ApiProductController", "obtenerComentarios");
    // $r->addRoute("obtenerComentario/:ID", "GET", "ApiProductController", "obtenerComentarioId");
    $r->addRoute("comentario", "POST", "ApiProductController", "subirComentario");
    $r->addRoute("comentario/:ID", "DELETE", "ApiProductController", "eliminarComentario");
    $r->addRoute("comentarios/:ID", "GET", "ApiProductController", "obtenerComentarios");
    $r->addRoute("comentariosDesc/:ID", "GET", "ApiProductController", "obtenerComentariosDesc");
    $r->addRoute("comentariosAsc/:ID", "GET", "ApiProductController", "obtenerComentariosAsc");
    
    $r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);