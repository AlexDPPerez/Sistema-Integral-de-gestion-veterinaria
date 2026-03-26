<?php

// 1. Si ya está logeado, no debe ver el login, redirigir al home
if (isset($_SESSION['logeado']) && $_SESSION['logeado'] == 1) {
    header("Location: ?url=home");
    exit();
}

// 2. Procesar el formulario POST
if(isset($_POST['username']) && isset($_POST['password'])) {
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
}

// 3. Definir variables para la vista y cargar el layout al final
$pageTitle = "Iniciar Sesión";
$contentView = "src/views/login.php";

if(file_exists("src/views/components/layout.php")){
    require_once("src/views/components/layout.php");
}else{
    die("ERROR: No se pudo encontrar la vista principal");
}