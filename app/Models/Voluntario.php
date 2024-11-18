<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'whatsapp',
        'telefone',
        'email',
        'bairro',
        'cidade',
        'estado',
        'logradouro',
        'numero',
        'complemento',
    ];

    protected $casts = [
        'nome' => 'string',
        'descricao' => 'string',
        'whatsapp' => 'string',
        'telefone' => 'string',
        'email' => 'string',
        'bairro' => 'string',
        'cidade' => 'string',
        'estado' => 'string',
        'logradouro' => 'string',
        'numero' => 'integer',
        'complemento' => 'string',
    ];
}
