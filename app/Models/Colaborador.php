<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colaborador extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "colaboradores";
    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'cargo',
    ];
}
