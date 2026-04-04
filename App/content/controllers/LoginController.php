<?php

use App\content\models\UsuariosModel;

// isAjax se utiliza para determinar si la petición es una solicitud AJAX (por ejemplo, desde JavaScript) o 
// una solicitud normal (por ejemplo, al cargar la página). Esto permite que el controlador responda de manera 
// diferente según el tipo de solicitud, devolviendo JSON para AJAX y cargando vistas para solicitudes normales.
$isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) ) == 'xmlhttprequest';

// Si la petición es POST, se asume que viene del formulario de inicio de sesión. 
// Se extraen los datos, se llama al modelo para validar el usuario y se devuelve una respuesta JSON indicando éxito o error. 
// Si la validación es exitosa, se establecen las variables de sesión correspondientes.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuariosModel = new UsuariosModel();
    $usuario = $usuariosModel->validarUsuario($_POST['email'], $_POST['password']);

    if ($usuario) {
        $_SESSION['logeado'] = 1;
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['nombre_usuario'] = $usuario['username'];
        $_SESSION['rol'] = $usuario['rol'];

        if ($isAjax) {
            echo json_encode(["status" => "success", "data" => $usuario]);
            exit();
        }
    } else {
        if ($isAjax) {
            http_response_code(401); 
            echo json_encode(["error" => "Usuario o contraseña incorrectos"]);
            exit();
        }
    }
}


// Si la petición no es AJAX, se carga la vista de inicio de sesión. Se establece el título de la página.
// y la vista que se va a cargar dentro del layout principal.
$pageTitle = "Iniciar Sesión";
$contentView = "src/views/login.php";

if ($_SERVER['REQUEST_METHOD'] != '' && file_exists("src/views/components/layout.php")) {
    require_once("src/views/components/layout.php");
} else {
    die("ERROR: No se pudo encontrar la vista principal");
}
