@extends('layouts.auth')
@section('title', 'Entrar')
@section('content')

    <main class="form-signin w-100 m-auto">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <h1 class="h3 mb-3 fw-normal">Entrar</h1>
            <hr>
            <div class="d-flex flex-column gap-2 mb-3">
                <x-form-input name="email" :old-value="true" type="email" placeholder="Email" />
                <x-form-input name="password" type="password" placeholder="Senha" />
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="remember" value="remember-me"> Manter conectado
                </label>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ url('/') }}" class="w-100 btn btn-light" type="submit">Voltar</a>
                <button class="w-100 btn  btn-primary" type="submit">Entrar</button>
            </div>
            <p class="mt-5 mb-3 text-muted">&copy; 2024</p>
        </form>
    </main>
@endsection
