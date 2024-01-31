<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DevStagram - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-800">
    <header class="p-5  bg-slate-900">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/">
                <h1 class="text-3xl text-white">DevStagram</h1>
            </a>

            @auth
                <nav class="flex gap-2 items-center">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-white text-xl" >Cerrar Sesión</button>
                    </form>
                    <a class="text-white text-xl" href="{{ route('register') }}">Perfil</a>
                </nav>
            @endauth

            @guest
                <nav class="flex gap-2 items-center">
                    <a class="text-white text-xl" href="{{ route('login') }}">Iniciar Sesión</a>
                    <a class="text-white text-xl" href="{{ route('register') }}">Crear Cuenta</a>
                </nav>
            @endguest



        </div>
    </header>

    <main class="container mx-auto mt-10">
        <h2 class="font-medium text-center text-white text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>

    <footer class="mt-10 text-center p-5 uppercase text-gray-300 font-bold">
        DevStagram - Todos los derechos reservados {{ now()->year }}
    </footer>
</body>

</html>
