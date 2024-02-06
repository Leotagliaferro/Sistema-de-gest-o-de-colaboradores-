<?php

namespace Database\Factories;

use App\Models\Colaborador;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Observacoes>
 */
class ObservacoesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'colaborador_id'=>Colaborador::pluck('id')->random(),
            'observacoes'=>$this->faker->word,
            'usuario'=>$this->faker->word,
        ];
    }
}
