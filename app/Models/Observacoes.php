<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Observacoes extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "observacoes";
    protected $fillable = [
        'observacoes',
        'usuario',
        'colaborador_id',
    ];

    public function colaborador() {
        return $this->hasMany(Colaborador::class);
    }

}
