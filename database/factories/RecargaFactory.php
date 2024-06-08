<?php

namespace Database\Factories;

use App\Models\Recarga;
use App\Models\Extintor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecargaFactory extends Factory
{
    protected $model = Recarga::class;

    public function definition()
    {
        return [
            'fecha' => $this->faker->date(),
            'idextintor' => Extintor::factory(),
            'proximarecarga' => $this->faker->date(),
            'user_id' => User::factory(),
        ];
    }
}
