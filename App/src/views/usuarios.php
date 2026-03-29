<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-slate-800">Listado de Usuarios</h1>
    <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg font-medium transition-colors flex items-center gap-2">
        <i class="fas fa-plus text-sm"></i> Nuevo Usuario
    </button>
    
</div>

<table id="tablaUsuarios" class="min-w-full divide-y divide-slate-300 stripe hover">
    <thead>
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">ID</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Nombre</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Rol</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Email</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Acciones</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<script>

data = [
    {id: 1, nombre: 'Admin', rol: 'Administrador', email: 'aaaaaaaa'}
];

$(document).ready(function() {
    $('#tablaUsuarios').DataTable({
        data: data,
        columns: [
            { title: "ID", data: 'id' },
            { title: "Nombre", data: 'nombre' },
            { title: "Rol", data: 'rol' },
            { title: "Email", data: 'email' },
            {
                title: "Acciones",
                data: null,
                render: function(data, type, row) {
                    return `
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-2 py-1 rounded-lg text-xs font-medium transition-colors">Editar</button>
                        <button class="bg-red-600 hover:bg-red-700 text-white px-2 py-1 rounded-lg text-xs font-medium transition-colors">Eliminar</button>
                    `;
                }
            }
        ]
    });
});
    
            
</script>