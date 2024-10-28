@props([
    'disabled' => false,
    'name' => '',
    'placeholder' => '',
    'containerClass' => '',
    'type' => 'text',
    'oldValue' => true,
])

@php
    $attributes = $attributes->class([
        'form-control' => true,
        'is-invalid' => $errors->has($name),
    ]);
@endphp

<div class="form-floating">
    <input type="{{ $type }}" name="{{ $name }}" id="input-{{ $name }}"
        placeholder="{{ $placeholder }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes !!}
        @if($oldValue) value="{{ old($name) }}" @endif
        />
    <label for="input-{{ $name }}">{{ $placeholder }}</label>
    <x-erros-input name="{{ $name }}" />
</div>
