<?php

namespace Database\Seeders;

use App\Models\HistoricoPagamento;
use App\Models\HistoricoPagamentos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistoricoPagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HistoricoPagamento::factory(10)-> create();
    }
}
