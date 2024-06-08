<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Eliminar todos los registros de la tabla users sin truncar
        DB::table('users')->delete();

        DB::table('users')->insert([
            [
                'nombres' => 'John',
                'apellidos' => 'Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password')
            ],
            [
                'nombres' => 'Jane',
                'apellidos' => 'Doe',
                'email' => 'jane@example.com',
                'password' => Hash::make('password')
            ]
        ]);
    }
}
