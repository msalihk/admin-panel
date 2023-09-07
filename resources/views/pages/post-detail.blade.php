@extends('layouts.default')

@section('content')
    @switch($category)
        @case('News')
            <div class="bg-newsRed w-full py-3">
            @break

        @case('Sports')
            <div class="bg-bbcYellow w-full py-3">
            @break

        @case('Reels')
            <div class="bg-blue-500 w-full py-3">
            @break

        @case('Worklife')
            <div class="bg-blue-700 w-full py-3">
            @break

        @case('Travel')
            <div class="bg-green-500 w-full py-3">
            @break

        @case('Future')
            <div class="bg-purple-500 w-full py-3">
            @break

        @case('Culture')
            <div class="bg-white w-full py-3 border-solid border-2 border-black">
            @break

        @case('TV')
            <div class="bg-bbcRed w-full py-3">
            @break

        @case('Weather')
            <div class="bg-cyan-500 w-full py-3">
            @break

        @case('Sounds')
            <div class="bg-orange-500 w-full py-3">
            @break
        @default

    @endswitch
        <div class="container mx-auto max-w-7xl">
            <span class="uppercase mx-4 xl:mx-0 text-white text-4xl font-bold py-2">{{$category}}</span>
        </div>
    </div>
    <div class="container mx-auto max-w-7xl py-20">
        <div class="grid grid-cols-4 gap-6">
            <section class="col-span-3">
                <h1 class="text-[2.75rem] leading-none font-medium text-detailBlack m-0 p-0 mb-5 border-0">{{ $post->title }}</h1>

                <div class="flex justify-between mx-0 p-0 mt-4 mb-4 py-2 border-y-2 border-gray-300 border-solid">
                    <div class="font-normal text-sm leading-5 max-w-full flex m-0 p-0">
                        <span class="flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-hoursGray">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                        <span class="text-hoursGray flex justify-center items-center ml-2">{{ $hours }}</span>
                    </div>
                    <div class="flex space-x-2 justify-center items-center">
                        <span data-share-title="Twitter" class="twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#DC7633" width="20" viewBox="0 0 375 374.9999" height="20"><defs><path d="M 7.09375 7.09375 L 367.84375 7.09375 L 367.84375 367.84375 L 7.09375 367.84375 Z M 7.09375 7.09375 " fill="#0f1419"></path></defs><path d="M 187.46875 7.09375 C 87.851562 7.09375 7.09375 87.851562 7.09375 187.46875 C 7.09375 287.085938 87.851562 367.84375 187.46875 367.84375 C 287.085938 367.84375 367.84375 287.085938 367.84375 187.46875 C 367.84375 87.851562 287.085938 7.09375 187.46875 7.09375 " fill-opacity="1" fill-rule="nonzero" fill="#0f1419"></path><g transform="translate(85, 75)"> <svg xmlns="http://www.w3.org/2000/svg" width="213" height="213" viewBox="0 0 300 300" version="1.1"><path d="M178.57 127.15 290.27 0h-26.46l-97.03 110.38L89.34 0H0l117.13 166.93L0 300.25h26.46l102.4-116.59 81.8 116.59h89.34M36.01 19.54H76.66l187.13 262.13h-40.66" fill="#ffffff"></path></svg></g></svg>
                        </span>
                        <span data-share-title="Facebook" class="facebook">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.6875 10.5C19.6875 5.14844 15.3516 0.8125 10 0.8125C4.64844 0.8125 0.3125 5.14844 0.3125 10.5C0.3125 15.3438 3.82812 19.3672 8.47656 20.0703V13.3125H6.01562V10.5H8.47656V8.39062C8.47656 5.96875 9.92188 4.60156 12.1094 4.60156C13.2031 4.60156 14.2969 4.79688 14.2969 4.79688V7.17969H13.0859C11.875 7.17969 11.4844 7.92188 11.4844 8.70312V10.5H14.1797L13.75 13.3125H11.4844V20.0703C16.1328 19.3672 19.6875 15.3438 19.6875 10.5Z" fill="#4267B2"></path>
                            </svg>
                        </span>
                        <span data-share-title="Telegram" class="telegram">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.6875 0.8125C4.33594 0.8125 0 5.14844 0 10.5C0 15.8516 4.33594 20.1875 9.6875 20.1875C15.0391 20.1875 19.375 15.8516 19.375 10.5C19.375 5.14844 15.0391 0.8125 9.6875 0.8125ZM14.4141 7.45312L12.8516 14.9531C12.7344 15.5 12.4219 15.6172 11.9531 15.3828L9.53125 13.5859L8.35938 14.7188C8.24219 14.8359 8.125 14.9531 7.89062 14.9531L8.04688 12.4922L12.5391 8.42969C12.7344 8.27344 12.5 8.15625 12.2266 8.3125L6.67969 11.8281L4.29688 11.0859C3.78906 10.9297 3.78906 10.5391 4.41406 10.3047L13.75 6.71094C14.1797 6.55469 14.5703 6.82812 14.4141 7.45312Z" fill="#0088cc"></path>
                            </svg>
                        </span>
                        <span data-share-title="Whatsapp" class="whatsapp">
                            <svg width="21" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="0.00024000000000000003"><g stroke-width="0" transform="translate(0.4800000000000004,0.4800000000000004), scale(0.96)"><rect x="0" y="0" width="24.00" height="24.00" rx="12" fill="#25d366" strokewidth="0"></rect></g><g stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.048"></g><g> <path d="M17.6 6.31999C16.8669 5.58141 15.9943 4.99596 15.033 4.59767C14.0716 4.19938 13.0406 3.99622 12 3.99999C10.6089 4.00135 9.24248 4.36819 8.03771 5.06377C6.83294 5.75935 5.83208 6.75926 5.13534 7.96335C4.4386 9.16745 4.07046 10.5335 4.06776 11.9246C4.06507 13.3158 4.42793 14.6832 5.12 15.89L4 20L8.2 18.9C9.35975 19.5452 10.6629 19.8891 11.99 19.9C14.0997 19.9001 16.124 19.0668 17.6222 17.5816C19.1205 16.0965 19.9715 14.0796 19.99 11.97C19.983 10.9173 19.7682 9.87634 19.3581 8.9068C18.948 7.93725 18.3505 7.05819 17.6 6.31999ZM12 18.53C10.8177 18.5308 9.65701 18.213 8.64 17.61L8.4 17.46L5.91 18.12L6.57 15.69L6.41 15.44C5.55925 14.0667 5.24174 12.429 5.51762 10.8372C5.7935 9.24545 6.64361 7.81015 7.9069 6.80322C9.1702 5.79628 10.7589 5.28765 12.3721 5.37368C13.9853 5.4597 15.511 6.13441 16.66 7.26999C17.916 8.49818 18.635 10.1735 18.66 11.93C18.6442 13.6859 17.9355 15.3645 16.6882 16.6006C15.441 17.8366 13.756 18.5301 12 18.53ZM15.61 13.59C15.41 13.49 14.44 13.01 14.26 12.95C14.08 12.89 13.94 12.85 13.81 13.05C13.6144 13.3181 13.404 13.5751 13.18 13.82C13.07 13.96 12.95 13.97 12.75 13.82C11.6097 13.3694 10.6597 12.5394 10.06 11.47C9.85 11.12 10.26 11.14 10.64 10.39C10.6681 10.3359 10.6827 10.2759 10.6827 10.215C10.6827 10.1541 10.6681 10.0941 10.64 10.04C10.64 9.93999 10.19 8.95999 10.03 8.56999C9.87 8.17999 9.71 8.23999 9.58 8.22999H9.19C9.08895 8.23154 8.9894 8.25465 8.898 8.29776C8.8066 8.34087 8.72546 8.403 8.66 8.47999C8.43562 8.69817 8.26061 8.96191 8.14676 9.25343C8.03291 9.54495 7.98287 9.85749 8 10.17C8.0627 10.9181 8.34443 11.6311 8.81 12.22C9.6622 13.4958 10.8301 14.5293 12.2 15.22C12.9185 15.6394 13.7535 15.8148 14.58 15.72C14.8552 15.6654 15.1159 15.5535 15.345 15.3915C15.5742 15.2296 15.7667 15.0212 15.91 14.78C16.0428 14.4856 16.0846 14.1583 16.03 13.84C15.94 13.74 15.81 13.69 15.61 13.59Z" fill="#ffffff"></path> </g></svg>
                        </span>
                        <span data-share-title="Google News" class="google-news">
                            <a href="https://news.google.com/publications/CAAiEPppM25XMUejcnxa9W-O4_oqFAgKIhD6aTNuVzFHo3J8WvVvjuP6" title="Ulusal Kanal Google News" target="_blank">
                            <svg width="21" height="22" xmlns="http://www.w3.org/2000/svg" x="0" y="5" viewBox="0 0 6550.8 5359.7" xml:space="preserve">
                            <path fill="#0C9D58" d="M5210.8 3635.7c0 91.2-75.2 165.9-167.1 165.9H1507c-91.9 0-167.1-74.7-167.1-165.9V165.9C1339.9 74.7 1415.1 0 1507 0h3536.8c91.9 0 167.1 74.7 167.1 165.9v3469.8z"></path>
                            <polygon opacity=".2" fill="#004D40" points="5210.8,892 3885.3,721.4 5210.8,1077"></polygon>
                            <path opacity=".2" fill="#004D40" d="M3339.3 180.9L1332 1077.2l2218.5-807.5v-2.2c-39-83.6-134-122.6-211.2-86.6z"></path>
                            <path opacity=".2" fill="#FFFFFF" d="M5043.8 0H1507c-91.9 0-167.1 74.7-167.1 165.9v37.2c0-91.2 75.2-165.9 167.1-165.9h3536.8c91.9 0 167.1 74.7 167.1 165.9v-37.2C5210.8 74.7 5135.7 0 5043.8 0z"></path>
                            <path fill="#EA4335" d="M2198.2 3529.1c-23.9 89.1 23.8 180 106 202l3275.8 881c82.2 22 169-32.9 192.8-122l771.7-2880c23.9-89.1-23.8-180-106-202l-3275.8-881c-82.2-22-169 32.9-192.8 122l-771.7 2880z"></path>
                            <polygon opacity=".2" fill="#3E2723" points="5806.4,2638.1 5978.7,3684.8 5806.4,4328.1"></polygon>
                            <polygon opacity=".2" fill="#3E2723" points="3900.8,764.1 4055.2,805.6 4151,1451.6"></polygon>
                            <path opacity=".2" fill="#FFFFFF" d="M6438.6 1408.1l-3275.8-881c-82.2-22-169 32.9-192.8 122l-771.7 2880c-1.3 4.8-1.6 9.7-2.5 14.5l765.9-2858.2c23.9-89.1 110.7-144 192.8-122l3275.8 881c77.7 20.8 123.8 103.3 108.5 187.6l5.9-21.9c23.8-89.1-23.9-180-106.1-202z"></path>
                            <path fill="#FFC107" d="M4778.1 3174.4c31.5 86.7-8.1 181.4-88 210.5L1233.4 4643c-80 29.1-171.2-18-202.7-104.7L10.9 1736.5c-31.5-86.7 8.1-181.4 88-210.5L3555.6 267.9c80-29.1 171.2 18 202.7 104.7l1019.8 2801.8z"></path>
                            <path opacity=".2" fill="#FFFFFF" d="M24 1771.8c-31.5-86.7 8.1-181.4 88-210.5L3568.7 303.1c79.1-28.8 169 17.1 201.5 102l-11.9-32.6c-31.6-86.7-122.8-133.8-202.7-104.7L98.9 1526c-80 29.1-119.6 123.8-88 210.5l1019.8 2801.8c.3.9.9 1.7 1.3 2.7L24 1771.8z"></path>
                            <path fill="#4285F4" d="M5806.4 5192.2c0 92.1-75.4 167.5-167.5 167.5h-4727c-92.1 0-167.5-75.4-167.5-167.5V1619.1c0-92.1 75.4-167.5 167.5-167.5h4727c92.1 0 167.5 75.4 167.5 167.5v3573.1z"></path>
                            <path fill="#FFFFFF" d="M4903.8 2866H3489.4v-372.2h1414.4c41.1 0 74.4 33.3 74.4 74.4v223.3c0 41.1-33.3 74.5-74.4 74.5zM4903.8 4280.3H3489.4v-372.2h1414.4c41.1 0 74.4 33.3 74.4 74.4v223.3c0 41.2-33.3 74.5-74.4 74.5zM5127.1 3573.1H3489.4v-372.2h1637.7c41.1 0 74.4 33.3 74.4 74.4v223.3c0 41.2-33.3 74.5-74.4 74.5z"></path>
                            <path opacity=".2" fill="#1A237E" d="M5638.9 5322.5h-4727c-92.1 0-167.5-75.4-167.5-167.5v37.2c0 92.1 75.4 167.5 167.5 167.5h4727c92.1 0 167.5-75.4 167.5-167.5V5155c0 92.1-75.4 167.5-167.5 167.5z"></path>
                            <path opacity=".2" fill="#FFFFFF" d="M911.9 1488.8h4727c92.1 0 167.5 75.4 167.5 167.5v-37.2c0-92.1-75.4-167.5-167.5-167.5h-4727c-92.1 0-167.5 75.4-167.5 167.5v37.2c0-92.1 75.4-167.5 167.5-167.5z"></path>
                            <path fill="#FFFFFF" d="M2223.9 3238.2v335.7h481.7c-39.8 204.5-219.6 352.8-481.7 352.8-292.4 0-529.5-247.3-529.5-539.7s237.1-539.7 529.5-539.7c131.7 0 249.6 45.3 342.7 134v.2l254.9-254.9c-154.8-144.3-356.7-232.8-597.7-232.8-493.3 0-893.3 399.9-893.3 893.3s399.9 893.3 893.3 893.3c515.9 0 855.3-362.7 855.3-873 0-58.5-5.4-114.9-14.1-169.2h-841.1z"></path>
                            <g opacity=".2" fill="#1A237E">
                                <path d="M2233.2 3573.9v37.2h472.7c3.5-12.2 6.5-24.6 9-37.2h-481.7z"></path>
                                <path d="M2233.2 4280.3c-487.1 0-882.9-389.9-892.8-874.7-.1 6.2-.5 12.4-.5 18.6 0 493.4 399.9 893.3 893.3 893.3 515.9 0 855.3-362.7 855.3-873 0-4.1-.5-7.9-.5-12-11.1 497-347.4 847.8-854.8 847.8zM2575.9 2981.3c-93.1-88.6-211.1-134-342.7-134-292.4 0-529.5 247.3-529.5 539.7 0 6.3.7 12.4.9 18.6 9.9-284.2 242.4-521.1 528.6-521.1 131.7 0 249.6 45.3 342.7 134v.2l273.5-273.5c-6.4-6-13.5-11.3-20.1-17.1L2576 2981.5l-.1-.2z"></path>
                            </g>
                            <path opacity=".2" fill="#1A237E" d="M4978.2 2828.7v-37.2c0 41.1-33.3 74.4-74.4 74.4H3489.4v37.2h1414.4c41.1.1 74.4-33.2 74.4-74.4zM4903.8 4280.3H3489.4v37.2h1414.4c41.1 0 74.4-33.3 74.4-74.4v-37.2c0 41.1-33.3 74.4-74.4 74.4zM5127.1 3573.1H3489.4v37.2h1637.7c41.1 0 74.4-33.3 74.4-74.4v-37.2c0 41.1-33.3 74.4-74.4 74.4z"></path>
                            <radialGradient id="a" cx="1476.404" cy="434.236" r="6370.563" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#fff" stop-opacity=".1"></stop>
                                <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                            </radialGradient>
                            <path fill="url(#a)" d="M6438.6 1408.1l-1227.7-330.2v-912c0-91.2-75.2-165.9-167.1-165.9H1507c-91.9 0-167.1 74.7-167.1 165.9v908.4L98.9 1526c-80 29.1-119.6 123.8-88 210.5l733.5 2015.4v1440.3c0 92.1 75.4 167.5 167.5 167.5h4727c92.1 0 167.5-75.4 167.5-167.5v-826.9l738.3-2755.2c23.8-89.1-23.9-180-106.1-202z"></path>
                            </svg>
                            </a>
                        </span>
                    </div>
                </div>

                <div>
                    <figure class="mb-4">
                        <img src="{{ $post->image_url }}" alt="{{ $post->short_title }}" class="w-full object-cover aspect-video mb-2">
                        <figcaption class="border-l-[1px] border-black border-solid pl-2 text-hoursGray">{{ $post->summary }}</figcaption>
                      </figure>
                </div>

                <div class="my-6">
                    <div class="text-xl mb-1 leading-tight font-bold text-detailBlack">By {{ $post->user->first_name . " " .$post->user->last_name }}</div>
                    <div class="text-hoursGray mb-0 text-sm">BBC News</div>
                    <div class="bg-lineGray w-10 h-[0.125rem] mt-4 text-detailBlack"></div>
                </div>



                <div class="max-w-[36.25rem] my-4 p-0 mx-0 align-baseline">
                    <div class="break-words">
                        <p class="text-base font-bold   text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                    </div>
                </div>

                <div>
                    <figure class="mb-8">
                        <img src="{{ $post->image_url }}" alt="{{ $post->short_title }}" class="w-full object-cover aspect-video mb-2">
                        <figcaption class="border-l-[1px] border-black border-solid pl-2 text-hoursGray">{{ $post->summary }}</figcaption>
                      </figure>
                </div>

                <div class="max-w-[36.25rem] my-4 p-0 mx-0 align-baseline">
                    <div>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                    </div>
                </div>

                <div>
                    <figure class="mb-8">
                        <img src="{{ $post->image_url }}" alt="{{ $post->short_title }}" class="w-full object-cover aspect-video mb-2">
                        <figcaption class="border-l-[1px] border-black border-solid pl-2 text-hoursGray">{{ $post->summary }}</figcaption>
                      </figure>
                </div>

                <div class="max-w-[36.25rem] my-4 p-0 mx-0 align-baseline">
                    <div>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                        <p class="text-base my-4 text-detailBlack">{{ $post->content }}</p>
                    </div>
                </div>

                <div>
                    <h1 class="text-2xl leading-5 font-bold text-detailBlack mb-8">Related Topics</h1>
                    <span>
                        @foreach ($post->tags as $item)
                            <a href="" class="bg-topGray py-4 px-2 text-sm text-detailBlack">
                                <span class="before:content-['#'] before:font-bold before:text-lg before:text-bbcRed"></span>
                                <span class="hover:underline hover:text-bbcRed text-lg font-bold">{{ $item->name }}</span>
                            </a>
                        @endforeach
                    </span>
                </div>
            </section>
            <div class="col-span-1">
                <aside>
                    <h2 class="text-2xl leading-5 font-bold text-detailBlack mb-4">Top Stories</h2>
                    <div>
                        @foreach ($topStories as $item)
                            <div class="bg-topGray p-3 mb-4">
                                <a href="/post-detail/{{ $item->id }}" class="">
                                    <h3 class="text-detailBlack hover:text-bbcRed hover:underline mb-4 text-xl">{{ $item->title }}</h3>
                                    <p class="text-sm font-normal text-hoursGray leading-tight">{{ $hours }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="mb-8 h-[440px] w-[302px]">
                        <a class="twitter-timeline" data-width="300" data-height="440" data-dnt="true" href="https://twitter.com/BBCWorld?ref_src=twsrc%5Etfw">Tweets by BBCWorld</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>

                    <h2 class="text-2xl leading-5 font-bold text-detailBlack mb-4">Featured</h2>

                    <div>
                        @foreach ($topStories as $item)
                            <div class="bg-topGray p-3 mb-4">
                                <a href="/post-detail/{{ $item->id }}" class="">
                                    <div class="flex mb-4 items-center">
                                        <span class="text-bbcRed text-4xl w-11 h-10 border-solid border-r-2 border-red-700 text-left">{{ $loop->iteration }}</span>
                                        <h3 class="text-detailBlack hover:text-bbcRed hover:underline borderl text-2xl ml-4">{{ $item->short_title }}</h3>
                                    </div>
                                    <p class="text-sm font-normal text-hoursGray leading-tight">{{ $hours }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="aspect-square bg-gradient-to-tr from-red-600 via-indigo-800 to-red-600 flex flex-col items-center justify-center space-y-4 mb-8">
                        <span class="text-white font-black text-xl">Subscription</span>
                        <button class="bg-blue-500 animate-bounce rounded p-2 text-white">RedirecT</button>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection
