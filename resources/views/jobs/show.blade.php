<x-layout>
    <x-slot:heading>
        Job: {{ $job->name }}
    </x-slot:heading>

    <ul>
        <p>This job pays {{ $job->salary }} per month</p>
    </ul>

    <x-button class="mt-5" href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
</x-layout>