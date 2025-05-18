<head>

</head>

<div>
    @if (Route::has('login'))
        <nav class="flex items-center justify-between gap-4 p-4 bg-white px-28">
            <div class="logo">
                <h1 class="text-2xl font-black">
                    <span><a href="{{ url('/') }}">Boive</a></span>
                </h1>
            </div>
            <div class="links">
                <ul class="flex gap-10 text-sm">
                    <li class="">
                        <a class="hover:text-green-700 relative inline-block group text-gray-800 font-bold"
                            href="{{ url('/') }}">Home
                            <span
                                class="absolute left-0 bottom-0 w-0 h-[2px] bg-green-700 transition-all duration-300 ease-in-out group-hover:w-full"></span>
                        </a>
                    </li>
                    <li class="">
                        <a class="hover:text-green-700 relative inline-block group text-gray-800 font-bold"
                            href="{{ route('books.all') }}">Books
                            <span
                                class="absolute left-0 bottom-0 w-0 h-[2px] bg-green-700 transition-all duration-300 ease-in-out group-hover:w-full"></span>
                        </a>
                    </li>
                    <li class="">
                        <a class="hover:text-green-700 relative inline-block group text-gray-800 font-bold"
                            href="">Books
                            <span
                                class="absolute left-0 bottom-0 w-0 h-[2px] bg-green-700 transition-all duration-300 ease-in-out group-hover:w-full"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="buttons">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 text-[#1b1b18] border border-transparent hover:border-[#19140035] rounded-sm text-sm leading-normal">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        </nav>
    @endif
</div>
