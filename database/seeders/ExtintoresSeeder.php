<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExtintoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Eliminar todos los registros de la tabla extintores sin truncar
        DB::table('extintores')->delete();

        DB::table('extintores')->insert([
            [
                'capacidad' => 5,
                'estado' => 'Nuevo',
                'fechafabricacion' => '2020-01-01',
                'idproveedor' => 1,
                'idubicacion' => 1,
                'user_id' => 1
            ],
            [
                'capacidad' => 10,
                'estado' => 'Usado',
                'fechafabricacion' => '2019-05-15',
                'idproveedor' => 2,
                'idubicacion' => 2,
                'user_id' => 2
            ],
            [
                'capacidad' => 15,
                'estado' => 'Revisado',
                'fechafabricacion' => '2018-11-20',
                'idproveedor' => 3,
                'idubicacion' => 3,
                'user_id' => 1
            ]
        ]);
    }
}
