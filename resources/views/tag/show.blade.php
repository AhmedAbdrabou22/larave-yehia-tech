<x-layout>
    <article class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition hover:shadow-md">

        {{-- Post Content --}}
        <div class="p-6 sm:p-8">
            <h2 class="text-2xl font-bold text-gray-900">
                {{ $post->title }}
            </h2>
            <p class="mt-4 text-gray-700">
                {{ $post->body }}
            </p>
        </div>

    </article>
</x-layout>