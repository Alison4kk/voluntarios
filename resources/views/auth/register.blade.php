@extends('layouts.auth')
@section('title', 'Registrar')
@section('content')

    {{-- <main class="form-signin w-100 m-auto">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <h1 class="h3 mb-3 fw-normal">Registrar</h1>
            <hr>
            <div class="d-flex flex-column gap-2 mb-3">

                <x-form-input name="name" type="text" placeholder="Nome" />
                <x-form-input name="email" type="email" placeholder="Email" />
                <x-form-input name="password" type="password" placeholder="Senha" />
                <x-form-input name="password_confirmation" type="password" placeholder="Confirme a senha" />
            </div>

            <div class="d-flex gap-2">
                <a href="{{ url('/') }}" class="w-100 btn btn-light" type="submit">Voltar</a>
                <button class="w-100 btn btn-primary" type="submit">Cadastrar</button>
            </div>
            <p class="mt-5 mb-3 text-muted">&copy; 2024</p>
        </form>
    </main>
 --}}

    <x-bladewind::centered-content class="max-w-[500px] w-full">

        <x-bladewind::card class="p-3 ">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <h1 class="my-2 text-2xl">Nova Conta</h1>

                <x-input name="name" type="text" required="true" label="Nome Completo" value="{{ old('name') }}" />
                <x-input name="email" type="email" required="true" label="Email" value="{{ old('email') }}" />
                <x-input name="password" label="Senha" type="password" required="true" />
                <x-input name="password_confirmation" label="Confirme a Senha" type="password" required="true" />

                <div class="text-center">
                    <a href="/">
                        <x-bladewind::button name="btn-save" has_spinner="true" type="secondary" class="mt-3">
                            Voltar
                        </x-bladewind::button>
                    </a>
                    <x-bladewind::button name="btn-save" has_spinner="true" type="primary" can_submit="true" class="mt-3">
                        Cadastrar
                    </x-bladewind::button>
                </div>

            </form>

        </x-bladewind::card>

    </x-bladewind::centered-content>
@endsection
