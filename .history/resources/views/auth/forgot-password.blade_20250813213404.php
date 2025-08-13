<x-guest-layout>
    <section class="flex flex-col items-center justify-center px-6 py-8 mx-auto min-h-screen bg-gray-50 dark:bg-gray-900">

        <h1 class="mb-6 text-3xl font-bold text-red-600">Repairo</h1>

        <div class="w-full bg-white rounded-lg shadow-md dark:border sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

                <h2 class="text-xl font-semibold leading-tight text-gray-900 md:text-2xl dark:text-white">
                    Forgot Password
                </h2>

                <p class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                    No worries! Enter your email and we will send you a link to reset your password.
                </p>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}" class="space-y-4 md:space-y-6">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" 
                            value="{{ old('email') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                            placeholder="name@example.com" required autofocus>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                        Send Password Reset Link
                    </button>

                </form>
            </div>
        </div>
    </section>
</x-guest-layout>
