<?php

namespace Database\Factories;

use App\Models\Colaborador;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Historico_pagamentos>
 */
class HistoricoPagamentoFactory extends Factory
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
            'data_pagamento' =>$this->faker->date(),
            'valor_do_salario'=>$this->faker->randomFloat(2, 10, 1000),
            'cargo'=>$this->faker->word,
        ];
    }
}
