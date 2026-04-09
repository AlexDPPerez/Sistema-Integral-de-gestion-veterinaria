<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Milano Real C.A.' ?></title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/sweetalert2.min.css">
    <script src="assets/js/jquery-4.0.0.min.js"></script>


    <link rel="stylesheet" href="assets/css/dataTables.tailwindcss.css">
    <link rel="stylesheet" href="assets/css/dataTablesCustom.css">
    <script src="assets/js/dataTables.min.js"></script>
    <script src="assets/js/datatables.tailwindcss.js"></script>



    <script src="assets/js/sweetalert2.all.min.js"></script>
</head>

<!-- Se verifica si el usuario está logeado para aplicar diferentes estilos y mostrar u ocultar ciertos elementos en el layout. -->
<?php $logeado = isset($_SESSION['logeado']) && $_SESSION['logeado'] == 1; ?>

<body class="<?= $logeado ? 'bg-slate-50' : 'bg-vt-primary' ?> text-slate-900">

    <!-- Si el usuario está logeado, se incluye el menú lateral. -->
    <?php if ($logeado) {
        include_once("src/views/components/menu_lateral.php");
    } ?>

    <!-- Se incluye el header solo si el usuario está logeado. El header contiene el botón para cerrar sesión
    y otros elementos relacionados con el perfil del usuario. -->
    <div class="<?= $logeado ? 'ml-64' : '' ?> flex flex-col min-h-screen">
        <?php if ($logeado) {
            include_once("src/views/components/header.php");
        } ?>

        <!-- El main es el contenedor principal donde se carga el contenido específico de cada página.
         Si el usuario no está logeado, se centra el contenido (por ejemplo, el formulario de login)
         para mejorar la experiencia visual. -->
        <main class="p-8 flex-grow <?= !$logeado ? 'flex items-center justify-center' : '' ?>">
            <?php include_once($contentView) ?>
        </main>
    </div>

    <!--  Se incluye el modal general que se utiliza para mostrar mensajes, formularios u otros contenidos de
     manera dinámica en diferentes partes del sistema. -->
    <?php include_once("src/views/components/modal_general.php"); ?>

    <script src="assets/js/modal_utils.js"></script>
    <script src="assets/js/cerrarSession.js"></script>
</body>

</html>