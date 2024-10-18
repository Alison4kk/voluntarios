<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $nome
 * @property string $descricao
 * @property string $whatsapp
 * @property string $telefone
 * @property string $email
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $logradouro
 * @property string $numero
 * @property string $complemento
 * 
 */
class Voluntario extends Model
{
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
}
