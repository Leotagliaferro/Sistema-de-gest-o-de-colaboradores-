<?php

namespace Database\Factories;

use App\Models\Cargo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ColaboradorFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cargo_id'=>cargo::pluck('id')->random(),
            'nome' =>$this->faker->company,
            'cpf'=>$this->faker->numerify('###.###.###-##'),
            'telefone'=>$this->faker->phoneNumber('##-#####-####'),
            'url_foto'=>$this->faker->imageUrl(400,400)
        ];
    }
}
