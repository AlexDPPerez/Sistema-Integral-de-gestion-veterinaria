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
