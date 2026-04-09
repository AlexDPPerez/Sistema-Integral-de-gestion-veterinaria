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
$isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])) == 'xmlhttprequest';


/**
 * Manejo de la solicitud GET para obtener la lista de usuarios o un usuario específico.
 * Si se proporciona un ID en la consulta, se obtiene ese usuario específico; de lo contrario
 * se obtiene la lista completa de usuarios. Si la solicitud es AJAX, se devuelve la respuesta en formato JSON.
 */
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $usuariosModel = new UsuariosModel();
    $data = null; // Usamos una variable genérica para la respuesta

    if (isset($_GET['id'])) {
        $data = $usuariosModel->obtenerUsuarioPorId($_GET['id']);
    } else {
        $data = $usuariosModel->obtenerUsuarios();
    }

    if ($isAjax) {
        // Asegúrate de que $isAjax esté definido previamente
        header('Content-Type: application/json'); // Buena práctica para AJAX
        echo json_encode($data);
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
    $is_active = $_POST['is_active'];

    $usuariosModel = new UsuariosModel();
    $resultado = $usuariosModel->insertarUsuario($username, $email, $password, $rol, $is_active);
    if ($isAjax) {
        if ($resultado) {
            echo json_encode(["success" => "Usuario creado exitosamente"]);
        } else {
            echo json_encode(["error" => "Error al crear el usuario"]);
        }
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    parse_str(file_get_contents("php://input"), $_PUT);
    $id = $_PUT['id'] ?? null;
    $username = $_PUT['username'] ?? null;
    $email = $_PUT['email'] ?? null;
    $password = $_PUT['password'] ?? null;
    $rol = $_PUT['rol'] ?? null;
    $is_active = $_PUT['is_active'] ?? null;

     $usuariosModel = new UsuariosModel();
    $resultado = $usuariosModel->actualizarUsuario($id, $username, $email, $password, $rol, $is_active);
    if ($isAjax) {
        if ($resultado) {
            echo json_encode(["success" => "Usuario editado exitosamente"]);
        } else {
            echo json_encode(["error" => "Error al editar el usuario"]);
        }
        exit();
    }
}


/* Esta parte del código está manejando el método de solicitud DELETE. 
Verifica si el método de solicitud es DELETE, de ser el caso, toma la id del usuario a eliminar
y ejecuta la eliminación */
if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    parse_str(file_get_contents("php://input"), $_DELETE);
    $id = $_DELETE['id'] ?? null;

    $usuariosModel = new UsuariosModel();
    $resultado = $usuariosModel->eliminarUsuario($id);
    if ($isAjax) {
        if ($resultado) {
            echo json_encode(["success" => "Usuario eliminado exitosamente"]);
        } else {
            echo json_encode(["error" => "Error al eliminar el usuario"]);
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
