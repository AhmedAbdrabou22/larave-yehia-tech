<x-layout title="Comments">
    <div class="mx-auto max-w-4xl">

        {{-- Header --}}
        <div class="mb-8 flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                    Comments
                </h1>
                <p class="mt-1 text-sm text-gray-500">
                    {{ $comments->count() }} {{ Str::plural('comment', $comments->count()) }} available
                </p>
            </div>

            <a href="/comments/create"
               class="inline-flex items-center gap-2 rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                New Comment
            </a>
        </div>

        {{-- Empty State --}}
        @if ($comments->isEmpty())
            <div class="rounded-2xl border-2 border-dashed border-gray-300 bg-white p-12 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                <h3 class="mt-4 text-lg font-semibold text-gray-900">No comments yet</h3>
                <p class="mt-1 text-sm text-gray-500">Be the first to share your thoughts.</p>
                <a href="/comments/create"
                   class="mt-6 inline-flex items-center rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700">
                    Add Comment
                </a>
            </div>
        @else

            {{-- Comments List --}}
            <div class="space-y-4">
                @foreach ($comments as $comment)
                    <article class="group rounded-2xl border border-gray-200 bg-white p-6 shadow-sm transition hover:border-indigo-200 hover:shadow-md">

                        {{-- Post Badge --}}
                        @if ($comment->post)
                            <a href="/post/{{ $comment->post->id }}"
                               class="mb-3 inline-flex items-center gap-1.5 rounded-full bg-indigo-50 px-3 py-1 text-xs font-medium text-indigo-700 transition hover:bg-indigo-100">
                                <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                {{ $comment->post->title }}
                            </a>
                            {{ $comment->post }}
                        @endif

                        {{-- Comment Content --}}
                        <p class="text-gray-800 leading-relaxed">
                            {{ $comment->content }}
                        </p>

                        {{-- Footer Meta --}}
                        <div class="mt-4 flex items-center justify-between border-t border-gray-100 pt-4">
                            <div class="flex items-center gap-2 text-xs text-gray-500">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{ $comment->created_at?->diffForHumans() ?? 'Just now' }}
                            </div>

                            <div class="flex items-center gap-3 opacity-0 transition group-hover:opacity-100">
                                <a href="/comments/{{ $comment->id }}/edit"
                                   class="text-xs font-medium text-gray-600 hover:text-indigo-600">
                                    Edit
                                </a>
                                <form action="/comments/{{ $comment->id }}" method="POST"
                                      onsubmit="return confirm('Delete this comment?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="text-xs font-medium text-gray-600 hover:text-red-600">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

        @endif
    </div>
</x-layout>