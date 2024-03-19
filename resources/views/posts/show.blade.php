@extends('layouts.app')

@section('titulo')
    {{ $post->titulo }}
@endsection

@section('contenido')
    <div class="container mx-auto flex gap-2">
        <div class="md:w-1/2">
            <img class="rounded object-cover" src="{{ asset('uploads') . '/' . $post->imagen }} "
                alt="Imafen del post {{ $post->titulo }}">
            <div class="p-3">
                <p class=" text-gray-400">0 Likes</p>
                <p class="text-sm text-gray-300">{{ $post->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <p class="font-bold text-white">{{ $post->user->username }}</p>

                <p class="mt-3 text-white">{{ $post->descripcion }}</p>
            </div>

        </div>
        <div class="md:w-1/2">

            <div class="bg-slate-700 rounded-lg shadow-xl p-2">
                    @auth
                <p class="text-xl text-center mb-4 text-white">Agrega un Nuevo Comentario</p>
                <form action="">
                    <div class="mb-5">
                        <label for="comentario"
                            class="mb-2 block font-semibold uppercase text-gray-300">Añade un comentario</label>
                        <textarea id="comentario" name="comentario" placeholder="Agrega un Comentario"
                            class="bg-gray-50 p-3 w-full rounded-lg outline-none border
                        @error('comentario') border-red-500 animate__animated animate__shakeX @enderror"></textarea>
                        @error('comentario')
                            <p class=" text-red-500  rounded-lg text-sm text-left">{{ $message }} </p>
                        @enderror
                    </div>

                     <input type="submit" value="Comentar"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg"/>
                </form>
                @endauth        
            </div>

        </div>
    </div>

@endsection
