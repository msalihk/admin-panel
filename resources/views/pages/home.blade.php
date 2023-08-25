@extends('layouts.default')

@section('content')
    <div class="container mx-auto mt-4 max-w-7xl xl:space-y-8">
        <section id="manset" class="mb-20 xl:grid xl:grid-cols-3 gap-4 space-y-4 xl:space-y-0">
            <div class="xl:col-span-2">
                <!-- Swiper -->
                <div class="swiper mySwiper h-56 sm:h-[18.75rem] lg:h-[28.125rem] xl:h-[37.5rem]">
                    <div class="swiper-wrapper">
                        @foreach ($sortedPosts as $sortedPost)
                        <div class="swiper-slide">
                            <img src="{{$sortedPost->post->image_url}}" class="block w-full h-full object-cover" alt="Manşet" title="{{$sortedPost->post->short_title}}">
                            <div class="absolute bottom-0 left-0 w-full h-1/2 text-left bg-opacity-90 bg-gradient-to-t from-gray-900 pl-4 xl:pl-8 md:pt-12 xl:pt-48">
                                <h3 class="text-4xl font-semibold text-white pb-2">{{$sortedPost->post->short_title}}</h3>
                                <a href="" class="border-solid bottom-2 border-l-2 border-red-500 text-white pl-2">{{$sortedPost->post->tags->first()->name}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination invisible sm:visible"></div>
                </div>
            </div>
            <div class="xl:col-span-1 gap-2">
                <div class="grid grid-cols-1 sm:grid-cols-3 xl:grid-rows-3 xl:grid-cols-none gap-5 lg:h-[14.0625rem] xl:h-[37.5rem] justify-between xl:justify-normal">
                    @foreach ($headlineRightNews as $headlineRightNew)
                        <div class="shadow-md border-black cursor-pointer relative md:col-span-1 xl:row-span-1">
                            <img src="{{$headlineRightNew->post->image_url}} alt="News Image" class="object-cover box-border h-[9.375rem] sm:h-full w-full">
                            <div class="absolute bottom-0 left-0 h-1/2 w-full text-left bg-opacity-90 bg-gradient-to-t from-gray-900 pl-4 xl:pl-4 md:pt-6">
                                <h3 class="text-base font-semibold text-white py-2">{{$headlineRightNew->post->short_title}}</h3>
                                <a href="" class="border-solid border-l-2 border-red-500 text-sm text-white pl-2">{{$headlineRightNew->post->tags->first()->name}}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="manset olmayan haberler" class="">
            <section class="my-4">
                <div class="space-y-4">
                  <h2 class="border-solid border-l-2 border-red-500 text-bold text-gray-700 text-2xl font-bold py-0 px-2"><a href="">News</a></h2>
                  <div class="grid grid-cols-1 grid-rows-3 sm:grid-rows-none sm:grid-cols-3 gap-5">
                      @foreach ($newsPosts as $item)
                          <div class="col-span-1">
                              <img src="{{ $item->image_url }}" alt="{{ $item->short_title }}" width="" height="" class="aspect-video object-cover mb-3">
                              <h3 class="font-bold block text-black text-lg">
                                <a href="/">{{ $item->short_title }}</a>
                              </h3>
                              <a href="" class="border-solid border-l-2 border-red-500 text-black text-sm py-0 px-2">{{ $item->tags->first()->name }}</a>
                          </div>
                      @endforeach
                  </div>
                </div>
              </section>
              <section class="my-4">
              <div class="space-y-4">
                  <h2 class="border-solid border-l-2 border-yellow-500 text-bold text-gray-700 text-2xl font-bold px-2"><a href="">Sports</a></h2>
                  <div class="grid grid-cols-1 grid-rows-3 sm:grid-rows-none sm:grid-cols-3 gap-5">
                      @foreach ($sportsPosts as $item)
                        <div class="col-span-1">
                            <img src="{{ $item->image_url }}" alt="{{ $item->short_title }}" width="" height="" class="aspect-video object-cover mb-3">
                            <h3 class="font-bold block text-black text-lg">
                                <a href="/">{{ $item->short_title }}</a>
                            </h3>
                            <a href="" class="border-solid border-l-2 border-red-500 text-black text-sm py-0 px-2">{{ $item->tags->first()->name }}</a>
                        </div>
                      @endforeach
                  </div>
              </div>
              </section>
        </section>
    </div>

    <div class="w-full md:bg-gray-100">
        <div class="container mx-auto max-md:my-6 max-w-7xl xl:space-y-10">
            <section id="top-stories" class="py-4">
                <div>
                    <div>
                        <h2 class="border-solid border-l-2 border-blue-500 text-bold text-gray-700 text-2xl font-bold my-4 px-2"><a href="">Editor's Picks</a></h2>
                        <div class="md:grid md:grid-cols-3 gap-5">
                            <div class="md:col-span-2">
                                <a href="/">
                                    <div class="shadow-md border-black cursor-pointer relative">
                                        <img src="{{$editorsPicks->first()->image_url}} alt="News Image" class="object-cover box-border aspect-video h-full w-full">
                                        <div class="absolute bottom-0 left-0 h-1/2 w-full text-left bg-opacity-90 bg-gradient-to-t from-gray-900 pl-4">
                                            <h3 class="text-sm font-semibold text-white py-2 mb-2">{{$editorsPicks->first()->short_title}}</h3>
                                            <a href="" class="border-solid border-l-2 border-red-500 text-white pl-2">{{$editorsPicks->first()->tags->first()->name}}</a>
                                        </div>
                                    </div>
                                </a>
                                <div class="my-4 flex flex-col sm:grid sm:grid-cols-2 sm:grid-rows-3 lg:grid-cols-3 lg:grid-rows-2 gap-2">
                                        @foreach ($editorsPicksBottom as $item)
                                            <div class="max-sm:pb-4">
                                                <div class="relative">
                                                    <img src="{{ $item->image_url }}" alt="{{ $item->short_title }}" class="max-sm:hidden object-cover box-border aspect-video w-full h-full">
                                                    <div class="absolute bottom-0 left-0  h-1/2 w-full text-left sm:bg-opacity-90 sm:bg-gradient-to-t sm:from-gray-900 pl-4">
                                                        <h3 class="text-black sm:text-white"><a href="/">{{ $item->short_title }}</a></h3>
                                                        <a href="" class="border-solid text-xs border-l-2 border-red-500 text-black sm:text-white pl-2">{{$item->tags->first()->name}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="sm:hidden">
                                        @endforeach
                                </div>
                            </div>
                            <div class="my-4 md:my-0 md:col-span-1">
                                <aside class="">
                                    <div>
                                        <h1 class="font-bold text-2xl">Top Stories</h1>
                                        @foreach ($editorsPicksBottom as $item)
                                            <div class="flex my-1 items-center">
                                                <span class="font-bold italic text-2xl md:text-7xl text-gray-400 font-mono">{{ $topStoryIndex++ }}</span>
                                                <h2 class="mx-4 text-2xl">{{$item->short_title}}</h2>
                                            </div>
                                            <hr>
                                        @endforeach
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <div class="w-full md:bg-gray-100">
        <div class="container mx-auto max-w-7xl">
            <section>
                <div>
                    <h2 class="border-solid border-l-2 border-blue-500 text-bold text-gray-700 text-2xl font-bold max-md:my-4 px-2"><a href="">World in Pictures</a></h2>
                </div>
                <div>
                    <a href="/" class="sm:hidden">
                        <div>
                            <img src="{{ $worldInPictures->first()->image_url }}" alt="{{ $worldInPictures->first()->short_title }}">
                        </div>
                    </a>

                    <div class="my-4 sm:grid sm:grid-cols-6 sm:grid-rows-2 sm:gap-5 pb-5 max-sm:hidden">
                        @foreach ($worldInPictures as $item)
                            @if ($loop->iteration == 1 || $loop->iteration == 2)
                                <div class="col-span-3 relative shadow-md">
                                    <img src="{{ $item->image_url }}" alt="{{ $item->short_title }}" class="object-cover aspect-video box-border">
                                    <div class="top-0 left-0 absolute">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 bg-black text-white p-2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                                        </svg>
                                    </div>
                                    <div class="absolute bottom-0 left-0  h-1/2 w-full text-left sm:bg-opacity-90 sm:bg-gradient-to-t sm:from-gray-900 pl-4">
                                        <h3 class="text-black sm:text-white"><a href="/">{{ $item->short_title }}</a></h3>
                                        <a href="" class="border-solid text-xs border-l-2 border-red-500 text-black sm:text-white pl-2">{{$item->tags->first()->name}}</a>
                                    </div>
                                </div>
                            @else
                                <div class="col-span-2 bg-white relative shadow-md">
                                    <img src="{{ $item->image_url }}" alt="{{ $item->short_title }}" class="object-cover aspect-video box-border">
                                    <div class="top-0 left-0 absolute">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 bg-black text-white p-1">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                                        </svg>
                                    </div>
                                    <div class="bottom-0 left-0 w-full text-left mt-4 ml-4">
                                        <h3 class="text-black sm:text-black"><a href="/">{{ $item->short_title }}</a></h3>
                                        <a href="" class="border-solid text-xs border-l-2 border-red-500 text-black sm:text-black pl-2">{{$item->tags->first()->name}}</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
      },
    });
  </script>
@endsection
