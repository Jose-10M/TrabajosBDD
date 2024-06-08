<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecargasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Eliminar todos los registros de la tabla recargas sin truncar
        DB::table('recargas')->delete();

        DB::table('recargas')->insert([
            [
                'fecha' => '2021-01-01',
                'idextintor' => 1,
                'proximarecarga' => '2022-01-01',
                'user_id' => 2 // Asegurarse de incluir esta línea
            ],
            [
                'fecha' => '2020-05-15',
                'idextintor' => 2,
                'proximarecarga' => '2021-05-15',
                'user_id' => 1 // Asegurarse de incluir esta línea
            ],
            [
                'fecha' => '2019-11-20',
                'idextintor' => 3,
                'proximarecarga' => '2020-11-20',
                'user_id' => 2 // Asegurarse de incluir esta línea
            ]
        ]);
    }
}
