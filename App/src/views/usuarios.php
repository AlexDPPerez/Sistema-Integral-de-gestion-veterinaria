<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-slate-800">Listado de Usuarios</h1>
    <!-- Botón para crear un nuevo usuario. Se utilizan data-attributes para pasar información al modal, 
     como el título del modal, la URL para cargar el formulario de creación y el ID del botón de confirmación 
     dentro del modal. Esto permite que el mismo modal se reutilice para diferentes acciones (crear, editar, etc.) -->
    <button
        data-titulo="Crear Usuario"
        data-url="usuarios_crear"
        data-id-confirmar="btnGuardarUsuario"
        data-texto-confirmar="Guardar"
        class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg font-medium transition-colors flex items-center gap-2">
        <i class="fas fa-plus text-sm"></i> Nuevo Usuario
    </button>

</div>

<table id="tablaUsuarios" class="min-w-full divide-y divide-slate-300 stripe hover">
    <thead>
        <tr>
          
        </tr>
    </thead>
    <tbody></tbody>
</table>


<script src="assets/js/usuarios.js"></script>