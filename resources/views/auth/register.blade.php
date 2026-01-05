<x-layout>
    <x-slot:heading>
        Register 
    </x-slot:heading>
    <form action="/register" method="POST">
    @csrf
    <div class="space-y-12">
        <div class="border-b border-white/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-6">
            <div class="sm:col-span-4">
            <x-form-label for="first_name">First Name</x-form-label>
            <div class="mt-2">
                <x-form-input id="first_name" name="first_name"  required />
                <x-form-error field='first_name'/>
            </div>
            </div>

            <div class="sm:col-span-4">
            <x-form-label for="last_name">Last Name</x-form-label>
            <div class="mt-2">
                <x-form-input id="last_name" name="last_name" required />
                <x-form-error field='last_name'/>
            </div>
            </div>

            <div class="sm:col-span-4">
            <x-form-label for="email">Email</x-form-label>
            <div class="mt-2">
                <x-form-input id="email" name="email" required />
                <x-form-error field='email'/>
            </div>
            </div>

            <div class="sm:col-span-4">
            <x-form-label for="password">Password</x-form-label>
            <div class="mt-2">
                <x-form-input id="password" name="password" required />
                <x-form-error field='password'/>
            </div>
            </div>

            <div class="sm:col-span-4">
            <x-form-label for="password_confirmation">Confirm Password</x-form-label>
            <div class="mt-2">
                <x-form-input id="password_confirmation" name="password_confirmation" required />
                <x-form-error field='password_confirmation'/>
            </div>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-end gap-x-3">
        <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
        <x-form-button type="submit">Register</x-form-button>
    </div>
    </form>

</x-layout>
