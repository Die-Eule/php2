<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Surname -->
        <div>
            <x-input-label for="surname" :value="__('Фамилия')" />
            <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus autocomplete="family-name" />
            <x-input-error :messages="$errors->get('surname')" class="mt-2" />
        </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Имя')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="given-name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Patranomic -->
        <div>
            <x-input-label for="patranomic" :value="__('Отчество')" />
            <x-text-input id="patranomic" class="block mt-1 w-full" type="text" name="patranomic" :value="old('patranomic')" required autofocus autocomplete="additional-name" />
            <x-input-error :messages="$errors->get('patranomic')" class="mt-2" />
        </div>

        <!-- login -->
        <div>
            <x-input-label for="login" :value="__('Логин')" />
            <x-text-input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('login')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div>
            <x-input-label for="mobile" :value="__('Номер мобильного телефона')" />
            <x-tel-input id="mobile" class="block mt-1 w-full" name="mobile" :value="old('mobile')" required autofocus autocomplete="tel" />
            <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Электронноая почта')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Пароль')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Подтверждение пароля')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Уже зарегестрирован?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Регистрация') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
