<x-layout>
    <x-slot:heading>
        Job: {{ $job['name'] }}
    </x-slot:heading>

    <ul>
        <p>This job pays {{ $job['salary'] }} per month</p>
    </ul>
</x-layout>