@props(['id'])

<div class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
    @if ($id == 'salary')
        <div class="shrink-0 text-base text-gray-400 select-none sm:text-sm/6">$</div>
    @endif
    <input {{ $attributes->merge(['class' => 'block min-w-0 grow bg-transparent py-1.5 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6']) }}>
</div>