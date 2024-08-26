<div class="max-w-5xl mx-auto py-12">
    <h1 class="text-4xl font-bold mb-6">{{ $template->title }}</h1>
    <img src="{{ $template->video_thumbnail }}" alt="" class="my-5 w-full">

    <div class="grid grid-cols-3 divide-x-2 rounded border my-10">
        <div class="p-6 flex items-center">
            <div class="flex items-center gap-2">
                <x-icons.loop class="w-6 h-6" />
                <p><strong>Last Update On:</strong> <span class="text-zinc-600">04/07/2024</span></p>
            </div>
        </div>
        <div class="p-6 flex items-center">
            <div class="flex items-center gap-2">
                <x-icons.techstack class="w-6 h-6" />
                <p><strong>Stack:</strong> <span class="text-zinc-600">{{ $template->tech_stack }}</span></p>
            </div>
        </div>
        <div class="p-6">
            <button class="bg-zinc-900 text-white px-8 py-3 rounded-lg flex items-center justify-center gap-2">
                <x-icons.github class="w-6 h-6" />
                Get Template
            </button>
        </div>
    </div>

    <section class="w-full prose prose-sm !max-w-none">
        {!! $template->body !!}
    </section>
</div>
