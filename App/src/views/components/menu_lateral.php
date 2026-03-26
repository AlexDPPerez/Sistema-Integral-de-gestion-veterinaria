<?php
$paginas = [
    'home/index' => [
        'nombre' => 'Inicio',
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>'
    ],
    'clientes/index' => [
        'nombre' => 'Clientes',
        'icon' => '<path d="M10 5.172C10 3.782 8.423 2.679 6.5 3c-2.123.354-2.5 3.558-2.5 3.558.491.708 1.583.442 1.583.442.511 1.47 2.234 2.333 3.417 1.833V9h2.5"></path><path d="M14 5.172C14 3.782 15.577 2.679 17.5 3c2.123.354 2.5 3.558 2.5 3.558-.491.708-1.583.442-1.583.442-.511 1.47-2.234 2.333-3.417 1.833V9h-2.5"></path><path d="M12 14a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path><path d="M12 17a4 4 0 0 1-4-4"></path><path d="M12 17a4 4 0 0 0 4-4"></path>'
    ],
    'pacientes/index' => [
        'nombre' => 'Pacientes',
        'icon' => '<path d="M10 5.172C10 3.782 8.423 2.679 6.5 3c-2.123.354-2.5 3.558-2.5 3.558.491.708 1.583.442 1.583.442.511 1.47 2.234 2.333 3.417 1.833V9h2.5"></path><path d="M14 5.172C14 3.782 15.577 2.679 17.5 3c2.123.354 2.5 3.558 2.5 3.558-.491.708-1.583.442-1.583.442-.511 1.47-2.234 2.333-3.417 1.833V9h-2.5"></path><path d="M12 14a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path><path d="M12 17a4 4 0 0 1-4-4"></path><path d="M12 17a4 4 0 0 0 4-4"></path>'
    ],
    'veterinarios/index' => [
        'nombre' => 'Veterinarios',
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>'
    ],
    'tratamientos/index' => [
        'nombre' => 'Tratamientos',
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>'
    ],
     'citas/index' => [
        'nombre' => 'Citas',
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>'
    ],
    'consultas/index' => [
        'nombre' => 'Consultas',
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>'
    ],
    'insumos/index' => [
        'nombre' => 'Insumos',
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>'
    ],
    'reportes/index' => [
        'nombre' => 'Reportes',
        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>'
    ],
];

$url_actual = $_GET['url'] ?? 'home/index';
if (strpos($url_actual, '/') === false) {
    $url_actual .= '/index';
}
?>

<aside class="fixed inset-y-0 left-0 z-50 w-64 bg-vt-primary text-slate-100 transition-all duration-300 border-r border-slate-800">
    <div class="flex flex-col h-full">
        <!-- Logo / Nombre del Sistema -->
        <div class="flex items-center justify-center h-20 border-b border-slate-800">
            <div class="flex items-center gap-2">
                <div class="p-1 rounded-lg">
                    <img src="assets/images/logo.png" alt="Logo" class="w-10 h-10 object-contain">
                </div>
                <h1 class="text-xl font-bold tracking-tight text-white">Milano<span class="text-tertiary"> Real C.A.</span></h1>
            </div>
        </div>

        <!-- Navegación -->
        <nav class="flex-grow px-4 py-6 overflow-y-auto">
            <ul class="space-y-2">
                <?php foreach ($paginas as $url => $info):
                    $active = ($url_actual === $url) ? 'bg-slate-900 text-tertiary' : 'text-slate-400 hover:bg-slate-800 hover:text-tertiary';
                ?>
                    <li>
                        <a href="?url=<?= $url ?>" class="flex items-center px-4 py-3 rounded-xl transition-all group <?= $active ?>">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <?= $info['icon'] ?>
                            </svg>
                            <span class="font-medium text-slate-100"><?= $info['nombre'] ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <!-- Perfil de Usuario / Footer del Menú -->
        <div class="p-4 border-t border-slate-800 bg-slate-900/50 space-y-4">
            <div class="flex items-center p-2 rounded-lg bg-slate-800/50 border border-slate-700">
                <div class="flex-shrink-0">
                    <div class="h-9 w-9 rounded-full bg-tertiary flex items-center justify-center text-xs font-bold text-primary uppercase">
                        AD
                    </div>
                </div>
                <div class="ml-3 overflow-hidden flex-grow">
                    <p class="text-sm font-semibold text-white truncate">Admin</p>
                    <p class="text-xs text-slate-400 truncate">Veterinario</p>
                </div>
            </div>
            
            <a href="?url=logout" class="flex items-center justify-center w-full px-4 py-2 text-xs font-bold text-red-400 uppercase tracking-widest border border-red-900/50 rounded-lg hover:bg-red-900/20 hover:text-red-300 transition-all gap-2">
                <i class="fas fa-sign-out-alt"></i>
                Cerrar Sesión
            </a>
        </div>
    </div>
</aside>