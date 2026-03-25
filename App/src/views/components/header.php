<!-- Header Superior -->
<header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-8 sticky top-0 z-40 shadow-sm">
    <div class="flex items-center gap-4">
        <h2 class="text-lg font-semibold text-slate-800"><?= $pageTitle ?? 'Panel de Control' ?></h2>
    </div>
    
    <div class="flex items-center gap-5">
        <!-- Buscador rápido opcional -->
        <div class="hidden md:block">
            <input type="text" placeholder="Buscar..." class="bg-slate-100 border-none rounded-lg px-4 py-1.5 text-sm focus:ring-2 focus:ring-indigo-500 w-64">
        </div>
        
        <!-- Notificaciones / Acción -->
        <button class="relative p-2 text-slate-500 hover:bg-slate-100 rounded-full transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
            </svg>
            <span class="absolute top-2 right-2.5 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
        </button>
    </div>
</header>