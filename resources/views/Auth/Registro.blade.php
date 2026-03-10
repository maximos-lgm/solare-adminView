<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <section class="relative min-h-screen flex items-center justify-center py-8">

    {{-- Imagen de fondo --}}
    <div class="absolute inset-0 z-0">
        <img
            src="{{ asset('imagenes/login-solare.jpg') }}"
            alt="background"
            class="w-full h-full object-cover"
        />
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    {{-- Contenido --}}
    <div class="relative z-10 w-full max-w-2xl px-6">
        <div class="w-full bg-gray-800/90 rounded-xl shadow-2xl border border-gray-700 backdrop-blur-sm">
            <div class="p-8">

                <h1 class="text-2xl font-bold text-white text-center mb-6">
                    NUEVO ADMINISTRADOR
                </h1>

                <form action="#" class="space-y-4">

                    {{-- Fila 1: Nombre y Apellido Paterno --}}
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-white">NOMBRE</label>
                            <input type="text" name="nombre"
                                class="bg-gray-700 border border-gray-600 text-white rounded-lg block w-full p-3 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Juan" required>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-white">APELLIDO PATERNO</label>
                            <input type="text" name="apellido_paterno"
                                class="bg-gray-700 border border-gray-600 text-white rounded-lg block w-full p-3 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Pérez" required>
                        </div>
                    </div>

                    {{-- Fila 2: Apellido Materno y Correo --}}
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-white">APELLIDO MATERNO</label>
                            <input type="text" name="apellido_materno"
                                class="bg-gray-700 border border-gray-600 text-white rounded-lg block w-full p-3 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="García" required>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-white">CORREO</label>
                            <input type="email" name="email"
                                class="bg-gray-700 border border-gray-600 text-white rounded-lg block w-full p-3 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="name@company.com" required>
                        </div>
                    </div>

                    {{-- Fila 3: Contraseña y Rol --}}
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-white">CONTRASEÑA</label>
                            <input type="password" name="password"
                                placeholder="••••••••"
                                class="bg-gray-700 border border-gray-600 text-white rounded-lg block w-full p-3 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500"
                                required>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-white">ROL</label>
                            <select name="rol"
                                class="bg-gray-700 border border-gray-600 text-white rounded-lg block w-full p-3 focus:ring-blue-500 focus:border-blue-500" required>
                                <option value="" disabled selected>Selecciona un rol</option>
                                <option value="admin">Administrador</option>
                                <option value="vendedor">Vendedor</option>
                                <option value="almacen">Almacén</option>
                            </select>
                        </div>
                    </div>

                    {{-- Botón --}}
                    <button type="submit"
                        class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center transition-colors mt-2">
                        REGISTRAR
                    </button>

                    {{-- <p class="text-sm text-center text-gray-400">
                        ¿Ya tienes cuenta? <a href="/login" class="text-blue-400 hover:underline">Iniciar sesión</a>
                    </p> --}}

                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>