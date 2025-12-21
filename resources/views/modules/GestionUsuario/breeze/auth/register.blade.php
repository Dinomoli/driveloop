<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input
            name="nom"
            label="{{ __('Name') }}"
            type="text"
            :value="old('nom')"
            required/>
            
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>

        <!-- Last Name -->
        <div class="mt-4">
            <x-input
            name="ape"
            label="{{ __('Last Name') }}"
            type="text"
            :value="old('ape')"
            required/>

            <x-input-error :messages="$errors->get('ape')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input
            name="email"
            label="{{ __('Email') }}"
            type="email"
            :value="old('email')"
            required/>

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input
            name="password"
            label="{{ __('Password') }}"
            type="password"
            :value="old('password')"
            required/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input
            name="password_confirmation"
            label="{{ __('Password') }}"
            type="password"
            :value="old('password_confirmation')"
            required/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button width="full"
                x-data=""
            >{{ __('Register') }}</x-button>
        </div>
        <div class="mt-4 ">
            <a class="underline text-sm text-black-600 hover:text-black-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                {{ __('Already registered?') }}
            </a>
        </div>
    </form>
</x-guest-layout>