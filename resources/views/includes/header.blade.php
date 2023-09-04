<div class="bg-black text-white relative z-40 " x-data="{ open: false, expand: false, hamburger: false }" x-transition>
    <header class="bg-black py-3 h-16 container max-w-7xl mx-auto ">
        <div class="mx-4 xl:mx-0 flex items-center justify-between h-full ">
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold mr-8">BBC</a>
            </div>
            <div class="flex items-center space-x-6 ">
                <nav class="">
                    <ul class="xl:flex xl:space-x-6 invisible xl:visible">
                        <li class="h-full text-center"><a href="/" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-white">Home</a></li>
                        <li class="h-full text-center"><a href="/categories/news" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-red-500">News</a></li>
                        <li class="h-full text-center"><a href="/categories/sports" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-yellow-500">Sports</a></li>
                        <li class="h-full text-center"><a href="/categories/reels" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-blue-500">Reels</a></li>
                        <li class="h-full text-center"><a href="/categories/worklife" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-blue-700">Worklife</a></li>
                        <li class="h-full text-center"><a href="/categories/travel" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-green-500">Travel</a></li>
                        <li class="h-full text-center"><a href="/categories/future" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-purple-500">Future</a></li>
                    </ul>
                    {{-- Hamburger Menu --}}
                    <div x-show="hamburger" x-cloak class="z-50 h-screen w-full md:w-1/2 justify-end bg-black fixed inset-0"
                        x-transition:enter="transition origin-top ease-out duration-300"
                        x-transition:enter-start="transform -translate-x-full opacity-0"
                        x-transition:enter-end="transform translate-x-0 opacity-100"
                        x-transition:leave="transition origin-top ease-out duration-300"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                    >

                              <!-- Menu for small screens -->
                              <ul class="space-y-8 mt-32 items-center justify-center">
                                <li class="h-full align-middle text-center text-2xl"><a href="/" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-white">Home</a></li>
                                <li class="h-full align-middle text-center text-2xl"><a href="/news" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-red-500">News</a></li>
                                <li class="h-full align-middle text-center text-2xl"><a href="/sport" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-yellow-500">Sport</a></li>
                                <li class="h-full align-middle text-center text-2xl"><a href="/reels" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-blue-500">Reels</a></li>
                                <li class="h-full align-middle text-center text-2xl"><a href="/worklife" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-blue-700">Worklife</a></li>
                                <li class="h-full align-middle text-center text-2xl"><a href="/travel" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-green-500">Travel</a></li>
                                <li class="h-full align-middle text-center text-2xl"><a href="/future" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-purple-500">Future</a></li>
                                <li class="h-full align-middle text-center text-2xl"><a href="/culture" class="hover:border-solid hover:border-b-4 hover:border-white">Culture</a></li>
                                <li class="h-full align-middle text-center text-2xl"><a href="/tv" class="hover:border-solid hover:border-b-4 hover:border-red-500">TV</a></li>
                                <li class="h-full align-middle text-center text-2xl"><a href="/weather" class="hover:border-solid hover:border-b-4 hover:border-yellow-500">Weather</a></li>
                                <li class="h-full align-middle text-center text-2xl"><a href="/sounds" class="hover:border-solid hover:border-b-4 hover:border-blue-500">Sounds</a></li>
                              </ul>

                              <!-- Close Button -->
                              <a x-on:click="hamburger = ! hamburger" class="cursor-pointer hover:border-solid hover:border-b-2 text-center hover:border-white absolute right-4 top-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                  </svg>

                            </a>
                    </div>
                    <div x-show="expand" x-cloak
                    x-transition:enter="transition origin-top ease-out duration-300"
                    x-transition:enter-start="transform -translate-y-full opacity-0"
                    x-transition:enter-end="transform translate-y-0 opacity-100"
                    x-transition:leave="transition origin-top ease-out duration-300"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    :class="open ? 'h-1/2' : 'h-full'"
                    class="absolute inset-x-0 top-0 mx-auto max-w-7xl w-full "
                    >
                        <form method="get" action="/search" class="h-full ">
                            @csrf
                            <input type="text" name="query" placeholder="Search in BBC..." class="appearance-none h-full w-full py-3 pl-5 md:pl-2 pr-12 outline-none text-black ">
                            <span class="absolute right-0 top-0 h-full flex items-center pr-6 md:pr-2 space-x-2">
                                <a class="cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-400 hover:text-black w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>
                                </a>
                                <a x-on:click="expand = ! expand" class="cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400 hover:text-black">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                      </svg>
                                </a>
                            </span>
                        </form>
                    </div>
                </nav>
                <div class="flex items-center space-x-6">
                    <a x-on:click="open = ! open" class="cursor-pointer text-center invisible xl:visible">
                        <div class="hover:border-white hover:border-solid hover:border-b-4 w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>
                        </div>
                    </a>
                    <a x-on:click="hamburger = ! hamburger" class="xl:hidden cursor-pointer">
                        <div class="hover:border-violet-500 hover:border-solid hover:border-b-4 w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </div>
                    </a>
                    <a x-on:click="expand = ! expand" class="cursor-pointer text-center">
                        <div class="hover:border-rose-500 hover:border-solid hover:border-b-4 w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div x-show="open" x-cloak x-transition class="bg-black py-3 h-16 container max-w-7xl mx-auto">
        <section class="container mx-auto flex items-center justify-between h-full">
            <nav>
                <ul class="flex space-x-6">
                    <li class="h-full text-center"><a href="/categories/culture" class="hover:border-solid hover:border-b-4 hover:border-white">Culture</a></li>
                    <li class="h-full text-center"><a href="/categories/tv" class="hover:border-solid hover:border-b-4 hover:border-red-500">TV</a></li>
                    <li class="h-full text-center"><a href="/categories/weather" class="hover:border-solid hover:border-b-4 hover:border-yellow-500">Weather</a></li>
                    <li class="h-full text-center"><a href="/categories/sounds" class="hover:border-solid hover:border-b-4 hover:border-blue-500">Sounds</a></li>
                </ul>
            </nav>
            <a x-on:click="open = ! open" class="cursor-pointer hover:border-solid hover:border-b-2 text-center hover:border-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>

            </a>
        </section>
    </div>
</div>
