<?php

namespace App\content\controllers;

$pacientes = [
    ['id' => 1, 'nombre' => 'Max', 'especie' => 'Perro', 'raza' => 'Golden Retriever', 'propietario' => 'Juan Pérez', 'edad' => '3 años'],
    ['id' => 2, 'nombre' => 'Luna', 'especie' => 'Gato', 'raza' => 'Siamés', 'propietario' => 'Ana García', 'edad' => '2 años'],
    ['id' => 3, 'nombre' => 'Rocky', 'especie' => 'Perro', 'raza' => 'Bulldog', 'propietario' => 'Carlos López', 'edad' => '5 años'],
];

$pageTitle = "Gestión de Pacientes";
$contentView = "src/views/pacientes.php";

if (file_exists("src/views/components/layout.php")) {
    require_once("src/views/components/layout.php");
} else {
    die("ERROR: No se pudo encontrar la vista de pacientes");
}
