<!-- Formulario para crear un paciente (Contenido del Modal) -->
<form id="formCrearPaciente" class="space-y-5">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <!-- Nombre de Paciente -->
        <div class="space-y-2">
            <label for="nombre_paciente" class="text-xs font-bold text-slate-500 uppercase tracking-wider ml-1">Nombre de Paciente</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-user text-slate-400 text-xs"></i>
                </div>
                <input type="text" name="nombre_paciente" id="nombre_paciente" placeholder="ej. jperez" 
                    class="w-full pl-9 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-tertiary focus:border-tertiary outline-none transition-all text-sm text-slate-700" required>
            </div>
        </div>

        <!-- Especie -->
        <div class="space-y-2">
            <label for="especie" class="text-xs font-bold text-slate-500 uppercase tracking-wider ml-1">Especie</label>
            <input type="text" name="especie" id="especie" placeholder="ej. Canino" 
                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-tertiary focus:border-tertiary outline-none transition-all text-sm text-slate-700" required>
        </div>

        <!-- Raza -->
        <div class="space-y-2">
            <label for="raza" class="text-xs font-bold text-slate-500 uppercase tracking-wider ml-1">Raza</label>
            <input type="text" name="raza" id="raza" placeholder="ej. Labrador Retriever" 
                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-tertiary focus:border-tertiary outline-none transition-all text-sm text-slate-700" required>
        </div>

        <!-- Propietario -->
        <div class="space-y-2">
            <label for="propietario" class="text-xs font-bold text-slate-500 uppercase tracking-wider ml-1">Propietario</label>
            <input type="text" name="propietario" id="propietario" placeholder="ej. Juan Pérez" 
                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-tertiary focus:border-tertiary outline-none transition-all text-sm text-slate-700" required>
        </div>

        <!-- Edad -->
        <div class="space-y-2">
            <label for="edad" class="text-xs font-bold text-slate-500 uppercase tracking-wider ml-1">Edad</label>
            <input type="number" name="edad" id="edad" placeholder="ej. 5" min="0"
                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-tertiary focus:border-tertiary outline-none transition-all text-sm text-slate-700" required>
        </div>  

        
    </div>

    <div class="mt-2 p-3 bg-tertiary/5 border border-tertiary/10 rounded-xl flex gap-3 items-start">
        <i class="fas fa-shield-alt text-tertiary mt-0.5"></i>
        <p class="text-[11px] text-slate-500 leading-tight">
            El usuario creado tendrá acceso a las funciones correspondientes a su rol. Asegúrese de asignar los permisos correctamente.
        </p>
    </div>
</form>
