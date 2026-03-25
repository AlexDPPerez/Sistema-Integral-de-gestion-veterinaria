<?php

namespace App\content\controllers;

$url = $_GET['url'] ?? 'home';
$urlParts = explode('/', trim($url, '/'));

$controllerName = ucfirst($urlParts[0]) . 'Controller';
$method = $urlParts[1] ?? 'index';

$path = "content/controllers/{$controllerName}.php";

if (file_exists($path)) {
    require_once($path);
} else {
    die("ERROR: No se encontró el archivo del controlador ($controllerName).");
}
