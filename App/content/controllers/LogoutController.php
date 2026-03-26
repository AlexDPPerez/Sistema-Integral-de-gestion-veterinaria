<?php

namespace App\content\controllers;

// Eliminar todas las variables de sesión
session_unset();

// Destruir la sesión en el servidor
session_destroy();

// Redirigir al formulario de login
header("Location: ?url=login");
exit();