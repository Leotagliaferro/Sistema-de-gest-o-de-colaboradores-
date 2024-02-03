<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\FuncaoProgramada;
use Database\Factories\CargoFactory;
use database\factories\ColaboradorFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        $this->call(CargoSeeder::class);
        $this->call(ColaboradorSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(HistoricoPagamentoSeeder::class);
        $this->call(FuncaoProgramadaSeeder::class);
    }
}
