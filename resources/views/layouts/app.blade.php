<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DevStagram - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <header class="p-5 border-b bg-slate-900 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/"><h1 class="text-3xl text-white">DevStagram</h1></a>

            <nav class="flex gap-2 items-center">
                <a class="text-white uppercase font-semibold" href="">Login</a>
                <a class="text-white uppercase font-semibold" href="{{ route('register') }}">Crear Cuenta</a>
            </nav>

        </div>
    </header>

    <main class="container mx-auto mt-10">
        <h2 class="font-medium text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>

    <footer class="mt-10 text-center p-5 uppercase text-gray-500 font-bold">
        DevStagram - Todos los derechos reservados {{ now()->year }}
    </footer>
</body>

</html>