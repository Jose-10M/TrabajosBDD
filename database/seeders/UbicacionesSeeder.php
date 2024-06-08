<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UbicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ubicaciones')->insert([
            ['nombre' => 'Almacén'],
            ['nombre' => 'Oficina'],
            ['nombre' => 'Fábrica']
        ]);
    }
}
