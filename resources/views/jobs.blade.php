<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <a href="jobs/{{ $job['id'] }}" class="text-blue-400">
                <li>Name: {{ $job['name'] }}, Salary: {{ $job['salary'] }}<li>
            </a>
        @endforeach
    </ul>
</x-layout>