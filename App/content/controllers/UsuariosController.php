<?php

// Verificar que el usuario esté logeado antes de permitir el acceso a este controlador. 
// Si no está logeado, se devuelve un error 401 y un mensaje JSON indicando que la sesión ha expirado. 
// Esto es importante para proteger las rutas que requieren autenticación y evitar accesos no autorizados.
if (!isset($_SESSION['logeado']) || $_SESSION['logeado'] != 1) {
    http_response_code(401); // Informamos que no está autorizado
    echo json_encode(["error" => "Sesión expirada"]);
    exit();
}

use App\content\models\UsuariosModel;


// isAjax se utiliza para determinar si la petición es una solicitud AJAX (por ejemplo, desde JavaScript) o 
// una solicitud normal (por ejemplo, al cargar la página). Esto permite que el controlador responda de manera 
// diferente según el tipo de solicitud, devolviendo JSON para AJAX y cargando vistas para solicitudes normales.
$isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) ) == 'xmlhttprequest';


// Si la petición es GET, se asume que es para obtener el listado de usuarios. Se llama al modelo para 
// obtener los usuarios y se devuelve la lista en formato JSON. Esto es utilizado por la tabla de usuarios en
// la vista para cargar los datos dinámicamente.
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $usuariosModel = new UsuariosModel();
    $usuarios = $usuariosModel->obtenerUsuarios();

    if($isAjax){    
        echo json_encode($usuarios);
        exit();
    }
}

// Manejo de creación de usuario vía POST desde el formulario del modal de creación de usuario en la vista de usuarios. El formulario envía los datos a esta misma ruta (index.php?url=usuarios) y se procesa aquí.
// Si la petición es POST, se asume que viene del formulario de creación de usuario. Se extraen los datos, se llama al modelo para insertar el nuevo usuario y se devuelve una respuesta JSON indicando éxito o error.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    $usuariosModel = new UsuariosModel();
    $resultado = $usuariosModel->insertarUsuario($username, $email, $password, $rol);
    if($isAjax){
        if ($resultado) {
            echo json_encode(["success" => "Usuario creado exitosamente"]);
        } else {
            echo json_encode(["error" => "Error al crear el usuario"]);
        }
        exit();
    }
}

// Si la petición no es AJAX, se carga la vista de usuarios. Se establece el título de la página 
// y la vista que se va a cargar dentro del layout principal. Esto es para cuando el usuario accede 
// a la página de usuarios desde el menú lateral.
$pageTitle = "Gestión de Usuarios";
$contentView = "src/views/usuarios.php";

if ($_SERVER['REQUEST_METHOD'] != '' && file_exists("src/views/components/layout.php")) {
    require_once("src/views/components/layout.php");
} else {
    die("ERROR: No se pudo encontrar la vista de usuarios");
}
