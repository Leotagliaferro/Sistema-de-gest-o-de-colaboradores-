<?php

namespace Database\Factories;

use App\Models\Cargo;
use App\Models\Colaborador;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FuncaoProgramada>
 */
class FuncaoProgramadaFactory extends Factory
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
            'novo_cargo_id'=>Cargo::pluck('id')->random(),
            'horario_mudanca' =>$this->faker->date(),
            'status'=>$this->faker->word(),
        ];


    }
}
