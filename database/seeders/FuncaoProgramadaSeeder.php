<?php

namespace Database\Seeders;

use App\Models\FuncaoProgramada;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuncaoProgramadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FuncaoProgramada::factory(10)-> create();
        
    }
}
