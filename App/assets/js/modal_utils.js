
/* Utilidades para el manejo de modales */

// Delegación de eventos para cualquier elemento con el atributo data-url, lo que permite abrir un modal con contenido dinámico cargado desde un archivo PHP específico
$(document).on('click', '[data-url]', function (e) {
    e.preventDefault();
    const titulo = $(this).data('titulo') || 'Información';
    const urlFragmento = $(this).data('url');
    const textoConfirmar = $(this).data('texto-confirmar');
    const idBotonConfirmar = $(this).data('id-confirmar');

    if (urlFragmento) abrirModal(titulo, urlFragmento, textoConfirmar, idBotonConfirmar);
});

// Función para abrir el modal con contenido dinámico cargado desde un archivo PHP específico en la carpeta de modales
// El archivo PHP debe retornar el contenido HTML que se desea mostrar dentro del modal, y se espera que esté ubicado en "src/views/components/modales/{url}.php"
// Ejemplo de uso: abrirModal('Crear Usuario', 'form_crear') cargará el contenido de "src/views/components/modales/form_crear.php" dentro del modal
function abrirModal(titulo, url, TextoConfirmar , idBtn) {

    console.log("Abriendo modal con título:", titulo, ", ID: "+ idBtn + " y URL:", url);

    url = "src/views/components/modales/" + url + ".php";

    // Establecer el título
    $('#modalTituloGeneral').text(titulo);
    // Establecer el texto del botón de confirmación, si se proporciona
    $('.confirmarBtn').attr('id', idBtn || 'modalBotonConfirmarGeneral');
    // Si no se proporciona un texto específico para el botón de confirmación, se mantendrá el valor predeterminado "Confirmar"
    $('.confirmarBtn').text(TextoConfirmar || 'Confirmar');

    // Mostrar un indicador de carga mientras se obtiene el contenido
    $('#modalContenidoGeneral').html(`
        <div class="flex flex-col justify-center items-center py-12 gap-4">
            <i class="fas fa-circle-notch fa-spin text-4xl text-tertiary"></i>
            <span class="text-slate-400 font-medium animate-pulse text-xs uppercase tracking-widest">Cargando formulario...</span>
        </div>
    `);

    // Mostrar el modal inmediatamente
    $('#modalGeneral').removeClass('hidden');

    // Inyectar el contenido mediante .load()
    $('#modalContenidoGeneral').load(url, function(respuesta, estado, xhr) {
        if (estado === "error") {
            $(this).html(`
                <div class="p-4 bg-red-50 border border-red-100 rounded-xl flex items-center gap-3 text-red-600">
                    <i class="fas fa-exclamation-circle text-lg"></i>
                    <p class="text-sm font-medium">Error al cargar el contenido: ${xhr.status} ${xhr.statusText}</p>
                </div>
            `);
        }
    });
}

// Función para cerrar el modal
function cerrarModal() {
    $('#modalGeneral').addClass('hidden');
    // Opcional: Limpiar el contenido al cerrar para que no se vea el anterior al abrir uno nuevo
    setTimeout(() => {
        $('#modalContenidoGeneral').html('');
    }, 300);
}