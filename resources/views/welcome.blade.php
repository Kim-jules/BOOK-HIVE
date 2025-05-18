{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-100 text-gray-900 min-h-screen">
    <nav class="">
        <div class="logo">
            <span class="text-2xl">Boive</span>
        </div>
        @if (Route::has('login'))
            <div class="space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </nav>
    <main>
        <h1 class="text-3xl font-bold mb-4">Welcome</h1>
        <p class="text-lg">You are running Laravel!</p>
    </main>
</body>

</html> --}}


<x-unauthorized-layout>
    <div class="container flex flex-col gap-10">
        <div class="message w-full h-[700px] flex items-center justify-center bg-white">
            <div class="image w-1/2 h-full">
                <img src="/images/library2.jpg" alt="library" class="w-full h-full object-cover">
            </div>
            <div class="px-20 w-1/2 h-full flex flex-col justify-center gap-8">
                <h1 class="text-4xl font-black logo">"Access Every Chapter of Possibility."
                </h1>
                <p>
                    Welcome to Boive E-Library — your digital gateway to a world of knowledge.
                    Discover thousands of books across diverse topics, from timeless classics to the latest
                    breakthroughs. Whether you're here to explore, learn, or dive deep into a new passion — Boive is
                    designed to make your reading experience seamless, intelligent, and inspiring.
                </p>
                <button class="p-4 w-1/5 bg-green-700 text-white">
                    View Books
                </button>
            </div>
        </div>
        <div class="content">
            @include('components.view-books')
        </div>
    </div>
</x-unauthorized-layout>
