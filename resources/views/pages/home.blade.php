@extends('layouts.default')

@section('content')
    <div class="mx-4 xl:mx-0">
        <div class="container mx-auto mt-5 md:mt-10 lg:mt-20 max-w-7xl">
            <section id="manset" class="mb-20 xl:grid xl:grid-cols-3 gap-4">
                <div class="xl:col-span-2 max-xl:mb-5">
                    <!-- Swiper -->
                    <div class="swiper mySwiper h-56 sm:h-[18.75rem] lg:h-[28.125rem] xl:h-[37.5rem]">
                        <div class="swiper-wrapper">
                            @foreach ($sortedPosts as $sortedPost)
                            <div class="swiper-slide relative">
                                <img src="{{$sortedPost->post->image_url}}" class="block w-full h-full object-cover" alt="Manşet" title="{{$sortedPost->post->short_title}}">
                                <div class="absolute bottom-0 pt-20 pr-8 pl-8 pb-14 left-0 w-full text-left bg-opacity-90 bg-gradient-to-t from-gray-900">
                                    <h3 class="text-5xl font-semibold mb-3 tracking-wide text-white">{{$sortedPost->post->short_title}}</h3>
                                    <p class="text-subtext line-clamp-3 mb-3 text-base m-0 mt-0.5">{{ $sortedPost->post->summary }}</p>
                                    <a href="" class="absolute z-20 bottom-10 tracking-wide uppercase text-sm text-subtext">
                                        <span class="before:content-['#'] before:font-bold before:text-bbcRed before:mr-2"></span>
                                        <span class="hover:underline hover:text-white">{{$sortedPost->post->tags->first()->name}}</span>
                                    </a>
                                </div>
                                <a href="/post-detail/{{ $sortedPost->post->id }}" class="w-full h-full absolute z-10"></a>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination invisible sm:visible absolute z-30"></div>
                    </div>
                </div>
                <div class="xl:col-span-1 gap-2">
                    <div class="grid grid-cols-1 sm:grid-cols-3 xl:grid-rows-3 xl:grid-cols-none gap-5 lg:h-[14.0625rem] xl:h-[37.5rem] justify-between xl:justify-normal">
                        @foreach ($headlineRightNews as $headlineRightNew)
                            <div class="shadow-md border-black relative md:col-span-1 xl:row-span-1">
                                <a href="/post-detail/{{ $sortedPost->post->id }}">
                                    <img src="{{$headlineRightNew->post->image_url}} alt="News Image" class="object-cover box-border h-[9.375rem] sm:h-full w-full">
                                    <div class="absolute bottom-0 w-full left-0 pt-12 px-3 pb-3 text-left bg-opacity-90 bg-gradient-to-t from-gray-900">
                                        <h3 class="text-xl font-semibold mb-2 text-white">{{ $headlineRightNew->post->title }}</h3>
                                        <a href="" class="absolute z-20 tracking-wide uppercase bottom-1 left-1 text-sm text-subtext">
                                            <span class="before:content-['#'] before:font-bold before:text-bbcRed before:mr-2"></span>
                                            <span class="hover:underline hover:text-white">{{ $headlineRightNew->post->tags->first()->name }}</span>
                                        </a>
                                    </div>
                                </a>
                            </div>
                            <a href="/post-detail/{{ $sortedPost->post->id }}" class="absolute z-10"></a>
                        @endforeach
                    </div>
                </div>
            </section>
            <section id="manset olmayan haberler" class="">
                <section class="mb-20">
                    <div class="">
                      <h2 class="before:border-solid before:border-l-2 before:border-red-500 before:mr-2 text-bold text-sectionGray hover:text-black text-2xl leading-none font-bold mb-5">
                        <a href="">News</a>
                      </h2>
                      <div class="grid grid-cols-1 grid-rows-3 sm:grid-rows-none sm:grid-cols-3 gap-5">
                          @foreach ($newsPosts as $item)
                              <div class="col-span-1 relative">
                                <img src="{{ $item->image_url }}" alt="{{ $item->short_title }}" width="" height="" class="aspect-video object-cover mb-2">
                                <div class="pt-2 pb-8 pl-0 pr-0">
                                    <h3 class="font-bold block text-black text-xl">
                                        <a href="/post-detail/{{ $sortedPost->post->id }}">{{ $item->title }}</a>
                                      </h3>
                                      <p class="text-sectionGray line-clamp-3 m-0 mt-2">{{ $item->summary }}</p>
                                      <a href="" class="before:content-['#'] before:text-bbcRed before:mr-2 text-tagGray uppercase absolute bottom-0">{{ $item->tags->first()->name }}</a>
                                </div>
                              </div>
                          @endforeach
                      </div>
                    </div>
                  </section>
                  <section class="mb-20">
                  <div class="">
                      <h2 class="before:border-solid before:border-l-2 before:border-yellow-500 before:mr-2 text-bold text-sectionGray hover:text-black text-2xl leading-none font-bold mb-5">
                        <a href="">Sports</a>
                    </h2>
                      <div class="grid grid-cols-1 grid-rows-3 sm:grid-rows-none sm:grid-cols-3 gap-5">
                          @foreach ($sportsPosts as $item)
                          <div class="col-span-1 relative">
                            <img src="{{ $item->image_url }}" alt="{{ $item->short_title }}" width="" height="" class="aspect-video object-cover mb-2">
                            <div class="pt-2 pb-8 pl-0 pr-0">
                                <h3 class="font-bold block text-black text-xl">
                                    <a href="/">{{ $item->title }}</a>
                                  </h3>
                                  <p class="text-sectionGray line-clamp-3 m-0 mt-2">{{ $item->summary }}</p>
                                  <a href="" class="before:content-['#'] before:text-bbcRed before:mr-2 text-tagGray uppercase absolute bottom-0">{{ $item->tags->first()->name }}</a>
                            </div>
                          </div>
                          @endforeach
                      </div>
                  </div>
                  </section>
            </section>
        </div>

        <div class="container max-w-7xl mx-auto">
            <section class="mb-20">
                <a class="weatherwidget-io" href="https://forecast7.com/en/41d0128d98/istanbul/" data-label_1="İSTANBUL" data-label_2="WEATHER" data-font="Roboto" data-theme="weather_one" >İSTANBUL WEATHER</a>
            </section>
        </div>

        <div class="w-full md:bg-gray-100 mb-20">
            <div class="container mx-auto max-md:my-6 max-w-7xl xl:space-y-10">
                <section id="top-stories" class="py-20">
                    <div>
                        <div>
                            <h2 class="before:border-solid before:border-l-2 before:border-blue-500 before:mr-2 text-bold text-sectionGray text-2xl font-bold my-4"><span>Editor's Picks</span></h2>
                            <div class="md:grid md:grid-cols-3 gap-5">
                                <div class="md:col-span-2">
                                    <a href="/">
                                        <div class="shadow-md border-black cursor-pointer relative">
                                            <img src="{{$editorsPicks->first()->image_url}} alt="News Image" class="object-cover box-border aspect-video h-full w-full">
                                            <div class="absolute bottom-0 left-0 h-1/2 w-full text-left bg-opacity-90 bg-gradient-to-t from-gray-900 pl-4">
                                                <h3 class="text-5xl font-semibold mb-3 tracking-wide text-white">{{$editorsPicks->first()->short_title}}</h3>
                                                <p class="text-subtext line-clamp-3 mb-3 text-base m-0 mt-0.5">{{ $sortedPost->post->summary }}</p>
                                                <a href="" class="tracking-wide before:hover:no-underline hover:underline before:content-['#'] before:font-bold before:text-bbcRed before:mr-2 uppercase text-sm text-subtext">{{$editorsPicks->first()->tags->first()->name}}</a>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="my-4 flex flex-col sm:grid sm:grid-cols-2 sm:grid-rows-3 lg:grid-cols-3 lg:grid-rows-2 gap-4">
                                            @foreach ($editorsPicksBottom as $item)
                                                <div class="max-sm:pb-4 bg-white h-auto shadow-md relative">
                                                    <div class="">
                                                        <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="max-sm:hidden object-cover box-border aspect-video w-full h-full">
                                                        <div class="pt-3 px-3 pb-12">
                                                            <h3 class="text-black text-xl m-0 p-0 leading-5">
                                                                <a href="/" class="gray212121 font-bold">{{ $item->short_title }}</a>
                                                            </h3>
                                                            <p class="text-sectionGray line-clamp-3 text-base m-0 mt-0.5 leading-5">{{ $item->summary }}</p>
                                                            <a href="" class="absolute block z-20 bottom-3 left-3 right-3 mt-0 overflow-hidden whitespace-nowrap text-ellipsis tracking-wide before:hover:no-underline hover:underline before:content-['#'] before:font-bold before:text-bbcRed before:mr-2 uppercase text-sm leading-4 text-tagGray">{{$item->tags->first()->name}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="sm:hidden">
                                            @endforeach
                                    </div>
                                </div>
                                <div class="md:col-span-1">
                                    <aside class="">
                                        <div>
                                            <div class="mb-4">
                                                <div class="flex items-center relative">
                                                    <h1 class="absolute bg-gray-100 pr-4 font-bold mt-0 pt-0 text-2xl">Top Stories</h1>
                                                    <div class="border-[1px] w-full h-0 border-bbcRed before:mr-2 border-solid"></div>
                                                </div>
                                            </div>
                                            @foreach ($topStories->take(13) as $item)
                                                <div class="flex mb-[5px] border-solid border-b-2 border-gray-200 pb-[5px] items-center">
                                                    <span class="font-bold italic text-2xl md:text-7xl text-gray-400 font-mono">{{ $topStoryIndex++ }}</span>
                                                    <h2 class="mx-4 text-2xl">{{$item->short_title}}</h2>
                                                </div>
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

        <div class="w-full">
            <div class="container mx-auto max-w-7xl">
                <section class="mb-20">
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
                                    <div class="col-span-3 relative shadow-md items-center">
                                        <img src="{{ $item->image_url }}" alt="{{ $item->short_title }}" class="object-cover aspect-video box-border">
                                        <div class="top-0 left-0 absolute z-30">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 bg-black text-white p-2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                                            </svg>
                                        </div>
                                        <div class="absolute bottom-0 top-0 left-0  h-full w-full text-left sm:bg-opacity-90 sm:bg-gradient-to-r sm:from-gray-900 pl-4 flex flex-col justify-center">
                                            <h3 class="text-black sm:text-white text-3xl text-left"><a href="/">{{ $item->short_title }}</a></h3>
                                            <a href="" class="text-sm uppercase before:content-['#'] before:text-bbcRed before:mr-2 text-black sm:text-white text-left">{{$item->tags->first()->name}}</a>
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
                                        <div class="bottom-0 left-0 w-full text-left mt-1 py-4 ml-4">
                                            <h3 class="text-black sm:text-black mb-2 text-2xl"><a href="/">{{ $item->short_title }}</a></h3>
                                            <a href="" class="text-md before:content-['#'] before:text-bbcRed before:mr-2 text-black sm:text-black uppercase">{{$item->tags->first()->name}}</a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="container mx-auto max-w-7xl mb-20">
            <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/210038222&color=%23e91802&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/bbc-world-service" title="BBC World Service Radio" target="_blank" style="color: #cccccc; text-decoration: none;">BBC World Service Radio</a> · <a href="https://soundcloud.com/bbc-world-service/a-world-without-oil" title="A world without oil" target="_blank" style="color: #cccccc; text-decoration: none;">A world without oil</a></div>
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
    // Weather Widget
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
  </script>
@endsection
