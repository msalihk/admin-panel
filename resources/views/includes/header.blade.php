<div class="bg-black text-white relative z-50" x-data="{ open: false, expand: false }" x-transition>
    <header class="bg-black py-3 h-16 container max-w-7xl mx-auto">
        <div class="container mx-auto flex items-center justify-between h-full">
            <div class="flex items-center ml-4 xl:ml-0">
                <a href="/" class="text-2xl font-bold mr-8">BBC</a>
            </div>
            <div class="flex items-center space-x-6">
                <nav>
                    <ul class="xl:flex xl:space-x-6 invisible xl:visible">
                        <li class="h-full text-center"><a href="/" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-white">Home</a></li>
                        <li class="h-full text-center"><a href="/news" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-red-500">News</a></li>
                        <li class="h-full text-center"><a href="/sport" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-yellow-500">Sport</a></li>
                        <li class="h-full text-center"><a href="/reels" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-blue-500">Reels</a></li>
                        <li class="h-full text-center"><a href="/worklife" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-blue-700">Worklife</a></li>
                        <li class="h-full text-center"><a href="/travel" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-green-500">Travel</a></li>
                        <li class="h-full text-center"><a href="/future" class="cursor-pointer hover:border-solid hover:border-b-4 hover:border-purple-500">Future</a></li>
                    </ul>
                    <div x-show="expand"
                        class="absolute inset-x-0 top-0 mx-auto max-w-7xl h-full w-full"
                    >
                        <form method="get" action="/search" class="h-full">
                            @csrf
                            <input type="text" name="query" placeholder="Search in BBC..." class="kolonya appearance-none h-full w-full py-3 pl-5 md:pl-2 pr-12 outline-none text-black">
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
                    <a x-on:click="open = ! open" class="cursor-pointer hover:border-solid hover:border-b-2 text-center hover:border-white invisible xl:visible">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </a>
                    <a class="xl:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                          </svg>

                    </a>
                    <a x-on:click="expand = ! expand" class="cursor-pointer hover:border-solid hover:border-b-4 text-center hover:border-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                          </svg>

                    </a>
                </div>
            </div>
        </div>
    </header>
    <div x-show="open" x-transition class="bg-black py-3 h-16 container max-w-7xl mx-auto">
        <section class="container mx-auto flex items-center justify-between h-full">
            <nav>
                <ul class="flex space-x-6">
                    <li class="h-full text-center"><a href="/culture" class="hover:border-solid hover:border-b-4 hover:border-white">Culture</a></li>
                    <li class="h-full text-center"><a href="/tv" class="hover:border-solid hover:border-b-4 hover:border-red-500">TV</a></li>
                    <li class="h-full text-center"><a href="/weather" class="hover:border-solid hover:border-b-4 hover:border-yellow-500">Weather</a></li>
                    <li class="h-full text-center"><a href="/sounds" class="hover:border-solid hover:border-b-4 hover:border-blue-500">Sounds</a></li>
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
