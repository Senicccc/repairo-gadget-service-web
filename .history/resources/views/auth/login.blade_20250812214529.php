<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="text-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
            Sign In to Your Account
        </h1>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            Please enter your credentials to continue.
        </p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" value="Email Address" />
            <x-text-input id="email" class="block mt-1 w-full"
                type="email" name="email" :value="old('email')" required autofocus
                autocomplete="username" placeholder="you@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" value="Password" />
            <x-text-input id="password" class="block mt-1 w-full"
                type="password" name="password" required
                autocomplete="current-password" placeholder="********" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center">
            <input id="remember_me" type="checkbox"
                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm
                       focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                name="remember">
            <label for="remember_me" class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                Remember me
            </label>
        </div>

        <!-- Actions -->
        <div class="flex items-center justify-between">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}"
                   class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline">
                    Forgot your password?
                </a>
            @endif

            <x-primary-button>
                Sign In
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
