<x-guest-layout>
    @livewire('navigation-menu')
    <div class="relative h-full bg-pattern">
        <!-- glow-background -->
        <span class="glow-background bg-red-500/10 blur-[120px] rounded-full w-[35vw] h-[45vh] absolute -left-[8%] top-[0vh]"></span>
        <span class="glow-background bg-red-500/10 blur-[100px] rounded-full w-[25vw] h-[35vh] absolute -right-[6%] top-[40vh]"></span>


        <!-- Hero-area -->
        {{-- <BigText class="text-zinc-400/5 absolute left-0 -top-[60vh] w-full z-0" /> --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="text-zinc-500/5 absolute left-40 -top-[40vh] w-[80%] z-0" viewBox="0 0 24 24"><path fill="currentColor" d="M21.7 6.53c.01.02.01.05.01.08v4.29c0 .1-.06.22-.15.27l-3.61 2.08v4.11c0 .11-.05.21-.15.27l-7.52 4.33c-.02.01-.04.04-.06.04H10s0-.03-.04-.04l-7.52-4.33a.32.32 0 0 1-.15-.27V4.5c0-.05 0-.08.01-.1c0-.01.01-.02.01-.03c0-.02.01-.03.02-.05c0-.01.01-.02.02-.03l.03-.03l.03-.03c.01-.01.02-.02.03-.02L6.2 2.04c.1-.04.22-.04.3 0l3.78 2.17c.01.01.02.01.03.02l.03.03l.03.03c.01.01.02.02.02.03c.01.02.02.03.02.05c0 .01.01.02.01.03c.01.03.01.05.01.1v8l3.14-1.78V6.61c0-.03 0-.06.01-.08l.01-.03s.01-.03.02-.05c0-.01.01-.02.02-.03l.03-.03l.03-.03c.01-.01.02-.02.03-.02l3.78-2.17c.08-.06.2-.06.3 0l3.76 2.17c.01 0 .02.01.03.02l.03.03l.03.03c.01.01.01.02.02.03c.01.02.01.05.02.05s.01 0 .01.03m-.61 4.19V7.15l-3.14 1.8v3.55zm-3.76 6.46V13.6l-6.9 3.94v3.61zM2.91 5v12.18l6.9 3.97v-3.61l-3.6-2.04H6.2c-.01 0-.02 0-.03-.03c-.01 0-.02-.01-.03-.02l-.03-.03c-.01-.01-.01-.02-.02-.03c-.01-.02-.01-.03-.02-.04c0-.02-.01-.03-.01-.04c-.01-.01-.01-.03-.01-.04V6.82zm3.45-2.32L3.23 4.5l3.13 1.78L9.5 4.5zm3.45 10.2V5L6.67 6.82v7.87zm7.83-8.08L14.5 6.61l3.14 1.8l3.13-1.8zm-.31 4.15l-3.14-1.8v3.57l3.14 1.78zM10.12 17L17 13.06l-3.12-1.8L7 15.23z"/></svg>

        <section class="hero-area text-gray-800 md:h-[70vh] h-[40vh] overflow-hidden w-full flex items-center justify-center relative border-b px-4">
            <div class="w-full h-full flex flex-col items-center justify-center max-w-4xl relative">
                {{-- <svg class="w-24 h-24 rotate-90" viewBox="0 0 77 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.33755 84.3973C0.297616 62.7119 2.93494 39.8181 19.4192 23.8736C28.2211 15.3599 42.4944 12.5723 47.6281 26.2359C51.1245 35.5419 51.542 51.9945 41.0605 57.0865C29.486 62.7095 40.2945 35.2221 41.9942 32.4952C49.9497 19.7313 59.7772 11.6122 72.2699 3.78281C76.9496 0.849879 73.7108 0.477284 70.0947 1.13476C66.9572 1.7052 63.4035 2.43717 60.5291 3.81975C59.6524 4.24143 65.7349 2.73236 66.6827 2.44768C70.7471 1.22705 75.4874 -0.0219285 75.9527 5.60812C76.0274 6.5127 75.9956 14.9844 74.7481 15.2963C74.099 15.4586 71.0438 10.27 70.4642 9.65288C66.6996 5.64506 63.5835 4.42393 58.2726 5.11792" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg> --}}
                <h2 class="text-[11vw] md:text-[3.8em] font-bold text-center">
                    Experience the Beauty of <br/>
                    <span class="italic font-serif border-b-2 border-dotted border-red-500 text-red-500">Laravel</span> ,
                    Built with
                    <span class="italic font-serif border-b-2 border-dotted border-red-500 text-red-500">Love</span>
                </h2>
                {{-- <p class="text-center text-sm md:text-md text-zinc-600">Launch your Laravel project faster with our collection of handcrafted boilerplates, templates, starter kits, and landing pages. Build powerful, dynamic, high-performance, feature-rich, and SEO-friendly websites, SaaS, landing pages <br/> and more with Laravel.</p> --}}
                <p class="text-center text-zinc-600 hidden md:block">Discover the simplicity and power of Laravel, built with care and attention to detail. Find easy-to-use solutions that make development smooth and efficient.</p>
            </div>
        </section>

        {{-- Templates/Boilerplates --}}
        <section class="py-12 bg-white border-b">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center">
                    <div class="text-4xl/[1.07] font-bold tracking-tight md:text-5xl/[1.07]">
                        <span class="">Boilerplates and Templates</span>
                    </div>
                    <div class="text-lg text-zinc-400">Full-stack development solution used for building powerful, modern, and reactive applications with Laravel</div>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-6 mt-12">
                    @foreach ($templates as $template)
                        <a class="group flex flex-col h-full border hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-2xl" href="{{route('template-show', $template->slug)}}">
                            <div class="">
                                <div class="aspect-w-16 aspect-h-11">
                                    <img class="w-full object-cover rounded-xl h-[50dvh]" src="{{ $template->thumbnail }}" alt="Image Description">
                                </div>
                                <div class="mt-6 p-5">
                                    <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                                    {{ $template->title }}
                                    </h3>
                                    <p class="mt-2 text-gray-600 dark:text-neutral-400">
                                    At Wake, our mission has always been focused on bringing openness.
                                    </p>
                                </div>
                            </div>
                            <div class="mt-auto border-t p-3">
                                <div class="flex items-center gap-2">
                                    <x-icons.techstack class="w-5 h-5" />
                                    <p><strong>Tech Stack:</strong> <span class="text-zinc-600">{{ $template->tech_stack }}</span></p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="flex items-center justify-center mt-12">
                    <a href="{{route('all-templates')}}" class="bg-red-500 shadow-lg hover:shadow-xl hover:shadow-red-500/50 shadow-red-500/50 text-white rounded-lg px-10 py-2.5">Browse All</a>
                </div>
            </div>
        </section>

        <!-- Blogs -->
        <section class="py-12 max-w-7xl mx-auto px-4">
            <div class="grid max-w-xl items-start justify-between gap-3">
                <div class="text-4xl/[1.07] font-bold tracking-tight md:text-5xl/[1.07]">
                    <span class="">Latest Blogs</span>
                </div>
                <div class="text-lg text-zinc-400/80">Latest blog posts on Laravel resources, tools and tutorials</div>
            </div>
            <!-- Card Blog -->
            <div class="mt-12">
                <!-- Grid -->
                <div class="grid lg:grid-cols-2 gap-6">
                    @forelse ($posts as $post)
                        <x-post-card :post="$post"/>
                    @empty
                        <div class="mx-auto col-span-3">
                            <div class="flex items-center justify-center">
                                <p class="text-2xl font-semibold text-gray-300">No posts found</p>
                            </div>
                        </div>
                    @endforelse
                </div>
                <!-- End Grid -->
                <div class="flex items-center justify-center mt-12">
                    <button class="bg-red-500 shadow-lg hover:shadow-xl hover:shadow-red-500/50 shadow-red-500/50 text-white rounded-lg px-10 py-2.5">Browse All</button>
                </div>
            </div>
            <!-- End Card Blog -->
        </section>

        <!-- Categories -->
        {{-- <section class="mx-auto max-w-7xl py-12">
            <div class="grid max-w-xl items-start justify-between gap-5">
                <div class="text-4xl/[1.07] font-bold tracking-tight md:text-5xl/[1.07]">
                    <span class="bg-gradient-to-br from-white to-zinc-500 bg-clip-text text-transparent">Categories</span>
                </div>
                <div class="text-lg text-zinc-400/80">Our products engineered to streamline <span class="text-gray-200">website design and development</span>, empowering you to create stunning digital experiences with ease and efficiency</div>
            </div>
            <div class="mt-16 grid gap-4 lg:grid-cols-4 lg:gap-6 xl:gap-8">
                @foreach ($categories as $category)
                    <livewire:categories :$category :key="$category->id">
                @endforeach
            </div>
        </section> --}}

        <!-- Resources -->
        <section class="mx-auto max-w-7xl py-12 hidden">
            <div class="grid max-w-xl items-start justify-between gap-5">
                <div class="text-4xl/[1.07] font-bold tracking-tight md:text-5xl/[1.07]">
                    <span class="bg-gradient-to-br from-white to-zinc-500 bg-clip-text text-transparent">Resources</span>
                </div>
                <div class="text-lg text-zinc-400/80">Our products engineered to streamline <span class="text-gray-200">website design and development</span>, empowering you to create stunning digital experiences with ease and efficiency</div>
            </div>
            <div class="mt-16 grid gap-4 lg:grid-cols-3 lg:gap-6 xl:gap-8">
                <!-- Boltwind -->

            </div>
        </section>

        <section class="relative mx-auto max-w-full h-[70vh] px-4 flex flex-col items-center justify-center overflow-hidden  shadow-inner bg-zinc-900">
            <div class="absolute top-0 right-0 flex flex-col items-center justify-center left-0">
                <div aria-hidden="true" class="user-select-none center pointer-events-none h-0.5 w-4/5 max-w-[800px] transform-gpu [background:linear-gradient(90deg,rgba(0,0,0,0)_0%,rgba(239,68,68,0.65)_50%,rgba(0,0,0,0)_100%)]"></div>
            </div>

            <div class="relative isolate">
                <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/5 [mask-image:radial-gradient(40%_80%_at_center,red,transparent)]" aria-hidden="true"><defs><pattern id="cta" width="80" height="80" x="50%" y="-1" patternUnits="userSpaceOnUse"><path d="M.5 200V.5H200" fill="none"></path></pattern></defs><rect width="100%" height="100%" stroke-width="0" fill="url(#cta)"></rect></svg>
                <div class="absolute inset-x-0 top-10 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl" aria-hidden="true">
                    <div class="aspect-[1108/632] w-[69.25rem] flex-none bg-gradient-to-r from-red-500 to-red-800 opacity-20" style="clip-path:polygon(77.5% 40.13%, 90% 10%, 100% 50%, 95% 80%, 92% 85%, 75% 65%, 61.26% 54.7%, 50% 54.7%, 47.24% 65.81%, 50% 85%, 26.16% 73.91%, 0.1% 100%, 1% 40.13%, 20% 48.75%, 60% 0.25%, 67.5% 32.63%)"></div>
                </div>
                <div class="mx-auto max-w-3xl text-center">
                    <h2 class="bg-gradient-to-br from-zinc-100 to-zinc-600 bg-clip-text text-3xl font-bold tracking-tight text-transparent sm:text-4xl">Get in Touch with LoveLaravel</h2>
                    <p class="mt-6 text-lg text-zinc-100/50">Have questions or ready to start your next project? Reach out to the Special-26 team today. Whether it's a simple inquiry or a detailed project proposal, we're here to listen, assist, and turn your ideas into reality.</p>
                    <p class="mt-6 text-lg text-zinc-100/50">Contact us now to begin your journey towards digital excellence.</p>
                    <div class="mt-12 flex items-center justify-center">
                        <router-link to='/contact'>
                            <button class="group relative rounded-full p-px text-sm/6 text-zinc-400 duration-300 hover:text-zinc-100 hover:shadow-glow" type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:Rvraqla:" data-state="closed">
                                <span class="absolute inset-0 overflow-hidden rounded-full">
                                    <span class="absolute inset-0 rounded-full bg-[image:radial-gradient(75%_100%_at_50%_0%,rgba(239,68,68,0.6)_0%,rgba(239,68,68,0)_75%)] opacity-0 transition-opacity duration-500 group-hover:opacity-100"></span>
                                </span>
                                <div class="relative z-10 rounded-full bg-zinc-950 px-4 py-1.5 ring-1 ring-white/10">Contact Us Now</div>
                                <span class="absolute -bottom-0 left-[1.125rem] h-px w-[calc(100%-2.25rem)] bg-gradient-to-r from-red-400/0 via-red-400/90 to-red-400/0 transition-opacity duration-500 group-hover:opacity-40"></span>
                            </button>
                        </router-link>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class='p-4 shadow hidden md:flex md:items-center md:justify-between md:p-6 bg-white dark:bg-zinc-900 w-full dark:border-zinc-800'>
            <span class='text-sm text-zinc-500 sm:text-center dark:text-zinc-500'>© 2024 LoveLaravel</span>
            <div class='flex flex-wrap gap-5 items-center justify-between text-sm text-zinc-500 dark:text-zinc-400'>
            <div class="w-full flex items-center gap-1 justify-end">
                <h4 class="text-xs text-zinc-700 dark:text-zinc-400">Inked By :</h4>
                <img src="/images/vimalbharti.png" alt="Vimal Bharti" class="w-7 h-7 rounded-full object-cover border">
                <a href="https://twitter.com/vimal_bharti" target="_blank" class="text-xs text-zinc-600 dark:text-zinc-300 hover:underline">Vimal Bharti</a>
            </div>
            </div>
        </footer>
    </div>
</x-app-layout>

