<?php

namespace Database\Factories;

use App\Models\Inspeccion;
use App\Models\Extintor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class InspeccionFactory extends Factory
{
    protected $model = Inspeccion::class;

    public function definition()
    {
        return [
            'fecha' => $this->faker->date(),
            'idextintor' => Extintor::factory(),
            'proximainspeccion' => $this->faker->date(),
            'user_id' => User::factory(),
        ];
    }
}
