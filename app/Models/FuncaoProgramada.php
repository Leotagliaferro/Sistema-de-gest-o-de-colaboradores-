<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FuncaoProgramada extends Model
{
    protected $table = "funcao_programada";
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'horario_mudanca',
        'status'
    ];

    public function Colaborador() {
        return $this->belongsTo(Colaborador::class);
    }

    public function Cargo() {
        return $this->belongsTo(Cargo::class);
    }

}



