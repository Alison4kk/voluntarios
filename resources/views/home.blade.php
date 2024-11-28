@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
    {{-- add search input --}}
    <form onsubmit="findVoluntario(); return false" class="flex justify-between items-center md:px-20">
        <x-bladewind::input id="search-input" type="search" placeholder="Buscar..." />
        <x-bladewind::button class="ml-1 mb-4 mx-auto" size="small" radius="full" color="cyan" outline="true" can_submit="true">
            <x-bladewind::icon name="magnifying-glass" />
        </x-bladewind::button>
    </form>
    <div id="loading" class="absolute inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
        <x-bladewind::spinner size="big" />
    </div>
    <div id="content-voluntario">
        <div id="grid-voluntairo" class="grid grid-cols-1 md:grid-cols-2 gap-3">
            @foreach ($voluntarios as $voluntario)
                <x-bladewind::card>
                    <div class="flex items-center">
                        <div class="grow pl-2 pt-1">
                            <b>{{ $voluntario->nome }}</b>
                            <div class="text-sm">{{ $voluntario->descricao }}</div>
                            <div class="text-sm"><b>Cidade: </b>{{ $voluntario->cidade }}</div>
                        </div>

                    </div>
                    <div class="flex justify-center items-center p-3">
                        <x-bladewind::button type="secondary" outline="true"
                            onclick="showModal('contact-{{ $voluntario->id }}')">
                            Mais Informações
                        </x-bladewind::button>
                    </div>
                    <x-bladewind::modal icon="information-circle" icon_css="p-3 " title="Informações"
                        name="contact-{{ $voluntario->id }}" cancel_button_label="Fechar" ok_button_label="" size="big">
                        <div class="text-lg font-bold">Endereço:</div>
                        @if (strlen($voluntario->bairro) === 0 &&
                                strlen($voluntario->logradouro) === 0 &&
                                strlen($voluntario->cidade) === 0 &&
                                strlen($voluntario->estado) === 0 &&
                                strlen($voluntario->complemento) === 0 &&
                                strlen($voluntario->numero) === 0)
                            <div class="text-sm">Não informado</div>
                        @else
                            <div class="text-sm"><b>Logradouro: </b>{{  strlen($voluntario->logradouro) === 0? '-': $voluntario->logradouro }}</div>
                            <div class="text-sm"><b>Número: </b>{{  strlen($voluntario->numero) === 0? '-': $voluntario->numero }}</div>
                            <div class="text-sm"><b>Bairro: </b>{{  strlen($voluntario->bairro) === 0? '-': $voluntario->bairro }}</div>
                            <div class="text-sm"><b>Complemento: </b>{{  strlen($voluntario->complemento) === 0? '-': $voluntario->complemento }}</div>
                            <div class="text-sm"><b>Cidade: </b>{{  strlen($voluntario->cidade) === 0? '-': $voluntario->cidade }}</div>
                            <div class="text-sm"><b>Estado: </b>{{  strlen($voluntario->estado) === 0? '-': $voluntario->estado }}</div>
                        @endif
                        <div class="text-lg font-bold mt-2">Contatos:</div>
                        @if (strlen($voluntario->whatsapp) === 0 && strlen($voluntario->telefone) === 0 && strlen($voluntario->email) === 0)
                            <div class="text-sm">Não informado</div>
                        @else
                            @if (strlen($voluntario->whatsapp) > 0)
                                <div class="text-base"> <x-bladewind::icon dir="images/icons/" name="whatsapp-icon" class="p-1" />
                                    <a class="text-sky-400 hover:underline" target="_blank"
                                        href="https://wa.me/55{{ $voluntario->whatsappSomenteNumero }}?text=Ol%C3%A1%20estou%20interessado%20no%20seu%20trabalho!">
                                        {{ $voluntario->whatsapp }}
                                    </a>
                                </div>
                            @endif
                            @if (strlen($voluntario->telefone) > 0)
                                <div class="text-base"><x-bladewind::icon name="phone" type="solid" class="p-1" />
                                    {{ $voluntario->telefone }}</div>
                            @endif
                            @if (strlen($voluntario->email) > 0)
                                <div class="text-base"><x-bladewind::icon name="envelope" class="p-1" />
                                    {{ $voluntario->email }}</div>
                            @endif
                        @endif

                    </x-bladewind::modal>
                </x-bladewind::card>
            @endforeach

        </div>
    </div>
    <script type="text/javascript">
        function findVoluntario() {
            $("#loading").removeClass("hidden");
            $("#grid-voluntairo").hide();
            $("#content-voluntario").load("?search=" + $("#search-input").val() + " #grid-voluntairo", function() {
                $("#loading").addClass("hidden");
            });
        }
    </script>

@endsection
