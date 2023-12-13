@extends('layouts.app')

@section('titulo')
    Administrar Cursos
@endsection

@section('contenido')
<div class="md:flex">
    <div class="md:w-7/12 flex flex-col items-center p-2">
        <a class="absolute flex items-center top-32 left-8 text-xl font-bold" href="{{ route('administrar') }}">
            <p class="text-3xl"><</p>
            <p class="text-2xl">Volver</p>
        </a>
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
        <div class="w-full bg-gray-300 shadow-md rounded-md p-4">
            <h1 class="text-3xl font-bold mb-6 text-center border-b-2 border-black pb-2">Listado de Cursos</h1>
            <table class="w-full border-collapse border border-black">
                <thead>
                    <tr>
                        <th class="p-3 border border-black">ID</th>
                        <th class="p-3 border border-black">Nombre</th>
                        <th class="p-3 border border-black">Codigo</th>
                        <th class="p-3 border border-black">Profesor</th>
                        <th class="p-3 border border-black">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cursos as $curso)
                        <tr>
                            <td class="p-3 border border-black">{{ $curso->id }}</td>
                            <td class="p-3 border border-black">{{ $curso->nombre }}</td>
                            <td class="p-3 border border-black">{{ $curso->codigo }}</td>
                            <td class="p-3 border border-black">{{ $curso->profesor }}</td>
                            <td class="p-3 flex">
                                <button class="bg-blue-500 text-white font-bold hover:bg-blue-400 p-2 rounded-lg">Actualizar</button>
                                <form action="{{ route('cursos.eliminar', $curso) }}" method="post" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este curso?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold p-2 rounded-lg">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-4">No hay cursos disponibles.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="md:w-5/12 shadow-xl h-[70vh] rounded-xl p-10">
        <form action="" method="POST">
            @csrf
            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="nombre">Nombre</label>
                <input class="border p-3 w-full rounded-lg" type="text" name="nombre" id="nombre" placeholder="Nombre">
                @error('nombre')
                    <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="codigo">Codigo</label>
                <input class="border p-3 w-full rounded-lg" type="text" name="codigo" id="codigo" placeholder="Codigo">
                @error('codigo')
                    <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="profesor">ID del Profesor</label>
                <input class="border p-3 w-full rounded-lg" type="number" name="profesor" id="profesor" placeholder="ID Profesor">
                @error('profesor')
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