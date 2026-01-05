@props(['field'])

@error($field)
    <p {{ $attributes->merge(['class' => 'italic text-sm text-red-600']) }}> {{ $message }} </p>
@enderror