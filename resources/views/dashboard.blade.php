@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<div class="container">
<x-bladewind::centered-content class="max-w-[800px] w-full">
        <form method="GET" class="signup-form">
            <h1 class="my-2 text-2xl font-light text-blue-900/80">Perfil do Voluntário</h1>
            <p class="mt-3 mb-6 text-blue-900/80 text-sm">
                Preencha os campos a seguir para ser voluntário.
            </p>

            <div id="section-personal">
                <h2 class="my-2 text-xl text-blue-900/80">Dados Gerais</h2>
                <x-bladewind::input name="nomeCompleto" required="true" label="Nome Completo" error_message="Você precisará inserir seu nome completo" />
                <div class="flex gap-4">
                    <x-bladewind::input name="email" required="true" label="Email" />

                    <x-bladewind::input name="Telefone" label="Telefone" numeric="true" />
                </div>

                <x-bladewind::textarea required="true" name="descricao" error_message="Escreva algo sobre você e seus serviços" show_error_inline="true" label="Descrição"></x-bladewind::textarea>

                <div class="text-center">
                    <x-bladewind::button name="btn-next" has_spinner="true" type="primary" class="mt-3" onclick="showAddressSection(event)">
                        Avançar
                    </x-bladewind::button>
                </div>
            </div>

            <div id="section-address" style="display: none;">
                <h2 class="my-2 text-xl text-blue-900/80">Endereço</h2>
                <?php
                    $estados = [
                        [ 'estado' => 'Paraná', 'sigla' => 'PR' ],
                        [ 'estado' => 'Rio Grande do Sul',  'sigla' => 'RS' ],
                        [ 'estado' => 'Santa Catarina',         'sigla' => 'SC' ]
                    ];
                ?>    
                <x-bladewind::select name="estados" label_key="estado" value_key="sigla" placeholder="Estado" :data="$estados" />
                <x-bladewind::input name="cidade" label="Cidade" required="true"/>
                <x-bladewind::input name="logradouro" label="Logradouro" required="true"/>
                <x-bladewind::input name="bairro" label="Bairro" />
                <x-bladewind::input name="numero" label="Número" />
                <x-bladewind::input name="complemento" label="Complemento" />

                <div class="flex justify-between mt-3">
                    <x-bladewind::button name="btn-back" has_spinner="true" type="secondary" class="mr-2" onclick="showPersonalSection(event)">
                        Voltar
                    </x-bladewind::button>

                    <x-bladewind::button name="btn-submit" has_spinner="true" type="primary" can_submit="true">
                        Salvar
                    </x-bladewind::button>
                </div>
            </div>
        </form>
</x-bladewind::centered-content>
<script>
    function showAddressSection(event) {
        event.preventDefault();
        document.getElementById('section-personal').style.display = 'none';
        document.getElementById('section-address').style.display = 'block';
    }

    function showPersonalSection(event) {
        event.preventDefault();
        document.getElementById('section-address').style.display = 'none'; 
        document.getElementById('section-personal').style.display = 'block'; 
    }
</script>
@endsection
