<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Inserta un usuario de ejemplo
        DB::table('users')->insert([
            'name' => 'Lufer',
            'email' => 'lufer@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
