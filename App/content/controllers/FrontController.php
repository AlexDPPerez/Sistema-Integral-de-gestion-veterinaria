<?php

namespace App\content\controllers;

$url = isset($_SESSION['logeado']) && $_SESSION['logeado'] == 1
    ? ($_GET['url'] ?? 'home')
    : 'login';

$controllerName = ucfirst($url) . 'Controller';

$path = "content/controllers/{$controllerName}.php";

if (file_exists($path)) {
    require_once($path);
} else {
    die("ERROR: No se encontró el archivo del controlador ($controllerName).");
}
