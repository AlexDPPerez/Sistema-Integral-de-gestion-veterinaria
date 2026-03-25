<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-slate-800">Listado de Pacientes</h1>
    <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg font-medium transition-colors flex items-center gap-2">
        <i class="fas fa-plus text-sm"></i> Nuevo Paciente
    </button>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 border-b border-slate-200">
                <tr>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600 uppercase tracking-wider">Mascota</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600 uppercase tracking-wider">Especie/Raza</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600 uppercase tracking-wider">Propietario</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600 uppercase tracking-wider">Edad</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600 uppercase tracking-wider text-right">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <?php if (!empty($pacientes)): ?>
                    <?php foreach ($pacientes as $p): ?>
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4 text-sm text-slate-500">#<?= $p['id'] ?></td>
                        <td class="px-6 py-4 text-sm font-bold text-slate-900"><?= $p['nombre'] ?></td>
                        <td class="px-6 py-4 text-sm text-slate-600">
                            <span class="px-2 py-1 bg-slate-100 rounded text-xs"><?= $p['especie'] ?></span>
                            <span class="text-slate-400 ml-1"><?= $p['raza'] ?></span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-600 italic"><?= $p['propietario'] ?></td>
                        <td class="px-6 py-4 text-sm text-slate-600"><?= $p['edad'] ?></td>
                        <td class="px-6 py-4 text-sm text-right space-x-2">
                            <button class="text-indigo-600 hover:text-indigo-900 p-1"><i class="fas fa-edit"></i></button>
                            <button class="text-red-600 hover:text-red-900 p-1"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="6" class="px-6 py-10 text-center text-slate-500">No hay pacientes registrados.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>