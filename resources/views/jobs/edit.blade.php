<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->name }}
    </x-slot:heading>
    <form action="/jobs/{{ $job->id }}" method="POST">
    @method('PATCH')
    @csrf
    <div class="space-y-12">
        <div class="border-b border-white/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
            <x-form-label for="title">Title</x-form-label>
            <div class="mt-2">
                <x-form-input id="title" name="title" placeholder="DevOps Engineer" value="{{ $job->name }}" required />
                <x-form-error field='title' />
            </div>
            </div>

            <div class="sm:col-span-4">
            <x-form-label for="salary">Salary (per year)</x-form-label>
            <div class="mt-2">
                <x-form-input id="salary" name="salary" placeholder="50000" value="{{ Str::after($job->salary, '$') }}" required />
                <x-form-error field='salary' />
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-between gap-x-6">
        <div>
            <button form="delete-form" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500">Delete</a>
        </div>
        <div>
            <a href="/jobs/{{ $job->id }}" type="button" class="text-sm/6 font-semibold text-white mr-5">Cancel</a>
            <x-form-button type="submit">Save</x-form-button>
        </div>
    </div>
    </form>

    <form action="/jobs/{{ $job->id }}" method="POST" id="delete-form" class="hidden">
    @method('DELETE')
    @csrf
    </form>
</x-layout>