<div class="bg-black text-white relative z-50" x-data="{ open: false }">
    <header class="bg-black py-3 h-16 container max-w-7xl mx-auto">
        <div class="container mx-auto flex items-center justify-between h-full">
            <div class="flex items-center">
                <a href="#" class="text-2xl font-bold mr-8">BBC</a>
            </div>
            <div class="flex items-center space-x-6">
                <nav>
                    <ul class="flex space-x-6">
                        <li class="h-full text-center"><a href="/" class="hover:border-solid hover:border-b-4 hover:border-white">Home</a></li>
                        <li class="h-full text-center"><a href="/news" class="hover:border-solid hover:border-b-4 hover:border-red-500">News</a></li>
                        <li class="h-full text-center"><a href="/sport" class="hover:border-solid hover:border-b-4 hover:border-yellow-500">Sport</a></li>
                        <li class="h-full text-center"><a href="/reels" class="hover:border-solid hover:border-b-4 hover:border-blue-500">Reels</a></li>
                        <li class="h-full text-center"><a href="/worklife" class="hover:border-solid hover:border-b-4 hover:border-blue-700">Worklife</a></li>
                        <li class="h-full text-center"><a href="/travel" class="hover:border-solid hover:border-b-4 hover:border-green-500">Travel</a></li>
                        <li class="h-full text-center"><a href="/future" class="hover:border-solid hover:border-b-4 hover:border-purple-500">Future</a></li>
                    </ul>
                </nav>
                <div class="flex items-center space-x-6">
                    <a x-on:click="open = ! open" class="hover:border-solid hover:border-b-4 text-center hover:border-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </a>
                    <a href="" class="hover:border-solid hover:border-b-4 text-center hover:border-white">
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
            <a href=""></a>
        </section>
    </div>
</div>
