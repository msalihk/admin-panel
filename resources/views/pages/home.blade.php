@extends('layouts.default')

@section('content')
    <div class="container mx-auto my-6 max-w-7xl space-y-10">
        <section id="manset" class="grid grid-cols-3 gap-2">
            <div class="col-span-2">
                <!-- Swiper -->
                <div class="swiper mySwiper" style="height: 600px;">
                    <div class="swiper-wrapper">
                        @foreach ($sortedPosts as $sortedPost)
                        <div class="swiper-slide text-center bg-white flex justify-center items-center">
                            <img src="{{$sortedPost->post->image_url}}" class="block w-full h-full object-cover" alt="Manşet" title="{{$sortedPost->post->short_title}}">
                            <div class="absolute bottom-4 left-4 w-full text-left bg-opacity-75 pb-5  pl-5">
                                <a href="" class="border-solid border-l-2 border-red-500 text-white pl-2">{{$sortedPost->post->tags->first()->name}}</a>
                                <h3 class="text-4xl font-semibold text-white py-2">{{$sortedPost->post->short_title}}</h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="grid grid-row-3 gap-2" style="height: 600px">
                    @foreach ($headlineRightNews as $headlineRightNew)
                        <div class="shadow-md border-black cursor-pointer relative" >
                            <img src="{{$headlineRightNew->post->image_url}} alt="News Image" class="object-cover aspect-video box-border h-48 w-full">
                            <div class="absolute bottom-4 left-4 w-full text-left bg-opacity-75">
                                <h3 class="text-sm font-semibold text-white py-2">{{$headlineRightNew->post->short_title}}</h3>
                                <a href="" class="border-solid border-l-2 border-red-500 text-white pl-2">{{$headlineRightNew->post->tags->first()->name}}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="manset olmayan haberler">
            <section class="my-4">
                <div class="space-y-4">
                  <h2 class="border-solid border-l-2 border-red-500 text-bold text-gray-700 text-3xl pl-4"><a href="">News</a></h2>
                  <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                      @foreach ($newsPosts as $item)
                          <div class="col-span-1">
                              <img src="{{ $item->image_url }}" alt="{{ $item->short_title }}" width="" height="" class="aspect-video object-cover mb-3">
                              <span style="display: block; font-weigth: 500; font-size:18px; line-height: 26px; color: black;">{{ $item->short_title }}</span>
                          </div>
                      @endforeach
                  </div>
                </div>
              </section>
              <section class="my-4">
              <div class="space-y-4">
                  <h2 class="border-solid border-l-2 border-yellow-500 text-bold text-gray-700 text-3xl pl-4"><a href="">Sports</a></h2>
                  <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                      @foreach ($sportsPosts as $item)
                        <div class="col-span-1">
                            <img src="{{ $item->image_url }}" alt="{{ $item->short_title }}" width="" height="" class="aspect-video object-cover mb-3">
                            <span style="display: block; font-weigth: 500; font-size:18px; line-height: 26px; color: black;">{{ $item->short_title }}</span>
                        </div>
                      @endforeach
                  </div>
              </div>
              </section>
        </section>
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
