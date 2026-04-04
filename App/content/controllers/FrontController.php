<?php

namespace App\content\controllers;

// El FrontController es el punto de entrada principal para todas las solicitudes. 
// Se encarga de determinar qué controlador cargar según la URL solicitada y si el usuario está logeado o no.
$url = isset($_SESSION['logeado']) && $_SESSION['logeado'] == 1
    ? ($_GET['url'] ?? 'home')
    : 'login';

// Se convierte la primera letra de la URL en mayúscula y se le agrega "Controller" para formar el nombre del controlador a cargar.
$controllerName = ucfirst($url) . 'Controller';

// Se construye la ruta al archivo del controlador y se verifica si existe. Si existe, se carga el controlador. Si no, se muestra un mensaje de error.
$path = __DIR__ . "/{$controllerName}.php";

if (file_exists($path)) {
    require_once($path);
} else {
    die("ERROR: No se encontró el archivo del controlador ($controllerName).");
}
