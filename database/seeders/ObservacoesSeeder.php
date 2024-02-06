<?php

namespace Database\Seeders;

use App\Models\Colaborador;
use App\Models\Observacoes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ObservacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $colaborador=Colaborador::all();
      $colaborador->each(function($colaborador){
        Observacoes::factory()->create(["colaborador_id"=>$colaborador->id]);
      });
    }
}
