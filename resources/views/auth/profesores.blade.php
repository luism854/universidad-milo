@extends('layouts.app')

@section('titulo')
    Administrar profesores
@endsection

@section('contenido')
    <div class="md:flex">
        <div class="md:w-7/12 flex items-center p-2">
            <a class="absolute flex items-center top-32 text-xl font-bold" href="{{ route('administrar') }}">
                <p class="text-3xl"><</p>
                <p class="text-2xl">Volver</p>
            </a>
            <div class="w-full bg-gray-300 shadow-md rounded-md p-4">
                <h1 class="text-3xl font-bold mb-6 text-center border-b-2 border-black pb-2">Listado de Profesores</h1>
                <table class="w-full border-collapse border border-black">
                    <thead>
                        <tr>
                            <th class="p-3 border border-black">ID</th>
                            <th class="p-3 border border-black">Nombre</th>
                            <th class="p-3 border border-black">Apellidos</th>
                            <th class="p-3 border border-black">E-mail</th>
                            <th class="p-3 border border-black">Área</th>
                            <th class="p-3 border border-black">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($profesores as $profesor)
                            <tr>
                                <td class="p-3 border border-black">{{ $profesor->id }}</td>
                                <td class="p-3 border border-black">{{ $profesor->name }}</td>
                                <td class="p-3 border border-black">{{ $profesor->lastname }}</td>
                                <td class="p-3 border border-black">{{ $profesor->email }}</td>
                                <td class="p-3 border border-black">{{ $profesor->area }}</td>
                                <td class="p-3 flex">
                                    <button class="bg-blue-500 text-white font-bold hover:bg-blue-400 p-2 rounded-lg">Actualizar</button>
                                    <form action="{{ route('profesores.eliminar', $profesor) }}" method="post" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este profesor?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold p-2 rounded-lg">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4">No hay profesores disponibles.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="md:w-5/12 shadow-xl rounded-xl p-10">
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