@extends('layouts.app')

@section('titulo')
    Pagina de Usuario
@endsection

@section('contenido')
<div class="flex justify-center">

    <div class="w-full md:w-8/12 lg:w-6/12 md:flex">

        <div class="md:w-1/2 lg:w-6/12 px-5">
            <img src="{{ asset('imagenes/usuario.svg') }}" alt="imagen de usuario">
        </div >

        <div class="md:w-1/12 lg:w-6/12 px-5 ">
             {{-- <p class="font-bold uppercase">{{ auth()->user()->username }}</p> --}}
             <p class="font-bold uppercase mb-5">{{ auth()->user()->name }}</p>

             <p class="text-gray-800 text-sm mb-3 font-bold">
                 2
                 <span class="font-normal mt-10">Seguidores</span>
             </p>
             <p class="text-gray-800 text-sm mb-3 font-bold">
                 2
                 <span class="font-normal mt-10">siguiendo</span>
             </p>
             <p class="text-gray-800 text-sm mb-3 font-bold">
                 0
                 <span class="font-normal mt-10">Post</span>
             </p>
        </div>
    </div>
</div>
@endsection