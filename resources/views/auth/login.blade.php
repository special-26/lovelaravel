<x-guest-layout>
    <div class="h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-white bg-pattern relative overflow-hidden">

        <svg xmlns="http://www.w3.org/2000/svg" class="text-zinc-400/5 absolute left-[15%] -top-[30%] w-[70%] z-0" viewBox="0 0 24 24"><path fill="currentColor" d="M21.7 6.53c.01.02.01.05.01.08v4.29c0 .1-.06.22-.15.27l-3.61 2.08v4.11c0 .11-.05.21-.15.27l-7.52 4.33c-.02.01-.04.04-.06.04H10s0-.03-.04-.04l-7.52-4.33a.32.32 0 0 1-.15-.27V4.5c0-.05 0-.08.01-.1c0-.01.01-.02.01-.03c0-.02.01-.03.02-.05c0-.01.01-.02.02-.03l.03-.03l.03-.03c.01-.01.02-.02.03-.02L6.2 2.04c.1-.04.22-.04.3 0l3.78 2.17c.01.01.02.01.03.02l.03.03l.03.03c.01.01.02.02.02.03c.01.02.02.03.02.05c0 .01.01.02.01.03c.01.03.01.05.01.1v8l3.14-1.78V6.61c0-.03 0-.06.01-.08l.01-.03s.01-.03.02-.05c0-.01.01-.02.02-.03l.03-.03l.03-.03c.01-.01.02-.02.03-.02l3.78-2.17c.08-.06.2-.06.3 0l3.76 2.17c.01 0 .02.01.03.02l.03.03l.03.03c.01.01.01.02.02.03c.01.02.01.05.02.05s.01 0 .01.03m-.61 4.19V7.15l-3.14 1.8v3.55zm-3.76 6.46V13.6l-6.9 3.94v3.61zM2.91 5v12.18l6.9 3.97v-3.61l-3.6-2.04H6.2c-.01 0-.02 0-.03-.03c-.01 0-.02-.01-.03-.02l-.03-.03c-.01-.01-.01-.02-.02-.03c-.01-.02-.01-.03-.02-.04c0-.02-.01-.03-.01-.04c-.01-.01-.01-.03-.01-.04V6.82zm3.45-2.32L3.23 4.5l3.13 1.78L9.5 4.5zm3.45 10.2V5L6.67 6.82v7.87zm7.83-8.08L14.5 6.61l3.14 1.8l3.13-1.8zm-.31 4.15l-3.14-1.8v3.57l3.14 1.78zM10.12 17L17 13.06l-3.12-1.8L7 15.23z"/></svg>

        <a href="/" wire:navigate class="bg-red-500 shadow-lg hover:shadow-red-500/50 shadow-red-500/50 text-white rounded-xl p-3 mb-5 relative">
            <svg class="h-12 w-12" viewBox="0 0 462 482" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 481.474V14H216.948V355.716H355.716M115.474 105.934V456.322H447.649V255.109H308.882" stroke="white" stroke-width="28"/>
            </svg>
        </a>

        <section class="bg-white/95 backdrop-blur rounded-3xl p-8 w-[30vw] relative shadow-inner">
            <x-validation-errors class="mb-4" />
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <label class="text-xs text-zinc-400" for="email">Email</label>
                    <input id="email" class="block mt-1 w-full rounded-2xl p-3 bg-white/50 backdrop-blur border-zinc-200 focus:ring-0 focus:border-zinc-300" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="me@mail.com" />
                </div>

                <div class="mt-4">
                    <div class="flex items-center justify-between">
                        <label class="text-xs text-zinc-400" for="password">Password</label>
                        @if (Route::has('password.request'))
                            <a class="text-xs text-zinc-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                    <input id="password" class="block mt-1 w-full rounded-2xl p-3 bg-white/50 backdrop-blur border-zinc-200 focus:ring-0 focus:border-zinc-300" type="password" name="password" required autocomplete="current-password" placeholder="password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button class="bg-red-500 shadow-lg hover:shadow-xl hover:shadow-red-500/50 shadow-red-500/50 text-white rounded-lg px-10 py-2.5">Log in</button>
                </div>
            </form>

            <div class="flex items-center text-xs gap-1 text-zinc-400 justify-center mt-5">
                Don't have account?
                <a href="{{ route('register') }}" wire:navigate class="font-bold text-zinc-800 hover:underline">Sign up</a>
            </div>
        </section>

    </div>
</x-guest-layout>
