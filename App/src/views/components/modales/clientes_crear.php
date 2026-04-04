<!-- Formulario para crear cliente (Contenido del Modal) -->
<form id="formCrearCliente" class="space-y-5">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <!-- Nombre de Cliente -->
        <div class="space-y-2">
            <label for="nombre_cliente" class="text-xs font-bold text-slate-500 uppercase tracking-wider ml-1">Nombre de Cliente</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-user text-slate-400 text-xs"></i>
                </div>
                <input type="text" name="nombre_cliente" id="nombre_cliente" placeholder="ej. Julian" 
                    class="w-full pl-9 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-tertiary focus:border-tertiary outline-none transition-all text-sm text-slate-700" required>
            </div>
        </div>

        <!-- Apellido de Cliente -->
        <div class="space-y-2">
            <label for="apellido_cliente" class="text-xs font-bold text-slate-500 uppercase tracking-wider ml-1">Apellido de Cliente</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-user text-slate-400 text-xs"></i>
                </div>
                <input type="text" name="apellido_cliente" id="apellido_cliente" placeholder="ej. Pérez" 
                    class="w-full pl-9 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-tertiary focus:border-tertiary outline-none transition-all text-sm text-slate-700" required>
            </div>
        </div>

        <!-- Correo Electrónico -->
        <div class="space-y-2">
            <label for="correo" class="text-xs font-bold text-slate-500 uppercase tracking-wider ml-1">Correo Electrónico</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-envelope text-slate-400 text-xs"></i>
                </div>
                <input type="email" name="correo" id="correo" placeholder="usuario@correo.com" 
                    class="w-full pl-9 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-tertiary focus:border-tertiary outline-none transition-all text-sm text-slate-700" required>
            </div>
        </div>

        <!-- Teléfono -->
        <div class="space-y-2">
            <label for="telefono" class="text-xs font-bold text-slate-500 uppercase tracking-wider ml-1">Número de Teléfono</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-phone text-slate-400 text-xs"></i>
                </div>
                <input type="tel" name="telefono" id="telefono" placeholder="ej. +1234567890" 
                    class="w-full pl-9 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-tertiary focus:border-tertiary outline-none transition-all text-sm text-slate-700" required>
            </div>
        </div>

        <!-- Dirección -->
        <div class="space-y-2">
            <label for="direccion" class="text-xs font-bold text-slate-500 uppercase tracking-wider ml-1">Dirección</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-map-marker-alt text-slate-400 text-xs"></i>
                </div>
                <input type="text" name="direccion" id="direccion" placeholder="ej. Calle Principal 123" 
                    class="w-full pl-9 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-tertiary focus:border-tertiary outline-none transition-all text-sm text-slate-700" required>
            </div>
        </div>

      
    </div>

  
</form>
