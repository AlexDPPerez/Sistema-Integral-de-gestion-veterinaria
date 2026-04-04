// usuarios.js

// Función para cargar los usuarios y mostrar en la tabla
const tablaUsuarios = $("#tablaUsuarios").DataTable({
  ajax: {
    url: "index.php?url=usuarios",
    dataSrc: "" // Si tu JSON es una lista directa [{}, {}], usa "". Si viene en { "data": [] }, quita esta línea.
  },
  columns: [
    { title: "ID", data: "id" },
    { title: "Nombre", data: "username" },
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

// Manejo de la acción desde el botón de confirmar del modal
$(document).on('click', '#btnGuardarUsuario', function (e) {
  e.preventDefault();

  const $form = $('#formCrearUsuario');
  
  // Validar campos requeridos nativos de HTML5 antes de enviar
  if (!$form[0].checkValidity()) {
    $form[0].reportValidity();
    return;
  }

  const formData = $form.serialize();
  $.ajax({
    url: "index.php?url=usuarios",
    method: "POST",
    data: formData,
    success: function (response) {
      Swal.fire({
        title: "¡Logrado!",
        text: "Usuario creado exitosamente",
        icon: "success",
        confirmButtonColor: "#3085d6"
      });
      cerrarModal();
      tablaUsuarios.ajax.reload();
    },
    error: function (xhr, status, error) {
      Swal.fire({
        title: "Error",
        text: "No se pudo crear el usuario: " + (xhr.responseJSON?.error || error),
        icon: "error"
      });
    },
  });
});
