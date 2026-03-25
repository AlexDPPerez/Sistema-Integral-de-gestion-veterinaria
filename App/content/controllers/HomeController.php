<?php

namespace App\content\controllers;

$pageTitle = "Inicio";
$contentView = "src/views/home.php";

if(file_exists("src/views/components/layout.php")){
    require_once("src/views/components/layout.php");
}else{
    die("ERROR: No se pudo encontrar la vista principal");
}
