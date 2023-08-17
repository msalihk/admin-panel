@extends('layouts.default')

@section('content')
    <div class="container mx-auto my-6 max-w-7xl space-y-10">
        <section id="manset" class="grid grid-cols-3 gap-2">
            <div class="col-span-2">
                <!-- Swiper -->
                <div class="swiper mySwiper" style="height: 600px;">
                    <div class="swiper-wrapper">
                        @foreach ($sortedPosts as $sortedPost)
                        <div class="swiper-slide text-center text-18 bg-white flex justify-center items-center">
                            <img src="{{$sortedPost->post->image_url}}" class="block w-full h-full object-cover" alt="Manşet" title="{{$sortedPost->post->short_title}}">
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
                            <img src="{{$headlineRightNew->post->image_url}} alt="News Image" class="object-fill  box-border h-48 w-full">
                            <h3 class="text-sm font-semibold text-black absolute z-50 bg-gray-200">{{$headlineRightNew->post->short_title}}</h3>
                          </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="manset olmayan haberler" class=" border-solid border-black border-2">
            <div>
              <div>
                <section>
                  <h2 class="border-solid border-l-2 border-red-500 text-2xl"><a href="">News</a></h2>
                  <div>

                  </div>
                </section>
                <section>
                  <h2 class="border-solid border-l-2 border-yellow-500 text-2xl"><a href="">Sports</a></h2>
                  <div>
                    <img src="" alt="" srcset="">
                    <div>
                        <h3></h3>
                        <p></p>
                    </div>
                  </div>
                </section>
              </div>
            </div>
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
