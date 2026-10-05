<x-layout>
    @forelse ($tags as $tag)
                <article class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition hover:shadow-md">

                    {{-- Post Content --}}
                    <div class="p-6 sm:p-8">
                        <h2 class="text-2xl font-bold text-gray-900">
                            {{ $tag->title }}
                        </h2>
                    </div>

                </article>
            @empty
                <div class="rounded-2xl border-2 border-dashed border-gray-300 bg-white p-12 text-center">
                    <h3 class="text-lg font-semibold text-gray-900">No Tags yet</h3>
                    <p class="mt-1 text-sm text-gray-500">Check back later.</p>
                </div>
            @endforelse
</x-layout>