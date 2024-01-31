@extends('layouts.app')

@section('titulo')
    Regístrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-7/12 ">
            <img src="{{ asset('img/registrar.jpg') }}" class="rounded-lg shadow-xl" alt="imagen registro usuarios">
        </div>
        <div class="md:w-5/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block font-semibold uppercase text-gray-500">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="Tu Nombre" value="{{ old('name') }}"
                        class="bg-gray-50 p-3 w-full rounded-lg outline-none border
                        @error('name') border-red-500 animate__animated animate__shakeX @enderror">
                    @error('name')
                        <p class=" text-red-500  rounded-lg text-sm text-left">{{ $message }} </p>
                    @enderror
                </div>
                
                <div class="mb-5">
                    <label for="username" class="mb-2 block font-semibold uppercase text-gray-500">Username</label>
                    <input type="text" id="username" name="username" placeholder="Tu Nombre de Usuario"
                        value="{{ old('username') }}"
                        class="border bg-gray-50 p-3 w-full rounded-lg outline-none @error('username') border-red-500 animate__animated animate__shakeX @enderror">
                    @error('username')
                        <p class=" text-red-500  rounded-lg text-sm text-left">{{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase font-semibold text-gray-500">Email</label>
                    <input type="email" id="email" name="email" placeholder="Tu Email de Registro"
                        value="{{ old('email') }}"
                        class="border p-3 bg-gray-50 w-full rounded-lg outline-none @error('email') border-red-500 animate__animated animate__shakeX @enderror">
                    @error('email')
                        <p class=" text-red-500  rounded-lg text-sm text-left">{{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase font-semibold text-gray-500">Password</label>
                    <input type="password" id="password" name="password" placeholder="Tu Password de Registro"
                        class="border bg-gray-50 p-3 w-full rounded-lg outline-none @error('password') border-red-500 animate__animated animate__shakeX @enderror">
                    @error('password')
                        <p class=" text-red-500  rounded-lg text-sm text-left">{{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block font-semibold uppercase text-gray-500">Repetir
                        Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        placeholder="Repite tu Password" class=" bg-gray-50 border p-3 w-full rounded-lg outline-none">
                </div>
                <input type="submit" value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
