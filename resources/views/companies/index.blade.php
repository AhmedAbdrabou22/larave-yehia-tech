<x-layout title="Companies">
    <div class="max-w-6xl mx-auto py-10 px-4">

        {{-- Header --}}
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Companies</h1>
                <p class="text-gray-500 text-sm mt-1">All registered companies in the system</p>
            </div>
            <a href="#"
               class="px-4 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium shadow transition">
                + New Company
            </a>
        </div>

        {{-- Grid --}}
        @if ($companies->isEmpty())
            <div class="text-center py-20 text-gray-400">
                No companies found.
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($companies as $company)
                    <div class="bg-white rounded-2xl shadow hover:shadow-lg border border-gray-100 p-6 transition group">

                        {{-- Avatar + Name --}}
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-11 h-11 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center font-bold">
                                {{ strtoupper(substr($company->name, 0, 1)) }}
                            </div>
                            <h2 class="font-semibold text-gray-800 group-hover:text-indigo-600 transition">
                                {{ $company->name }}
                            </h2>
                        </div>

                        {{-- Description --}}
                        <p class="text-sm text-gray-600 line-clamp-2 mb-4">
                            {{ $company->desc }}
                        </p>

                        {{-- Footer --}}
                        <div class="flex items-center justify-between">
                            <span class="text-xs px-2.5 py-1 rounded-full bg-green-100 text-green-700 font-medium">
                                {{ $company->numEm }} employees
                            </span>
                            <a href="#" class="text-sm text-indigo-600 hover:underline font-medium">
                                View →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layout>