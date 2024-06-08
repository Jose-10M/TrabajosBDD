<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedores')->insert([
            ['nombre' => 'Proveedor A', 'telefono' => '123456789', 'correo' => 'proveedorA@example.com'],
            ['nombre' => 'Proveedor B', 'telefono' => '987654321', 'correo' => 'proveedorB@example.com'],
            ['nombre' => 'Proveedor C', 'telefono' => '555555555', 'correo' => 'proveedorC@example.com']
        ]);
    }
}
