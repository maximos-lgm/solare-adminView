<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMINISTRACION SOLARE @yield('titulo pagina')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    {{-- Header arriba de todo --}}
    @include('ElementosMain.Header')

    <div class="flex">

        {{-- Sidebar a la izquierda --}}
        @include('ElementosMain.Sidebar')

        {{-- sidebar --}}
        <div class="ml-64 flex-1 flex flex-col min-h-screen">

            {{-- Contenido de la pgina --}}
            <main class="flex-1 p-6">
                @yield('contenido')
            </main>

            {{-- fotter --}}
            @include('ElementosMain.Footer')

        </div>

    </div>

</body>
</html>
