// Función para abrir el modal
function abrirModalCerrarSession() {
  Swal.fire({
    title: "¿Estás seguro de cerrar sesión?",
    text: "Esta acción te desconectará de tu cuenta.",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    cancelButtonText: "Cancelar",
    confirmButtonText: "Sí, cerrar sesión",
  }).then((result) => {
    if (result.isConfirmed)
        window.location.href = "?url=logout"; // Redirige a la página de logout
  });
}

$("#btnCerrarSession").on("click", function () {
  abrirModalCerrarSession();
});
