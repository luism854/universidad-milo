@extends('layouts.app')

@section('titulo')
    Administrar
@endsection

@section('contenido')
    <div>
        <div>
            <div class="w-full bg-gray-300 shadow-md rounded-md p-8">
                <div>
                    <div class="flex justify-between border-b-2 border-black mb-6">
                        <h1 class="text-3xl font-bold pb-2">Profesores</h1>
                        <a href="{{ route('profesores') }}" class="flex px-3 rounded-lg items-center bg-blue-500 hover:bg-blue-400 font-bold">Administrar profesores</a>
                    </div>

                </div>
                <table class="w-full border-collapse border border-black">
                    <thead>
                        <tr>
                            <th class="p-3 border border-black text-red-500">ID</th>
                            <th class="p-3 border border-black text-red-500">Nombre</th>
                            <th class="p-3 border border-black text-red-500">Apellidos</th>
                            <th class="p-3 border border-black text-red-500">E-mail</th>
                            <th class="p-3 border border-black text-red-500">Área</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($profesores as $profesor)
                            <tr>
                                <th class="p-3 border border-black">{{ $profesor->id }}</th>
                                <th class="p-3 border border-black">{{ $profesor->name }}</th>
                                <th class="p-3 border border-black">{{ $profesor->lastname }}</th>
                                <th class="p-3 border border-black">{{ $profesor->email }}</th>
                                <th class="p-3 border border-black">{{ $profesor->area }}</th>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4">No hay profesores disponibles.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-8">
                <div class="w-full bg-gray-300 shadow-md rounded-md p-8">
                    <div class="flex justify-between border-b-2 border-black mb-6">
                        <h1 class="text-3xl font-bold pb-2">Cursos</h1>
                        <a href="{{ route('cursos') }}" class="flex px-3 rounded-lg items-center bg-blue-500 hover:bg-blue-400 font-bold">Administrar Cursos</a>
                    </div>
                    <table class="w-full border-collapse border border-black">
                        <thead>
                            <tr>
                                <th class="p-3 border border-black text-red-500">ID</th>
                                <th class="p-3 border border-black text-red-500">Nombre</th>
                                <th class="p-3 border border-black text-red-500">Codigo</th>
                                <th class="p-3 border border-black text-red-500">ID del Profesor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cursos as $curso)
                                <tr>
                                    <th class="p-3 border border-black">{{ $curso->id }}</th>
                                    <th class="p-3 border border-black">{{ $curso->nombre }}</th>
                                    <th class="p-3 border border-black">{{ $curso->codigo }}</th>
                                    <th class="p-3 border border-black">{{ $curso->profesor }}</th>
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
        </div>
    </div>
@endsection