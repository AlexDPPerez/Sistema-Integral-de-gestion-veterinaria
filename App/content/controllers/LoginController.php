<?php



use App\content\models\UsuariosModel;

/* if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Aquí deberías validar las credenciales contra tu base de datos
    // Por simplicidad, vamos a asumir que el usuario es "admin" y la contraseña es "1234"
    if($username === 'admin' && $password === '1234') {
        $_SESSION['logeado'] = 1; // Marcar como logeado
        header("Location: ?url=home"); // Redirigir al home
        exit();
    } else {
        $error = "Credenciales incorrectas. Inténtalo de nuevo.";
    }
} */

$isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) ) == 'xmlhttprequest';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuariosModel = new UsuariosModel();
    $usuario = $usuariosModel->validarUsuario($_POST['email'], $_POST['password']);

    if ($usuario) {
        $_SESSION['logeado'] = 1;
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['nombre_usuario'] = $usuario['username'];

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

$pageTitle = "Iniciar Sesión";
$contentView = "src/views/login.php";

if ($_SERVER['REQUEST_METHOD'] != '' && file_exists("src/views/components/layout.php")) {
    require_once("src/views/components/layout.php");
} else {
    die("ERROR: No se pudo encontrar la vista principal");
}
