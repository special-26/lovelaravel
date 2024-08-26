<section class="py-12 bg-white border-b">
    <div class="max-w-6xl mx-auto">
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
            {{-- <a class="group flex flex-col h-full border hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-2xl" href="#">
                <div class="p-5">
                    <div class="aspect-w-16 aspect-h-11">
                        <img class="w-full object-cover rounded-xl h-[45dvh]" src="https://images.unsplash.com/photo-1633114128174-2f8aa49759b0" alt="Image Description">
                    </div>
                    <div class="mt-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                        Announcing a free plan for small teams
                        </h3>
                        <p class="mt-2 text-gray-600 dark:text-neutral-400">
                        At Wake, our mission has always been focused on bringing openness.
                        </p>
                    </div>
                </div>
                <div class="mt-auto border-t">
                    <button class="w-full text-zinc-800 p-4 flex items-center gap-2 justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"><path fill="currentColor" d="M12 15.575q-.2 0-.375-.062T11.3 15.3l-3.6-3.6q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L11 12.15V5q0-.425.288-.712T12 4t.713.288T13 5v7.15l1.875-1.875q.3-.3.713-.288t.712.313q.275.3.288.7t-.288.7l-3.6 3.6q-.15.15-.325.213t-.375.062M6 20q-.825 0-1.412-.587T4 18v-2q0-.425.288-.712T5 15t.713.288T6 16v2h12v-2q0-.425.288-.712T19 15t.713.288T20 16v2q0 .825-.587 1.413T18 20z"/></svg>
                        Download
                    </button>
                </div>
            </a> --}}
        </div>

        <div class="paginaion mt-8">
            {{ $templates->links() }}
        </div>
    </div>
</section>
