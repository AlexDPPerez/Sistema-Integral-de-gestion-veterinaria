<!-- Formulario para crear usuario (Contenido del Modal) -->
<form id="formCrearUsuario" class="space-y-5">
    <input type="hidden" name="id" id="usuario_id">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <!-- Nombre de Usuario -->
        <div class="space-y-2">
            <label for="nombre_usuario" class="text-xs font-bold text-slate-500 uppercase tracking-wider ml-1">Nombre de Usuario</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-user text-slate-400 text-xs"></i>
                </div>
                <input type="text" name="username" id="nombre_usuario" placeholder="ej. jperez"
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
                <input type="email" name="email" id="correo" placeholder="usuario@correo.com"
                    class="w-full pl-9 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-tertiary focus:border-tertiary outline-none transition-all text-sm text-slate-700" required>
            </div>
        </div>

        <!-- Contraseña -->
        <div class="space-y-2">
            <label for="contrasena" class="text-xs font-bold text-slate-500 uppercase tracking-wider ml-1">Contraseña</label>
            <input type="password" name="password" id="contrasena" placeholder="••••••••"
                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-tertiary focus:border-tertiary outline-none transition-all text-sm text-slate-700" required >
        </div>

        <!-- Rol -->
        <div class="space-y-2">
            <label for="rol" class="text-xs font-bold text-slate-500 uppercase tracking-wider ml-1">Rol del Sistema</label>
            <select name="rol" id="rol" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-tertiary focus:border-tertiary outline-none transition-all text-sm text-slate-700 cursor-pointer appearance-none">
                <option value="veterinario">Veterinario</option>
                <option value="admin">Administrador</option>
                <option value="asistente">Asistente</option>
            </select>
        </div>

        <!-- Estado (Activo/Inactivo) -->
        <div class="space-y-2">
            <label for="estado" class="text-xs font-bold text-slate-500 uppercase tracking-wider ml-1">Estado</label>
            <select name="is_active" id="estado" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-tertiary focus:border-tertiary outline-none transition-all text-sm text-slate-700 cursor-pointer appearance-none">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>
    </div>

    <div class="mt-2 p-3 bg-tertiary/5 border border-tertiary/10 rounded-xl flex gap-3 items-start">
        <i class="fas fa-shield-alt text-tertiary mt-0.5"></i>
        <p class="text-[11px] text-slate-500 leading-tight">
            El usuario creado tendrá acceso a las funciones correspondientes a su rol. Asegúrese de asignar los permisos correctamente.
        </p>
    </div>
</form>