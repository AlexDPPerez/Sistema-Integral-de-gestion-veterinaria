<div class="max-w-md w-full">
    <!-- Card de Login -->
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
        <div class="p-8">
            <!-- Logo y Encabezado -->
            <div class="text-center mb-10">
                <div class="inline-flex p-3 rounded-2xl bg-slate-50 mb-4">
                    <img src="assets/images/logo.png" alt="Logo" class="w-16 h-16 object-contain">
                </div>
                <h1 class="text-2xl font-bold text-primary tracking-tight">Milano <span class="text-tertiary">Real C.A.</span></h1>
                <p class="text-slate-500 mt-2 text-sm uppercase tracking-widest font-medium">Gestión Veterinaria</p>
            </div>

            <?php if (isset($error)): ?>
                <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 text-red-700 text-sm flex items-center gap-3 rounded-r-lg">
                    <i class="fas fa-exclamation-circle"></i>
                    <p><?= $error ?></p>
                </div>
            <?php endif; ?>

            <!-- Formulario -->
            <form  class="space-y-6">
                <div>
                    <label class="block text-sm font-bold text-primary mb-2 uppercase tracking-wide">Usuario</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                            <i class="fas fa-user"></i>
                        </span>
                        <input type="text" name="email" id="email" required
                            class="block w-full pl-10 pr-3 py-3 border border-slate-200 rounded-xl leading-5 bg-slate-50 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-tertiary focus:border-transparent transition-all"
                            placeholder="nombre@ejemplo.com">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-primary mb-2 uppercase tracking-wide">Contraseña</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" name="password" id="password" required
                            class="block w-full pl-10 pr-3 py-3 border border-slate-200 rounded-xl leading-5 bg-slate-50 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-tertiary focus:border-transparent transition-all"
                            placeholder="••••••••">
                    </div>
                </div>

                <button type="button" id="loggearBtn"
                    class="w-full flex justify-center py-4 px-4 border border-transparent rounded-xl shadow-lg text-sm font-bold text-primary bg-tertiary hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-tertiary transition-all uppercase tracking-widest">
                    Acceder al Sistema
                </button>
            </form>
        </div>
    </div>

    <!-- Footer del Login -->
    <p class="text-center mt-8 text-slate-400 text-sm">
        &copy; <?= date('Y') ?> Milano Real C.A. - Todos los derechos reservados.
    </p>
</div>

<script src="assets/js/login.js"></script>