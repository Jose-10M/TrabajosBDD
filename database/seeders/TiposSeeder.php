<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos')->insert([
            ['nombre' => 'Tipo A'],
            ['nombre' => 'Tipo B'],
            ['nombre' => 'Tipo C']
        ]);
    }
}
