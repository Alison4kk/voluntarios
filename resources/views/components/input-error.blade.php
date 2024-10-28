@props(['name'])

@if ($errors->has($name))
    <div {{ $attributes->merge(['class' => 'text-sm text-red-600 dark:text-red-400']) }}>
        {{ $errors->first($name) }}
    </div>
@endif
