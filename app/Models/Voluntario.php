<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model {
  use HasFactory;

  protected $fillable = [
    'user_id',
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
    'nome'        => 'string',
    'descricao'   => 'string',
    'whatsapp'    => 'string',
    'telefone'    => 'string',
    'email'       => 'string',
    'bairro'      => 'string',
    'cidade'      => 'string',
    'estado'      => 'string',
    'logradouro'  => 'string',
    'numero'      => 'integer',
    'complemento' => 'string',
  ];

  function getWhatsappSomenteNumeroAttribute() {
    return preg_replace('/[^0-9]/', '', $this->whatsapp);
  }
}
