// Login

// Este script se encarga de manejar el proceso de login en el sistema. Captura el evento de clic en el botón de login,
// obtiene los valores de email y contraseña ingresados por el usuario, y realiza una solicitud AJAX
// al servidor para validar las credenciales.
$("#loggearBtn").click(function (e) {
  e.preventDefault();
  
  const email = $("#email").val();
  const password = $("#password").val();

  // Validación básica en el cliente
  if (!email || !password) {
      Swal.fire("Error", "Por favor, completa todos los campos", "error");
      return;
  }

  $.ajax({
    url: "index.php?url=login",
    method: "POST",
    data: { email: email, password: password },
    dataType: "json", // Es importante esperar un JSON
    success: function (response) {
      // Validamos si el servidor dice que el login es correcto
      if (response.status === "success") {
        window.location.href = "index.php?url=home";
      } else {
        // Si el servidor responde con éxito de conexión pero error de credenciales
        Swal.fire("Error", response.error || "Credenciales incorrectas", "error");
      }
    },
    error: function (xhr, status, error) {
      // El error de AJAX es para fallos de servidor (500, 404, etc.)
      const mensaje = xhr.responseJSON?.error || "Error de conexión con el servidor";
      Swal.fire("Error", mensaje, "error");
    },
  });
});