<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InspeccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Eliminar todos los registros de la tabla inspecciones sin truncar
        DB::table('inspecciones')->delete();

        DB::table('inspecciones')->insert([
            [
                'fecha' => '2020-02-01',
                'idextintor' => 1,
                'proximainspeccion' => '2021-02-01',
                'user_id' => 2 // Asegurarse de incluir esta línea
            ],
            [
                'fecha' => '2019-06-15',
                'idextintor' => 2,
                'proximainspeccion' => '2020-06-15',
                'user_id' => 1 // Asegurarse de incluir esta línea
            ],
            [
                'fecha' => '2018-12-20',
                'idextintor' => 3,
                'proximainspeccion' => '2019-12-20',
                'user_id' => 1 // Asegurarse de incluir esta línea
            ]
        ]);
    }
}
