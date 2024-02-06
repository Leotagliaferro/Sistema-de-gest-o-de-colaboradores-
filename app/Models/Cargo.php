<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cargo extends Model
{   
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'nome_cargo',
        'salario',
        'colaborador_id'
    ];

    public function pessoa () {
        return $this->belongsTo(Colaborador::class);
    }


}
