<?php

namespace core;

session_start();

require_once 'vendor/autoload.php';

if(file_exists("content/controllers/FrontController.php")){
    require_once("content/controllers/FrontController.php");
}else{
    die("ERROR: No se pudo encontrar el controladro principal");
}
