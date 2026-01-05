<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <form action="/jobs" method="POST">
    @csrf
    <div class="space-y-12">
        <div class="border-b border-white/10 pb-12">
        <h2 class="text-base/7 font-semibold text-white">Create a New Job</h2>
        <p class="mt-1 text-sm/6 text-gray-400">We just need a handful of details from you.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
            <x-form-label for="title">Title</x-form-label>
            <div class="mt-2">
                <x-form-input id="title" name="title" placeholder="DevOps Engineer" required />
                <x-form-error field='title'/>
            </div>
            </div>

            <div class="sm:col-span-4">
            <x-form-label for="salary">Salary (per year)</x-form-label>
            <div class="mt-2">
                <x-form-input id="salary" name="salary" placeholder="50000" required />
                <x-form-error field='salary'/>
            </div>
            </div>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
        <x-form-button type="submit">Save</x-form-button>
    </div>
    </form>

</x-layout>