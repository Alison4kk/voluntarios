@extends('layouts.auth')
@section('title', 'Registrar')
@section('content')

    <main class="form-signin w-100 m-auto">
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
@endsection
