// Login

// Este script se encarga de manejar el proceso de login en el sistema. Captura el evento de clic en el botón de login,
// obtiene los valores de email y contraseña ingresados por el usuario, y realiza una solicitud AJAX
// al servidor para validar las credenciales.
$("#loggearBtn").click(function (e) {
  e.preventDefault();
  const email = $("#email").val();
  const password = $("#password").val();

  $.ajax({
    url: "index.php?url=login",
    method: "POST",
    data: { email: email, password: password },
    success: function (data) {
      // Redirigir al home después del login exitoso
      window.location.href = "index.php?url=home";
    },
    error: function (xhr, status, error) {
      alert("Error al iniciar sesión: " + xhr.responseJSON.error);
    },
  });
});
