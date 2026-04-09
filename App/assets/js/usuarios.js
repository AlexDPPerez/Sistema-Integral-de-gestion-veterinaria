// usuarios.js

// Función para cargar los usuarios y mostrar en la tabla
const tablaUsuarios = $("#tablaUsuarios").DataTable({
  ajax: {
    url: "index.php?url=usuarios",
    dataSrc: "", // Si tu JSON es una lista directa [{}, {}], usa "". Si viene en { "data": [] }, quita esta línea.
  },
  columns: [
    { title: "ID", data: "id" },
    { title: "Nombre", data: "username" },
    { title: "Email", data: "email" },
    { title: "Contraseña", data: "password" },
    { title: "Rol", data: "rol" },
    { title: "Estado", data: "is_active", render: function (data) {
        if (data == 1) {
          return '<span class="text-green-600 font-semibold">Activo</span>';
        } else {
          return '<span class="text-red-600 font-semibold">Inactivo</span>';
        }
    }},
    {
      title: "Acciones",
      data: null,
      render: function (data, type, row) {
     
        return `
                    <button 
                    data-titulo="Editar Usuario"
                    data-url="usuarios_crear"
                    data-id-confirmar="btnEditarUsuario"
                    data-texto-confirmar="Guardar"
                    data-id="${row.id}"
                    class="editar_btn bg-blue-600 hover:bg-blue-700 text-white px-2 py-1 rounded-lg text-xs font-medium transition-colors">Editar</button>
                `;
      },
    },
  ],
});

// Manejo de la acción desde el botón de confirmar del modal
$(document).on("click", "#btnGuardarUsuario", function (e) {
  e.preventDefault();

  const $form = $("#formCrearUsuario");

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
        confirmButtonColor: "#3085d6",
      });
      cerrarModal();
      tablaUsuarios.ajax.reload();
    },
    error: function (xhr, status, error) {
      Swal.fire({
        title: "Error",
        text:
          "No se pudo crear el usuario: " + (xhr.responseJSON?.error || error),
        icon: "error",
      });
    },
  });
});

/*
Manejo de la acción desde el botón de editar del modal 
 */

$(document).on("click", ".editar_btn", function (e) {
  const idUsuario = $(this).data("id");

  $.ajax({
    url: "index.php?url=usuarios",
    method: "GET",
    data: { id: idUsuario },
    dataType: "json",
    success: function (response) {
      console.log(response);

      // Seleccionamos el formulario para buscar dentro de él
      const form = $("#formCrearUsuario");
      form.find("#usuario_id").val(idUsuario);

      // Seteamos los valores usando el atributo name (más seguro y limpio)
      form.find("input[name='username']").val(response.username);
      form.find("input[name='email']").val(response.email);
      form.find("select[name='rol']").val(response.rol);

      form.find("input[name='password']").val(""); // Mejor dejarla vacía para edición
    },
    error: function (xhr, status, error) {
      Swal.fire({
        title: "Error",
        text:
          "No se pudo cargar el usuario: " + (xhr.responseJSON?.error || error),
        icon: "error",
      });
    },
  });
});

/*
Manejo de la acción desde el botón de confirmar del modal para editar 
 */

$(document).on("click", "#btnEditarUsuario", function (e) {
  e.preventDefault();
  $("#contrasena").prop("required", false); // Hacemos que la contraseña no sea obligatoria para edición

  const $form = $("#formCrearUsuario");

  // Validar campos requeridos nativos de HTML5 antes de enviar
  if (!$form[0].checkValidity()) {
    $form[0].reportValidity();
    return;
  }
  const form = $("#formCrearUsuario").serialize();
 

  Swal.fire({
    title: "¿Confirmar edición?",
    text: "¿Deseas guardar los cambios realizados al usuario?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sí, guardar",
    cancelButtonText: "No, cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: "index.php?url=usuarios",
        method: "PUT",
        data: form,
        success: function (response) {
          Swal.fire({
            title: "¡Logrado!",
            text: "Usuario editado exitosamente",
            icon: "success",
            confirmButtonColor: "#3085d6",
          });
          cerrarModal();
          $("#contrasena").prop("required", true); // Volvemos a hacerla obligatoria para creación
          tablaUsuarios.ajax.reload();
        },
      });
    }
  });
});
