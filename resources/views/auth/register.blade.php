@extends('layouts.app')

@section('titulo')
    Registrate
@endsection

@section('contenido')
    <div class="md:flex">
        <div class="md:w-7/12 flex items-center p-10">
            <img class="rounded-xl" src="{{asset('imagenes/registrar.jpg')}}" alt="imagen registrarse">
        </div>
        <div class="md:w-5/12 shadow-xl rounded-xl p-10 bg-green-400">
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
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="date_birthday">Fecha de Nacimiento</label>
                    <input class="border p-3 w-full rounded-lg" type="date" name="date_birthday" id="date_birthday">
                    @error('date_birthday')
                        <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password">Contraseña</label>
                    <input class="border p-3 w-full rounded-lg" type="password" name="password" id="password" placeholder="Contraseña">
                    @error('password')
                        <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <input type="submit" value="Crear cuenta" class="p-3 bg-red-500 w-full rounded-xl mt-3 font-bold text-white cursor-pointer hover:bg-red-400 transition-colors uppercase">
                </div>
            </form>
        </div>
    </div>
@endsection