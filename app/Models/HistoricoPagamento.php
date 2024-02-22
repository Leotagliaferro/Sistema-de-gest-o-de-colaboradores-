<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HistoricoPagamento extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "historico_pagamentos";
    protected $fillable = [
        'data_pagamento',
        'valor_do_salario',
        'cargo',
        'colaborador_id',
    ];


    public function Colaborador() {
        return $this->belongsTo(Colaborador::class);
    }




}
