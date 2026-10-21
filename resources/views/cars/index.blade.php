<x-layout>
    <div class="max-w-6xl mx-auto px-4 py-10">

        {{-- Header --}}
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 flex items-center gap-3">
                    <span class="inline-flex items-center justify-center w-11 h-11 rounded-xl bg-indigo-100 text-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l1.5-4.5A2 2 0 018.4 7h7.2a2 2 0 011.9 1.5L19 13m-14 0h14m-14 0v4a1 1 0 001 1h1m12-5v4a1 1 0 01-1 1h-1M7 17h10"/>
                        </svg>
                    </span>
                    Cars
                </h1>
                <p class="mt-1 text-sm text-gray-500">قائمة السيارات المتاحة</p>
            </div>
            <span class="text-sm font-medium text-gray-600 bg-gray-100 px-3 py-1.5 rounded-full">
                {{ $data->count() }} سيارة
            </span>
        </div>

        {{-- Grid --}}
        @if ($data->isEmpty())
            <div class="text-center py-20 bg-white rounded-2xl border border-dashed border-gray-300">
                <p class="text-gray-500">لا توجد سيارات لعرضها.</p>
            </div>
        @else
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($data as $car)
                    <div class="group bg-white rounded-2xl shadow-sm hover:shadow-lg border border-gray-100 transition-all duration-200 overflow-hidden">
                        {{-- Badge السنة --}}
                        <div class="relative h-32 bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center">
                            <span class="text-white/90 text-5xl font-black tracking-tight">
                                {{ $car->year }}
                            </span>
                            <span class="absolute top-3 right-3 text-xs font-semibold bg-white/20 text-white px-2.5 py-1 rounded-full backdrop-blur">
                                Year
                            </span>
                        </div>

                        {{-- Body --}}
                        <div class="p-5">
                            <h2 class="text-lg font-bold text-gray-900 group-hover:text-indigo-600 transition-colors">
                                {{ $car->name }}
                            </h2>
                            <p class="text-sm text-gray-500 mt-0.5">{{ $car->model }}</p>

                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-medium text-gray-400 uppercase tracking-wider">Model</span>
                                <span class="text-sm font-semibold text-gray-700">{{ $car->model }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

{{ $data->links() }}

    </div>
</x-layout>