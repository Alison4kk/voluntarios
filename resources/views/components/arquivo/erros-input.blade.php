@props(['name'])

@if ($errors->get($name))
    @foreach ((array) $errors->get($name) as $mensagem)
        <div class="invalid-feedback">
            {{ $mensagem }}
        </div>
    @endforeach
@endif
