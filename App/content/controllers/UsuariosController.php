<?php

namespace App\content\controllers;

$pageTitle = "Gestión de Usuarios";
$contentView = "src/views/usuarios.php";

if (file_exists("src/views/components/layout.php")) {
    require_once("src/views/components/layout.php");
} else {
    die("ERROR: No se pudo encontrar la vista de usuarios");
}
