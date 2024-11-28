@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

    @php

        use App\Models\Voluntario;

        $voluntario = Voluntario::where('user_id', auth()->user()->id)->first();

    @endphp


    <div class="container">
        <x-bladewind::centered-content class="max-w-[800px] w-full">
            <form method="POST" action="{{ route('voluntario.store') }}" class="signup-form">
                @csrf
                <h1 class="my-2 text-2xl font-light text-blue-900/80">Perfil do Voluntário</h1>
                <p class="mt-3 mb-6 text-blue-900/80 text-sm">
                    Preencha os campos a seguir para ser voluntário.
                </p>

                <div id="section-personal">
                    <h2 class="my-2 text-xl text-blue-900/80">Dados Gerais</h2>
                    <x-input name="nome" required="true" label="Nome Completo"
                        error_message="Você precisará inserir seu nome completo"
                        value="{{ old('nome') ?? $voluntario?->nome }}" />

                    <x-input name="email" label="Email" error_message="{{ $errors->first('email') }}"
                        value="{{ old('email') ?? $voluntario?->email }}" />
                    <div class="flex gap-4">
                        <x-input name="telefone" label="Telefone" numeric="true"
                            value="{{ old('telefone') ?? $voluntario?->telefone }}" />
                        <x-input name="whatsapp" label="Whatsapp" numeric="true"
                            value="{{ old('whatsapp') ?? $voluntario?->whatsapp }}" />
                    </div>

                    <x-bladewind::textarea required="true" name="descricao"
                        error_message="Escreva algo sobre você e seus serviços" show_error_inline="true" label="Descrição"
                        selected_value="{{ old('descricao') ?? $voluntario?->descricao }}" />
                    <x-input-error name="descricao" />

                    <div class="text-center">
                        <x-bladewind::button name="btn-next" has_spinner="true" type="primary" class="mt-3"
                            onclick="showAddressSection(event)">
                            Avançar
                        </x-bladewind::button>
                    </div>
                </div>

                <div id="section-address" style="display: none;">
                    <h2 class="my-2 text-xl text-blue-900/80">Endereço</h2>
                    <?php
                    $estados = [['estado' => 'Paraná', 'sigla' => 'PR'], ['estado' => 'Rio Grande do Sul', 'sigla' => 'RS'], ['estado' => 'Santa Catarina', 'sigla' => 'SC']];
                    ?>
                    <x-bladewind::select name="estado" label_key="estado" value_key="sigla" placeholder="Estado"
                        :data="$estados" selected_value="{{ old('estado') ?? $voluntario?->estado }}" />
                    <x-input-error name="estado" />
                    <x-input name="cidade" label="Cidade" required="true"
                        value="{{ old('cidade') ?? $voluntario?->cidade }}" />
                    <x-input name="logradouro" label="Logradouro"
                        value="{{ old('logradouro') ?? $voluntario?->logradouro }}" />
                    <x-input name="bairro" label="Bairro" value="{{ old('bairro') ?? $voluntario?->bairro }}" />
                    <x-input name="numero" label="Número" value="{{ old('numero') ?? $voluntario?->numero }}" />
                    <x-input name="complemento" label="Complemento"
                        value="{{ old('complemento') ?? $voluntario?->complemento }}" />

                    <div class="flex justify-between mt-3">
                        <x-bladewind::button name="btn-back" has_spinner="true" type="secondary" class="mr-2"
                            onclick="showPersonalSection(event)">
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
