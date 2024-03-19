@extends('layouts.app')

@section('titulo')
    Perfil: {{ $user->username }}
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('img/usuario.svg') }}" alt="Imagen Usuario">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-cente md:items-start py-10 md:py-10">

                <p class="text-white text-2xl">{{ $user->username }}</p>

                <p class="text-gray-400 text-sm mb-1 mt-5 font-bold">0
                    <span class="font-normal">Seguidores</span>
                </p>
                <p class="text-gray-400 text-sm mb-1 font-bold">0
                    <span class="font-normal">Siguiendo</span>
                </p>
                <p class="text-gray-400 text-sm mb-1 font-bold">0
                    <span class="font-normal">Posts</span>
                </p>

            </div>
        </div>
    </div>

    <section class="container mx-auto mt-10">
        <h2 class="text-4xl text-center text-white font-black my-10">Publicaciones</h2>

        @if ($posts->count())
            
        <div class="grid md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 w-full md:gap-4 ">
            @foreach ($posts as $post)
                <article>
                    <a href="{{route('posts.show', ['post'=> $post, 'user'=>$user])}}">
                        <img class="hover:scale-105 transition-all ease-linear rounded" src="{{ asset('uploads') . '/' . $post->imagen }}" alt="Imagen del post {{ $post->titulo }}"/>
                    </a>
                </article>
            @endforeach
        </div>
        <div class="my-10">
            {{$posts->links('')}}
        </div>

        @else
        <p class="font-bold text-center text-gray-400 text-sm uppercase">Sin Publicaciones</p>

        @endif
    </section>
@endsection
