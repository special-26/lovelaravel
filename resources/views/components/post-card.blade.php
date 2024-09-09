@props(['post'])
<a class="group flex flex-col rounded-xl hover:shadow-xl" href="{{ route('filamentblog.post.show', ['post' => $post->slug]) }}">
    <div class="flex-shrink-0 relative rounded-xl overflow-hidden h-[300px] w-full">
        <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-110 transition duration-700 ease-in-out" src="{{ Storage::url($post->cover_photo_path) }}" alt="{{ $post->photo_alt_text }}" alt="Image Description">
    </div>
    <div class="grow">
        <div class="p-4 flex flex-col h-full sm:p-6">
            <div class="mb-3 flex items-center gap-2">
                @foreach ($post->categories as $category)
                    <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-gray-100 text-gray-800 dark:bg-neutral-800 dark:text-neutral-200">
                        {{ $category->name }}
                    </span>
                @endforeach
            </div>
            <h3 class="text-lg sm:text-2xl font-semibold text-gray-800" title="{{ $post->title }}">
                {{ $post->title }}
            </h3>
            <p class="mt-2 text-gray-600 dark:text-neutral-400 line-clamp-3">
                {{ Str::limit($post->sub_title, 100) }}
            </p>

            <div class="mt-5 sm:mt-auto">
                <!-- Avatar -->
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="size-[32px] rounded-full" src="{{ $post->user->avatar }}" alt="{{ $post->user->name() }}">
                    </div>
                    <div class="ms-2.5 sm:ms-4">
                    <h4 class="font-semibold text-gray-800 dark:text-neutral-200" title="{{ $post->user->name() }}">
                        {{ $post->user->name() }}
                    </h4>
                    <p class="text-xs text-gray-500 dark:text-neutral-500">
                        {{ $post->formattedPublishedDate() }}
                    </p>
                    </div>
                </div>
                <!-- End Avatar -->
            </div>
        </div>
    </div>
</a>

