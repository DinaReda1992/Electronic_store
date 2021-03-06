<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>

        <x-jet-validation-errors class="bg-danger mb-4 py-2 text-center text-white" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="border border-3 border-info col-12 col-md-6 p-4 rounded-3">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <x-jet-label for="email" class="form-label" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full form-control" type="email" name="email"
                                :value="old('email')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-jet-label class="form-label" for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required
                                autocomplete="current-password" />
                        </div>

                        <div class="d-flex justify-content-between mt-2">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="flex mt-4 text-center">
                            <x-jet-button class="ml-4 btn btn-primary px-5">
                                {{ __('Log in') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </x-jet-authentication-card>
</x-guest-layout>
