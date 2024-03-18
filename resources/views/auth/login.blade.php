@extends('layouts.app')

@section('titulo')
    Iniciar Sesión
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-7/12 ">
            <img src="{{ asset('img/login.jpg') }}" class="rounded-lg shadow-xl" alt="imagen login de usuarios">
        </div>
        <div class="md:w-5/12 bg-slate-700 p-6 rounded-lg shadow-xl">
            <form method="POST" action="{{ route('login') }}" novalidate>
                @csrf
                @if (session('mensaje'))
                    <p class=" text-red-500  rounded-lg text-xl text-center uppercase">{{ session('mensaje') }} </p>
                @endif
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase font-semibold text-gray-300">Email</label>
                    <input type="email" id="email" name="email" placeholder="Tu Email de Registro"
                        value="{{ old('email') }}"
                        class="border p-3 bg-gray-50 w-full rounded-lg outline-none @error('email') border-red-500 animate__animated animate__shakeX @enderror">
                    @error('email')
                        <p class=" text-red-500  rounded-lg text-sm text-left">{{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase font-semibold text-gray-300">Password</label>
                    <input type="password" id="password" name="password" placeholder="Tu Password de Registro"
                        class="border bg-gray-50 p-3 w-full rounded-lg outline-none @error('password') border-red-500 animate__animated animate__shakeX @enderror">
                    @error('password')
                        <p class=" text-red-500  rounded-lg text-sm text-left">{{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-5 flex gap-2">
                    <input type="checkbox" name="remember" class="cursor-pointer" id="remember">
                    <label for="remember" class="cursor-pointer text-gray-300">Mantener mi sesión abierta</label>
                </div>
                <input type="submit" value="Iniciar Sesión"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
