<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Voluntario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  /**
   * Seed the application's database.
   */
  public function run(): void {
    // User::factory(10)->create();


    Voluntario::create([
      'user_id'     => 1,
      'nome'        => 'João Silva',
      'descricao'   => 'Possui um caminhão e pode ajudar no transporte de móveis e donativos.',
      'whatsapp'    => '(47) 99999-1234',
      'telefone'    => '(47) 3333-5678',
      'email'       => 'joao.silva@example.com',
      'bairro'      => 'Jardim América',
      'cidade'      => 'Rio do Sul',
      'estado'      => 'SC',
      'logradouro'  => 'Rua das Flores',
      'numero'      => '45',
      'complemento' => 'Bloco A, Apto 301',
    ]);

    Voluntario::create([
      'user_id'     => 2,
      'nome'        => 'Maria Oliveira',
      'descricao'   => 'Disponível para ajudar na limpeza de casas e ruas afetadas.',
      'whatsapp'    => '(47) 98888-4321',
      'telefone'    => '(47) 3344-8765',
      'email'       => 'maria.oliveira@example.com',
      'bairro'      => 'Centro',
      'cidade'      => 'Rio do Sul',
      'estado'      => 'SC',
      'logradouro'  => 'Avenida Rio Branco',
      'numero'      => '250',
      'complemento' => 'Sala 15',
    ]);

    Voluntario::create([
      'user_id'     => 3,
      'nome'        => 'Pedro Santos',
      'descricao'   => 'Tem experiência em primeiros socorros e pode prestar auxílio emergencial.',
      'whatsapp'    => '(47) 97777-1111',
      'telefone'    => '(47) 3366-6543',
      'email'       => 'pedro.santos@example.com',
      'bairro'      => 'Canoas',
      'cidade'      => 'Rio do Sul',
      'estado'      => 'SC',
      'logradouro'  => 'Rua São José',
      'numero'      => '10',
      'complemento' => 'Casa 2',
    ]);

    Voluntario::create([
      'user_id'     => 4,
      'nome'        => 'Ana Paula Lima',
      'descricao'   => 'Pode preparar refeições para os desabrigados.',
      'whatsapp'    => '(47) 95555-2222',
      'telefone'    => '(47) 3377-9876',
      'email'       => 'ana.lima@example.com',
      'bairro'      => 'Taboão',
      'cidade'      => 'Rio do Sul',
      'estado'      => 'SC',
      'logradouro'  => 'Rua Primavera',
      'numero'      => '78',
      'complemento' => 'Fundos',
    ]);

    Voluntario::create([
      'user_id'     => 5,
      'nome'        => 'Carlos Almeida',
      'descricao'   => 'Disponível para arrecadação e entrega de alimentos e roupas.',
      'whatsapp'    => '(47) 94444-3333',
      'telefone'    => '(47) 3388-5432',
      'email'       => 'carlos.almeida@example.com',
      'bairro'      => 'Santana',
      'cidade'      => 'Rio do Sul',
      'estado'      => 'SC',
      'logradouro'  => 'Rua Bela Vista',
      'numero'      => '120',
      'complemento' => '2º andar',
    ]);

    Voluntario::create([
      'user_id'     => 6,
      'nome'        => 'Júlia Souza',
      'descricao'   => 'Tem um barco e pode ajudar em resgates.',
      'whatsapp'    => '(47) 96666-4444',
      'telefone'    => '(47) 3399-3210',
      'email'       => 'julia.souza@example.com',
      'bairro'      => 'Progresso',
      'cidade'      => 'Rio do Sul',
      'estado'      => 'SC',
      'logradouro'  => 'Rua Lago Azul',
      'numero'      => '56',
      'complemento' => 'Casa A',
    ]);

    Voluntario::create([
      'user_id'     => 7,
      'nome'        => 'Rafael Costa',
      'descricao'   => 'Pode ajudar com transporte de pessoas em carro 4x4.',
      'whatsapp'    => '(47) 93333-5555',
      'telefone'    => '(47) 3400-7654',
      'email'       => 'rafael.costa@example.com',
      'bairro'      => 'Sumaré',
      'cidade'      => 'Rio do Sul',
      'estado'      => 'SC',
      'logradouro'  => 'Rua Nova Esperança',
      'numero'      => '15',
      'complemento' => 'Térreo',
    ]);

    Voluntario::create([
      'user_id'     => 8,
      'nome'        => 'Fernanda Almeida',
      'descricao'   => 'Disponível para apoio psicológico às vítimas.',
      'whatsapp'    => '(47) 97777-6666',
      'telefone'    => '(47) 3411-4567',
      'email'       => 'fernanda.almeida@example.com',
      'bairro'      => 'Barragem',
      'cidade'      => 'Rio do Sul',
      'estado'      => 'SC',
      'logradouro'  => 'Rua da Paz',
      'numero'      => '89',
      'complemento' => 'Sobreloja',
    ]);

    Voluntario::create([
      'user_id'     => 9,
      'nome'        => 'Lucas Martins',
      'descricao'   => 'Oferece serviços elétricos para reparos emergenciais.',
      'whatsapp'    => '(47) 95555-7777',
      'telefone'    => '(47) 3422-1234',
      'email'       => 'lucas.martins@example.com',
      'bairro'      => 'Boa Vista',
      'cidade'      => 'Rio do Sul',
      'estado'      => 'SC',
      'logradouro'  => 'Rua das Palmeiras',
      'numero'      => '32',
      'complemento' => 'Loja 5',
    ]);

    Voluntario::create([
      'user_id'     => 10,
      'nome'        => 'Gabriela Freitas',
      'descricao'   => 'Tem uma kombi para transporte de alimentos e pessoas.',
      'whatsapp'    => '(47) 94444-8888',
      'telefone'    => '(47) 3433-5678',
      'email'       => 'gabriela.freitas@example.com',
      'bairro'      => 'Fundo Canoas',
      'cidade'      => 'Rio do Sul',
      'estado'      => 'SC',
      'logradouro'  => 'Avenida Central',
      'numero'      => '67',
      'complemento' => 'Garagem',
    ]);

    Voluntario::create([
      'user_id'     => 11,
      'nome'        => 'Rodrigo Mendes',
      'descricao'   => 'Ajuda na triagem e organização de doações.',
      'whatsapp'    => '(47) 98888-9999',
      'telefone'    => '(47) 3444-4321',
      'email'       => 'rodrigo.mendes@example.com',
      'bairro'      => 'Canta Galo',
      'cidade'      => 'Rio do Sul',
      'estado'      => 'SC',
      'logradouro'  => 'Rua da Independência',
      'numero'      => '24',
      'complemento' => 'Lateral',
    ]);

    Voluntario::create([
      'user_id'     => 12,
      'nome'        => 'Beatriz Rocha',
      'descricao'   => 'Oferece apoio jurídico gratuito às vítimas.',
      'whatsapp'    => '(47) 92222-1111',
      'telefone'    => '(47) 3455-6789',
      'email'       => 'beatriz.rocha@example.com',
      'bairro'      => 'Navegantes',
      'cidade'      => 'Rio do Sul',
      'estado'      => 'SC',
      'logradouro'  => 'Rua das Orquídeas',
      'numero'      => '100',
      'complemento' => 'Sala 12',
    ]);

    Voluntario::create([
      'user_id'     => 13,
      'nome'        => 'Thiago Pereira',
      'descricao'   => 'Disponível para oferecer abrigo temporário em sua casa.',
      'whatsapp'    => '(47) 97777-2222',
      'telefone'    => '(47) 3466-5432',
      'email'       => 'thiago.pereira@example.com',
      'bairro'      => 'Santana',
      'cidade'      => 'Rio do Sul',
      'estado'      => 'SC',
      'logradouro'  => 'Rua São Luiz',
      'numero'      => '74',
      'complemento' => 'Casa 3',
    ]);

    Voluntario::create([
      'user_id'     => 14,
      'nome'        => 'Camila Ramos',
      'descricao'   => 'Pode oferecer apoio logístico e comunicação.',
      'whatsapp'    => '(47) 93333-3333',
      'telefone'    => '(47) 3477-1234',
      'email'       => 'camila.ramos@example.com',
      'bairro'      => 'Centro',
      'cidade'      => 'Rio do Sul',
      'estado'      => 'SC',
      'logradouro'  => 'Rua do Comércio',
      'numero'      => '58',
      'complemento' => 'Sobreloja',
    ]);

    Voluntario::create([
      'user_id'     => 15,
      'nome'        => 'Eduardo Nogueira',
      'descricao'   => 'Possui gerador e pode fornecer energia temporária.',
      'whatsapp'    => '(47) 91111-4444',
      'telefone'    => '(47) 3488-8765',
      'email'       => 'eduardo.nogueira@example.com',
      'bairro'      => 'Canoas',
      'cidade'      => 'Rio do Sul',
      'estado'      => 'SC',
      'logradouro'  => 'Rua Energia',
      'numero'      => '90',
      'complemento' => 'Galpão',
    ]);




  }
}
