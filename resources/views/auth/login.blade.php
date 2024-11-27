@extends('layouts.auth')
@section('title', 'Entrar')
@section('content')

    <x-bladewind::centered-content class="max-w-[500px] w-full">
        <div class="flex justify-center mb-10">
            <img src="images/logo.png" class="max-w-[150px]" alt="">
        </div>

        <x-bladewind::card class="p-3 ">

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <h1 class="my-2 text-2xl">Entrar</h1>
                <x-input name="email" type="email" required="true" label="Email" value="{{ old('email') }}" />
                <x-input name="password" label="Senha" type="password" required="true" />

                <div class="text-center">
                    <a href="/">
                        <x-bladewind::button name="btn-save" has_spinner="true" type="secondary" class="mt-3">
                            Voltar
                        </x-bladewind::button>
                    </a>
                    <x-bladewind::button name="btn-save" has_spinner="true" type="primary" can_submit="true" class="mt-3">
                        Entrar
                    </x-bladewind::button>
                </div>

            </form>

        </x-bladewind::card>

    </x-bladewind::centered-content>
@endsection
