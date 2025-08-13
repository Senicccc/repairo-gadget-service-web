<x-guest-layout>
    @push('styles')
        <!-- Google Font untuk judul ala Spider-Man -->
        <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    @endpush

    <section class="flex flex-col items-center justify-center px-6 py-8 mx-auto min-h-screen bg-gradient-to-b from-orange-100 to-red-100 dark:from-gray-900 dark:to-gray-800">
        
        <!-- Judul "Repairo" -->
        <h1 class="mb-6 text-4xl font-bold text-red-600 drop-shadow-lg" style="font-family: 'Bangers', cursive;">
            Repairo
        </h1>

        <div class="w-full bg-white rounded-lg shadow-lg dark:border sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h2 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Login
                </h2>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-4 md:space-y-6">
                    @csrf

                    <!-- Email -->
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email"
                            value="{{ old('email') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-red-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-red-500"
                            placeholder="name@example.com" required autofocus autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-red-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-red-500"
                            required autocomplete="current-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember_me" name="remember" type="checkbox"
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-red-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-orange-400 dark:ring-offset-gray-800">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="remember_me" class="text-gray-500 dark:text-gray-300">Remember me</label>
                            </div>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm font-medium text-red-600 hover:underline dark:text-orange-400">Forgot password?</a>
                        @endif
                    </div>

                    <button type="submit"
                        class="w-full text-white bg-gradient-to-r from-red-600 to-orange-500 hover:from-red-700 hover:to-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center shadow-md transition-all duration-300 transform hover:scale-105">
                        Sign in
                    </button>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>
