<?php

namespace core;

require_once 'vendor/autoload.php';

if(file_exists("content/controllers/FrontController.php")){
    require_once("content/controllers/FrontController.php");
}else{
    die("ERROR: No se pudo encontrar el controladro principal");
}

/* echo "<h1>Veterinaria Milano Real</h1>";
echo "<p>El sistema de carga automatica esta funcionando correctamente.</p>";

$url = explode('/', trim( $_GET["url"] ?? "home_index", '/'));

$nombreController = ucfirst($url[0]) . "Controller";
$metodo = $url[1] ?? 'index';

$claseControlador = "App\\controllers\\$nombreController";

if(!class_exists($claseControlador)){
    die("Controlador no encontrado");
}

$controller = new $claseControlador();

if(!method_exists($controller, $metodo)){
    die("Metodo no encontrado");
}

call_user_func_array([$controller, $metodo], array_slice($url, 2));

 */

