<?php

if (!isset($_SESSION['logeado']) || $_SESSION['logeado'] != 1) {
    http_response_code(401); // Informamos que no está autorizado
    echo json_encode(["error" => "Sesión expirada"]);
    exit();
}

use App\content\models\UsuariosModel;


$isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) ) == 'xmlhttprequest';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $usuariosModel = new UsuariosModel();
    $usuarios = $usuariosModel->obtenerUsuarios();

    if($isAjax){    
        echo json_encode($usuarios);
        exit();
    }
}


$pageTitle = "Gestión de Usuarios";
$contentView = "src/views/usuarios.php";

if ($_SERVER['REQUEST_METHOD'] != '' && file_exists("src/views/components/layout.php")) {
    require_once("src/views/components/layout.php");
} else {
    die("ERROR: No se pudo encontrar la vista de usuarios");
}
