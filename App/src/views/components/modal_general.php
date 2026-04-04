<!-- Modal General Reutilizable -->
<div id="modalGeneral" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modalTituloGeneral" role="dialog" aria-modal="true">
    <!-- Overlay de fondo con desenfoque -->
    <div class="fixed inset-0 bg-slate-900/60 transition-opacity backdrop-blur-sm"></div>

    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
        <!-- Contenedor del Modal -->
        <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg border border-slate-100">
            
            <!-- Cabecera del Modal -->
            <div class="bg-white px-6 py-4 border-b border-slate-100 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="p-2 bg-tertiary/10 rounded-lg">
                        <i class="fas fa-edit text-tertiary"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 uppercase tracking-tight" id="modalTituloGeneral">
                        Título del Modal
                    </h3>
                </div>
                <button type="button" onclick="cerrarModal()" class="text-slate-400 hover:text-slate-600 hover:bg-slate-100 p-2 rounded-full transition-all">
                    <i class="fas fa-times text-lg"></i>
                </button>
            </div>

            <!-- Cuerpo del Modal -->
            <div class="bg-white px-6 py-6">
                <div id="modalContenidoGeneral" class="text-sm text-slate-600 leading-relaxed">
                    <!-- Aquí se cargará el contenido dinámico -->
                    Cargando información...
                </div>
            </div>

            <!-- Footer del Modal -->
            <div class="bg-slate-50 px-6 py-4 flex flex-row-reverse gap-3">
                <button type="button" id="" class="confirmarBtn inline-flex justify-center rounded-xl bg-vt-primary px-5 py-2.5 text-sm font-bold text-white shadow-sm hover:bg-slate-800 transition-all uppercase tracking-wider">
                    Confirmar
                </button>
                <button type="button" onclick="cerrarModal()" class="inline-flex justify-center rounded-xl bg-white px-5 py-2.5 text-sm font-bold text-slate-700 border border-slate-200 hover:bg-slate-100 transition-all uppercase tracking-wider">
                    Cancelar
                </button>
            </div>
        </div>
    </div>
</div>