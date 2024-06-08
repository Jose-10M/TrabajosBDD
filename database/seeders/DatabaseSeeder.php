<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Extintor;
use App\Models\Proveedor;
use App\Models\Ubicacion;
use App\Models\Inspeccion;
use App\Models\Recarga;
use App\Models\Tipo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            UbicacionesSeeder::class,
            ProveedoresSeeder::class,
            TiposSeeder::class,
            ExtintoresSeeder::class,
            InspeccionesSeeder::class,
            RecargasSeeder::class,
        ]);
    
        // Opcionalmente puedes agregar más registros después de llamar a los seeders.
        User::factory(10)->create();
        Proveedor::factory(5)->create();
        Ubicacion::factory(5)->create();
        Tipo::factory(5)->create();

        Extintor::factory(20)->create()->each(function ($extintor) {
            Inspeccion::factory(2)->create(['idextintor' => $extintor->id]);
            Recarga::factory(2)->create(['idextintor' => $extintor->id]);
        });
    }
}
