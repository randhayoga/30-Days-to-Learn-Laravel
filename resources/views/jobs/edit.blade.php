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
            <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
            <div class="mt-2">
                <div class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                <input id="title" type="text" name="title" placeholder="Engineer" class="block min-w-0 grow bg-transparent py-1.5 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" value="{{ $job->name }}" required />
                </div>
                @error('title')
                    <p class="italic text-sm text-red-600"> {{ $message }} </p>
                @enderror
            </div>
            </div>

            <div class="sm:col-span-4">
            <label for="salary" class="block text-sm/6 font-medium text-white">Salary (per year)</label>
            <div class="mt-2">
                <div class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                <div class="shrink-0 text-base text-gray-400 select-none sm:text-sm/6">$</div>
                <input id="salary" type="text" name="salary" placeholder="50,000" class="block min-w-0 grow bg-transparent py-1.5 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" value={{ Str::after($job->salary, '$') }} required />
                </div>
                @error('salary')
                    <p class="italic text-sm text-red-600 mt-1"> {{ $message }} </p>                   
                @enderror
            </div>
            </div>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-between gap-x-6">
        <div>
            <button form="delete-form" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500">Delete</a>
        </div>
        <div>
            <a href="/jobs/{{ $job->id }}" type="button" class="text-sm/6 font-semibold text-white">Cancel</a>
            <button type="submit" class="ml-3 rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
        </div>
    </div>
    </form>

    <form action="/jobs/{{ $job->id }}" method="POST" id="delete-form" class="hidden">
    @method('DELETE')
    @csrf
    </form>
</x-layout>