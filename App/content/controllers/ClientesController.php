<?php

namespace App\content\controllers;

$pageTitle = "Gestión de Clientes";
$contentView = "src/views/clientes.php";

if (file_exists("src/views/components/layout.php")) {
    require_once("src/views/components/layout.php");
} else {
    die("ERROR: No se pudo encontrar la vista de clientes");
}
