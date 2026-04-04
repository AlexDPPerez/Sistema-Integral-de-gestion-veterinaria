<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-primary">Listado de Pacientes</h1>
    <button
        data-titulo="Crear Paciente"
        data-url="pacientes_crear"
        class="bg-tertiary hover:opacity-90 text-primary px-5 py-2.5 rounded-lg font-bold transition-all shadow-sm flex items-center gap-2 uppercase text-sm tracking-wide">
        <i class="fas fa-plus text-sm"></i> Nuevo Paciente
    </button>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead style="background-color: var(--primary-teal);" class="text-white">

            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>