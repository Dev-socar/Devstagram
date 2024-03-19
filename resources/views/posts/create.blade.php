@extends('layouts.app')

@section('titulo')
    Crea una nueva Publicación
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
    <div class="md:flex md:justify-between md:items-center ">
        <div class="md:w-6/12 px-5">
            <form id="dropzone" action="{{route('imagenes.store')}}" method="POST" enctype="multipart/form-data" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>

        <div class="md:w-6/12 bg-slate-700 p-3 rounded-lg shadow-xl mt-10 md:scroll-mt-0.5">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="titulo" class="mb-2 block font-semibold uppercase text-gray-300">Título</label>
                    <input type="text" id="titulo" name="titulo" placeholder="Título de la publicación" value="{{ old('titulo') }}"
                        class="bg-gray-50 p-3 w-full rounded-lg outline-none border
                        @error('titulo') border-red-500 animate__animated animate__shakeX @enderror">
                    @error('titulo')
                        <p class=" text-red-500  rounded-lg text-sm text-left">{{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="descripcion" class="mb-2 block font-semibold uppercase text-gray-300">Descripción</label>
                    <textarea id="descripcion" name="descripcion" placeholder="Descripcion de la publicación"
                        class="bg-gray-50 p-3 w-full rounded-lg outline-none border
                        @error('descripcion') border-red-500 animate__animated animate__shakeX @enderror">{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                        <p class=" text-red-500  rounded-lg text-sm text-left">{{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input type="hidden" name="imagen" value="{{old('imagen')}}">
                    @error('imagen')
                        <p class=" text-red-500  rounded-lg text-sm text-left">{{ $message }} </p>
                    @enderror
                </div>

                <input type="submit" value="Publicar"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
