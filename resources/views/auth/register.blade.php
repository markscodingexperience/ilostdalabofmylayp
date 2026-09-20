<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Business Name -->
        <div>
            <x-input-label for="business_name" :value="__('Business name')" />
            <x-text-input id="business_name" class="block mt-1 w-full" type="text" name="business_name" :value="old('business_name')" required autofocus />
            <x-input-error :messages="$errors->get('business_name')" class="mt-2" />
        </div>

        <!-- Business Type -->
        <div class="mt-4">
            <x-input-label for="business_type" :value="__('Business type')" />
            <select id="business_type" name="business_type" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                <option value="grooming" @selected(old('business_type') === 'grooming')>{{ __('Grooming') }}</option>
                <option value="vet" @selected(old('business_type') === 'vet')>{{ __('Veterinary') }}</option>
                <option value="boarding" @selected(old('business_type') === 'boarding')>{{ __('Boarding') }}</option>
                <option value="daycare" @selected(old('business_type') === 'daycare')>{{ __('Daycare') }}</option>
                <option value="mixed" @selected(old('business_type') === 'mixed')>{{ __('Mix of services') }}</option>
            </select>
            <x-input-error :messages="$errors->get('business_type')" class="mt-2" />
        </div>

        <!-- Owner Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Your name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>