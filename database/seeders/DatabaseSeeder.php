<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Voluntario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        Voluntario::create([
          'nome' => 'João da Silva',
          'descricao' => 'Voluntário ativo na comunidade',
          'whatsapp' => '(47) 99999-9999',
          'telefone' => '(47) 3333-3333',
          'email' => 'joao@gmail.com',
          'bairro' => 'Centro',
          'cidade' => 'Rio do Sul',
          'estado' => 'SC',
          'logradouro' => 'Rua das Flores',
          'numero' => '123',
          'complemento' => 'Casa 1',
        ]);

        Voluntario::create([
          'nome' => 'Maria da Silva',
          'descricao' => 'Voluntária ativa na comunidade',
          'whatsapp' => '(47) 99999-9999',
          'telefone' => '(47) 3333-3333',
          'email' => 'maria@gmail.com',
          'bairro' => 'Centro',
          'cidade' => 'Rio do Sul',
          'estado' => 'SC',
          'logradouro' => 'Rua das Flores',
          'numero' => '123',
          'complemento' => 'Casa 2',
        ]);

        Voluntario::create([
          'nome' => 'José da Silva',
          'descricao' => 'Voluntário ativo na comunidade',
          'whatsapp' => '(47) 99999-9999',
          'telefone' => '(47) 3333-3333',
          'email' => 'jose@gmail.com',
          'bairro' => 'Centro',
          'cidade' => 'Rio do Sul',
          'estado' => 'SC',
          'logradouro' => 'Rua das Flores',
          'numero' => '123',
          'complemento' => 'Casa 3',
        ]);


        
    }
}
