<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Milano Real C.A.' ?></title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- FontAwesome para iconos si decides usarlos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-50 text-slate-900">
    <!-- Componente Fijo: Menú Lateral -->
    <?php include_once("src/views/components/menu_lateral.php") ?>

    <!-- Contenedor de contenido (ml-64 para respetar el ancho del sidebar) -->
    <div class="ml-64 flex flex-col min-h-screen">
        <!-- Componente Fijo: Header -->
        <?php include_once("src/views/components/header.php") ?>

        <!-- Contenido Dinámico de cada módulo -->
        <main class="p-8 flex-grow">
            <?php include_once($contentView) ?>
        </main>
    </div>
</body>
</html>