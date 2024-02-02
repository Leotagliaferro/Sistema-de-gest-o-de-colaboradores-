<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Cargo;
use App\Models\Colaborador;

class CargoSeeder extends Seeder
{


    // roda as informações do importadas do model 
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cargo::factory(10)-> create();
        
    }
}
