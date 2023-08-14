<x-layout :categories="$categories" :footerCategories="$footerCategories">
    <main class="my-36 ">
        <section class="flex">
            <div class="swiper mySwiper w-1/2 shadow-md">
                <div class="swiper-wrapper">
                    @foreach ($sortedPosts as $sortedPost)
                        <div class="swiper-slide" >
                            <img class="w-full h-full block object-cover" src="{{$sortedPost->post->image_url}}" alt="Manşet" title="{{$sortedPost->post->short_title}}">
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next text-white"></div>
                <div class="swiper-button-prev text-white"></div>
                <div class="swiper-pagination"></div>
                <div class="autoplay-progress text-sky-50">
                    <svg viewBox="0 0 48 48">
                      <circle cx="24" cy="24" r="20"></circle>
                    </svg>
                    <span></span>
                  </div>
            </div>
            <div class=" w-1/2 bg-white border-2">
                <div class="grid grid-cols-2 gap-5">
                    @foreach ($headlineRightNews as $headlineRightNew)
                        <div class="bg-white p-4 shadow-md border-black border-dashed cursor-pointer">
                            <img src="{{$headlineRightNew->post->image_url}} alt="News Image" class="w-full h-40 object-cover">
                            <h3 class="mt-2 text-xl font-semibold">{{$headlineRightNew->post->short_title}}</h3>
                          </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>
</x-layout>
