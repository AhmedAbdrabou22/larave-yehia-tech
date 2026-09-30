<x-layout title="Blog">
    <div class="mx-auto max-w-4xl">

        {{-- Header --}}
        <header class="mb-10 text-center">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900">
                Blog Posts
            </h1>
            <p class="mt-2 text-gray-500">
                {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} available
            </p>
        </header>

        {{-- Posts List --}}
        <div class="space-y-8">
            @forelse ($posts as $post)
                <article class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition hover:shadow-md">

                    {{-- Post Content --}}
                    <div class="p-6 sm:p-8">
                        <h2 class="text-2xl font-bold text-gray-900">
                            {{ $post->title }}
                        </h2>

                        <div class="mt-2 flex items-center gap-2 text-sm text-gray-500">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            {{ $post->author }}
                        </div>

                        <p class="mt-4 leading-relaxed text-gray-700">
                            {{ $post->body }}
                        </p>
                    </div>

                    {{-- Comments Section --}}
                    <div class="border-t border-gray-100 bg-gray-50 px-6 py-5 sm:px-8">
                        <div class="mb-3 flex items-center gap-2">
                            <svg class="h-5 w-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                            <h3 class="text-sm font-semibold text-gray-900">
                                Comments ({{ $post->comments->count() }})
                            </h3>
                        </div>

                        @forelse ($post->comments as $comment)
                            <div class="mb-2 rounded-lg border border-gray-200 bg-white p-4 last:mb-0">
                                <div class="flex items-center justify-between">
                                    <strong class="text-sm font-medium text-gray-900">
                                        {{ $comment->author }}
                                    </strong>
                                    <span class="text-xs text-gray-400">
                                        {{ $comment->created_at?->diffForHumans() }}
                                    </span>
                                </div>
                                <p class="mt-1 text-sm text-gray-700">
                                    {{ $comment->content }}
                                </p>
                            </div>
                        @empty
                            <p class="text-sm italic text-gray-400">
                                No comments yet.
                            </p>
                        @endforelse
                    </div>

                </article>
            @empty
                <div class="rounded-2xl border-2 border-dashed border-gray-300 bg-white p-12 text-center">
                    <h3 class="text-lg font-semibold text-gray-900">No posts yet</h3>
                    <p class="mt-1 text-sm text-gray-500">Check back later.</p>
                </div>
            @endforelse
        </div>

    </div>
</x-layout>