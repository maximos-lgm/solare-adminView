<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <section class="relative min-h-screen flex items-center justify-center">

    {{-- Imagen de fondo --}}
    <div class="absolute inset-0 z-0">
        <img
            src="{{ asset('imagenes/login-solare.jpg') }}"
            alt="background"
            class="w-full h-full object-cover"
        />
        {{-- Overlay oscuro encima de la imagen --}}
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    {{-- Contenido del login --}}
    <div class="relative z-10 w-full max-w-md px-6">

        {{-- Logo --}}
        {{-- <a href="#" class="flex items-center justify-center mb-6 text-2xl font-semibold text-white">
            <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
            Flowbite
        </a> --}}

        {{-- Card del formulario --}}
        <div class="w-full bg-gray-800/90 rounded-xl shadow-2xl border border-gray-700 backdrop-blur-sm">
            <div class="p-8 space-y-5">
                <h1 class="text-2xl font-bold text-white text-center">
                    INICIO DE SESIÓN ADMINISTRACION SOLARE
                </h1>

                <form class="space-y-5" action="#">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-white">CORRE</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-700 border border-gray-600 text-white rounded-lg block w-full p-3 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="name@company.com" required>
                    </div>

                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-white">CONTRASEÑA</label>
                        <input type="password" name="password" id="password"
                            placeholder="••••••••"
                            class="bg-gray-700 border border-gray-600 text-white rounded-lg block w-full p-3 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500"
                            required>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            {{-- <input id="remember" type="checkbox"
                                class="w-4 h-4 border border-gray-600 rounded bg-gray-700 focus:ring-blue-500"> --}}
                            {{-- <label for="remember" class="text-sm text-gray-300">Remember me</label> --}}
                        </div>
                        {{-- <a href="#" class="text-sm text-blue-400 hover:underline">Forgot password?</a> --}}
                    </div>

                    <button type="submit"
                        class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center transition-colors">
                        ENTRAR
                    </button>

                    {{-- <p class="text-sm text-center text-gray-400">
                        Don't have an account? <a href="#" class="text-blue-400 hover:underline">Sign up</a>
                    </p> --}}
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>