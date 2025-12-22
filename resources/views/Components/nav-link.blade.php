@props(['active' => false, 'type' => "a"])


@if ($type === "a")
    <a class="{{ $active ? "text-indigo-500" : "text-white hover:underline" }} text-sm/6 font-semibold" {{ $attributes }}>{{ $slot }}</a>
@elseif ($type === "button")
    <button class="rounded-md bg-gray-700 px-3 py-1 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-gray-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white" {{ $attributes }}>{{ $slot }}</a>
@endif