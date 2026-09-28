<x-layout title="{{ $company->name }}">
    <div class="max-w-3xl mx-auto py-10 px-4">

        {{-- Breadcrumb --}}
        <nav class="text-sm text-gray-500 mb-6">
            <a href="/company" class="hover:text-indigo-600">Companies</a>
            <span class="mx-2">/</span>
            <span class="text-gray-800">{{ $company->name }}</span>
        </nav>

        {{-- Card --}}
        <div class="bg-white shadow-lg rounded-2xl border border-gray-100 p-8">

            {{-- Header --}}
            <div class="flex items-center gap-4 border-b pb-6">
                <div class="w-14 h-14 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 text-2xl font-bold">
                    {{ strtoupper(substr($company->name, 0, 1)) }}
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">{{ $company->name }}</h1>
                    <p class="text-sm text-gray-500">Company Profile</p>
                </div>
            </div>

            {{-- Body --}}
            <div class="mt-6 space-y-4">
                <div>
                    <h2 class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Description</h2>
                    <p class="mt-1 text-gray-700 leading-relaxed">{{ $company->desc }}</p>
                </div>

                <div>
                    <h2 class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Employees</h2>
                    <p class="mt-1 text-gray-700">
                        <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm font-medium">
                            👥 {{ $company->numEm }} employees
                        </span>
                    </p>
                </div>
            </div>

            {{-- Footer --}}
            <div class="mt-8 pt-6 border-t flex justify-end">
                <a href="/company"
                   class="px-4 py-2 text-sm rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-700 transition">
                    ← Back
                </a>
            </div>
        </div>
    </div>
</x-layout>