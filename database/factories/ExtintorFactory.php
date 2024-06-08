<?php

namespace Database\Factories;

use App\Models\Extintor;
use App\Models\Proveedor;
use App\Models\Ubicacion;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExtintorFactory extends Factory
{
    protected $model = Extintor::class;

    public function definition()
    {
        return [
            'capacidad' => $this->faker->numberBetween(1, 50),
            'estado' => $this->faker->randomElement(['Nuevo', 'Usado', 'Revisado']),
            'fechafabricacion' => $this->faker->date(),
            'idproveedor' => Proveedor::factory(),
            'idubicacion' => Ubicacion::factory(),
            'user_id' => User::factory(),
        ];
    }
}
