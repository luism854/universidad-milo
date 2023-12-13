@extends('layouts.app')

@section('titulo')
    Registrar Matricula
@endsection

@section('contenido')
    <div class="md:flex">
        <div class="md:w-7/12 px-10">
            <h1 class="text-3xl font-bold mb-6 text-center border-b-2 border-black pb-2">Listado de Profesores</h1>
            @forelse ($profesores as $profesor)
            <div class="flex justify-center">
                <div class="flex gap-5 w-[27vw] bg-gray-300 shadow-md rounded-md mb-4 p-6">
                    <div>
                        <img class="h-32" src="{{ asset('imagenes/profile-avatar.png') }}" alt="perfil">
                    </div>
                    <div class=" w-40">
                        <p class="text-lg font-bold mb-2">ID: {{ $profesor->id }}</p>
                        <p class="mb-2">Nombre: {{ $profesor->name }}</p>
                        <p class="mb-2">Apellidos: {{ $profesor->lastname }}</p>
                        <p>Área: {{ $profesor->area }}</p>
                    </div>
                </div>
            </div>
            @empty
                <p class="text-center py-4">No hay profesores disponibles.</p>
            @endforelse
        </div>
        <div class="md:w-5/12 shadow-xl rounded-xl px-10 mt-28">
            <form action="" method="POST">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="name">Nombre</label>
                    <input class="border p-3 w-full rounded-lg" type="text" name="name" id="name" placeholder="Nombre">
                    @error('name')
                        <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="lastname">Apellidos</label>
                    <input class="border p-3 w-full rounded-lg" type="text" name="lastname" id="lastname" placeholder="Apellidos">
                    @error('lastname')
                        <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="email">E-mail</label>
                    <input class="border p-3 w-full rounded-lg" type="email" name="email" id="email" placeholder="E-mail">
                    @error('email')
                        <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="area">Area</label>
                    <input class="border p-3 w-full rounded-lg" type="text" name="area" id="area" placeholder="Area">
                    @error('area')
                        <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <input type="submit" value="Registrar" class="p-3 bg-blue-400 w-full rounded-xl mt-3 font-bold text-black cursor-pointer hover:bg-blue-300 transition-colors uppercase">
                </div>
            </form>
        </div>
    </div>
@endsection