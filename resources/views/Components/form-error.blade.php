@props(['field'])

@error($field)
    <p class="italic text-sm text-red-600"> {{ $message }} </p>
@enderror