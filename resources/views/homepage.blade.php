<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <style>
    .swiper {
        width: 600px;
        height: 480px;
        border: 1px solid black;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-pagination-bullet {
      width: 20px;
      height: 20px;
      text-align: center;
      line-height: 20px;
      font-size: 12px;
      color: #000;
      opacity: 1;
      background: rgba(0, 0, 0, 0.2);
    }

    .swiper-pagination-bullet-active {
      color: #fff;
      background: #007aff;
    }
  </style>
  @vite('resources/css/app.css')
</head>
<body class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
    <x-header :categories="$categories" />

    <main class="my-36 border-solid border-black border-2">
        <section class="flex">
            <div class="swiper mySwiper w-1/2 p-4">
                <div class="swiper-wrapper">
                    @foreach ($sortedPosts as $sortedPost)
                        <div class="swiper-slide" >
                            <img class="w-full h-full block object-cover" src="{{$sortedPost->post->image_url}}" alt="Manşet" title="{{$sortedPost->post->short_title}}">
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class=" w-1/2 p-4 bg-black">
                <div class="flex">
                    @foreach ($headlineRightNews as $headlineRightNew)
                        <div class="m-4">
                            <img src="{{$headlineRightNew->post->image_url}}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>


    <x-footer :footerCategories="$footerCategories"/>

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
</body>
</html>
