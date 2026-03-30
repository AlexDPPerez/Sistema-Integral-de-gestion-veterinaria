$.ajax({
  url: "index.php?url=usuarios",
  method: "GET",
  dataType: "json",
  success: function (data) {
    $("#tablaUsuarios").DataTable({
      data: data,
      columns: [
        { title: "ID", data: "id" },
        { title: "Nombre", data: "nombre_usuario" },
        { title: "Email", data: "email" },
        { title: "Contraseña", data: "password" },
        { title: "Rol", data: "rol" },
        {
          title: "Acciones",
          data: null,
          render: function (data, type, row) {
            return `
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-2 py-1 rounded-lg text-xs font-medium transition-colors">Editar</button>
                        <button class="bg-red-600 hover:bg-red-700 text-white px-2 py-1 rounded-lg text-xs font-medium transition-colors">Eliminar</button>
                    `;
          },
        },
      ],
    });
  },
});
