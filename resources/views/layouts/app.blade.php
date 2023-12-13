<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')

    </head>
    <body class="bg-gray-100">
        <header class="bg-green-400 p-5 border-b bg-white shadow-lg flex justify-between content-center items-center">
            <a href="/" class="h-[50px] font-bold">
                <img class="h-[60px] rounded-xl" src="{{ asset('imagenes/samoyed.jpg') }}" alt="logo">
            </a>
            <h1 class="text-3xl font-black">
                Universidad Milo
            </h1>

            <div class="flex gap-5">
                @auth()
                <a href="#" class="font-bold cursor-pointer text-red-500">
                    Admin <span class="font-bold">{{ auth()->user()->name }}</span>
                </a>
                <nav class="flex gap-5 items-center">
                    <a href="{{route('logout')}}" class="font-bold cursor-pointer">Cerrar sesión</a>
                </nav>
                @endauth

                @auth('estudiante')
                <a href="#" class="font-bold cursor-pointer">
                    Hola <span class="font-bold">{{ auth('estudiante')->user()->name }}</span>
                </a>
                <nav class="flex gap-5 items-center">
                    <a href="{{route('logout')}}" class="font-bold cursor-pointer">Cerrar sesión</a>
                </nav>
                @endauth

                @guest('estudiante')
                    <nav class="flex gap-5 items-center">
                        <a href="{{route('login')}}" class="font-bold cursor-pointer">LOGIN</a>
                        <a href="{{route('register')}}" class="font-bold cursor-pointer">REGISTRARSE</a>
                    </nav>
                @endguest
            </div>

        </header>
        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
                @yield('contenido')
        </main>
        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            Milo - Project {{date('Y')}}
        </footer>
    </body>
</html>
