<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Job Board') }}</title>

    {{-- Tailwind CDN (للتجربة فقط - في production استخدم Vite) --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                },
            },
        }
    </script>
</head>

<body class="min-h-screen bg-gray-50 font-sans text-gray-800 antialiased">

    {{-- Navbar --}}
    <nav class="sticky top-0 z-50 border-b border-gray-200 bg-white/80 backdrop-blur">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">

            {{-- Logo --}}
            <a href="/" class="flex items-center gap-2 text-xl font-bold text-indigo-600">
                <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Job Board
            </a>

            {{-- Desktop Links --}}
            <div class="hidden items-center gap-1 md:flex">
                <a href="/"
                   class="rounded-lg px-4 py-2 text-sm font-medium transition
                          {{ request()->is('/') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}">
                    Home
                </a>
                <a href="/about"
                   class="rounded-lg px-4 py-2 text-sm font-medium transition
                          {{ request()->is('about') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}">
                    About
                </a>
                <a href="/contact"
                   class="rounded-lg px-4 py-2 text-sm font-medium transition
                          {{ request()->is('contact') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}">
                    Contact
                </a>
            </div>

           

        
    </nav>

    {{-- Main Content --}}
    <main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        {{ $slot }}
    </main>


</body>

</html>