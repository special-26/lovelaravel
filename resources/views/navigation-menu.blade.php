@props(['title' =>'Firefly Blog', 'logo' => null] )
<header @click.outside="showSearchModal = false" x-data="{ showSearchModal: false }" class="sticky top-0 z-[94035] mb-4">
    <div class="py-3 shadow-sm">
        <div class="container mx-auto">
            <div class="flex justify-between gap-x-4 px-8">
                <div class="flex items-center gap-x-10">
                    <a aria-current="page" class="flex items-center gap-2" href="/">
                        <button class="bg-red-600 rounded p-2">
                            <svg class="h-6" viewBox="0 0 462 482" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 481.474V14H216.948V355.716H355.716M115.474 105.934V456.322H447.649V255.109H308.882" stroke="white" stroke-width="28"/>
                            </svg>
                        </button>
                        <p class="text-zinc-800 font-bold text-xl">LoveLaravel</p>
                    </a>
                    <div class="hidden gap-x-10 sm:flex">
                        <a wire:navigate href="{{ route('filamentblog.post.index') }}" class="font-semibold text-md hover:text-primary-600">
                            <span>Blogs</span>
                        </a>
                        <a wire:navigate href="{{ route('all-templates') }}" class="font-semibold text-md hover:text-primary-600">
                            <span>Templates</span>
                        </a>
                        {{-- <div class="relative group">
                            <button class="flex items-center justify-center font-semibold text-md hover:text-primary-600 gap-x-2">
                                <span>Categories</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m19 9l-7 6l-7-6" />
                                </svg>
                            </button>
                            <div class="absolute right-1 group-hover:pointer-events-auto top-[calc(100%)] origin-left pt-2 opacity-0 pointer-events-none transition will-change-transform lg:left-[50%] lg:right-auto lg:translate-x-[-50%] group-hover:opacity-100">
                                <x-blog-header-category />
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="flex items-center ml-auto gap-6">
                    <form action="{{ route('filamentblog.post.search') }}" method="GET">
                        <div class="relative">
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-5 h-5 -translate-y-1/2 pointer-events-none left-5 top-1/2 text-slate-500" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                        <circle cx="11.5" cy="11.5" r="9.5" />
                                        <path stroke-linecap="round" d="M18.5 18.5L22 22" />
                                    </g>
                                </svg>
                                <input placeholder="Search" type="text" name="query" value="{{ request()->get('query') }}" class="w-full px-6 py-3 pl-12 text-sm font-medium text-gray-800 placeholder-gray-400 border rounded-full outline-none bg-white/10 placeholder:text-slate-500 focus:ring-0" />
                            </div>
                            @error('query')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </form>

                    <div class="hidden sm:flex sm:items-center">
                        @auth
                            <!-- Settings Dropdown -->
                            <div class="relative">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                            </button>
                                        @else
                                            <span class="inline-flex rounded-md">
                                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                                                    {{ Auth::user()->name }}

                                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </button>
                                            </span>
                                        @endif
                                    </x-slot>

                                    <x-slot name="content">
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Manage Account') }}
                                        </div>

                                        <x-dropdown-link href="{{ route('profile.show') }}">
                                            {{ __('Profile') }}
                                        </x-dropdown-link>

                                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                            <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                                {{ __('API Tokens') }}
                                            </x-dropdown-link>
                                        @endif

                                        <div class="border-t border-gray-200 dark:border-gray-600"></div>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf

                                            <x-dropdown-link href="{{ route('logout') }}"
                                                    @click.prevent="$root.submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                        @else
                            <div class="flex items-center">
                                <a href="{{ route('login') }}" wire:navigate class="text-sm text-gray-700 dark:text">Login</a>
                            </div>
                        @endauth
                    </div>

                    <!-- Hamburger -->
                    <div class="-me-2 flex items-center sm:hidden">
                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
