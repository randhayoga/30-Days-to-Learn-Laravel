<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <ul>
        <div class="space-y">
            @foreach ($jobs as $job)
                <a href="jobs/{{ $job['id'] }}" class="block px-4 py-6 my-5 bg-white text-gray-700 opacity-100 rounded-xl shadow-lg">
                    <div class="text-blue-400 text-sm">
                        {{ $job->employer->name  }}
                    </div>
                    <div>
                        <strong class="text-xl">{{ $job['name'] }}</strong><br>
                        Yearly salary: {{ $job['salary'] }}
                    </div>
                </a>
            @endforeach
        </div>
    </ul>
</x-layout>