<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_completo',
        'especialidade',
        'crm',
        'data_nascimento',
        'cpf',
        'email',
        'telefone',
        'horarios_consulta'
    ];
}
