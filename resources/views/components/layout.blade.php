<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <title>Haber Sitesi</title>
  <style>
    .swiper {
        width: 600px;
        height: 480px;
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
      width: 25px;
      height: 25px;
      text-align: center;
      line-height: 20px;
      font-size: 16px;
      color: #fff;
      opacity: 1;
      background: black;
      padding: 2px;
    }

    .swiper-pagination-bullet-active {
      color: #fff;
      background: blue;
    }
    .autoplay-progress {
      position: absolute;
      right: 16px;
      bottom: 16px;
      z-index: 10;
      width: 48px;
      height: 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      color: white;
    }

    .autoplay-progress svg {
      --progress: 0;
      position: absolute;
      left: 0;
      top: 0px;
      z-index: 10;
      width: 100%;
      height: 100%;
      stroke-width: 4px;
      stroke: white;
      fill: none;
      stroke-dashoffset: calc(125.6 * (1 - var(--progress)));
      stroke-dasharray: 125.6;
      transform: rotate(-90deg);
    }
  </style>
  @vite('resources/css/app.css')
</head>
<body class="xl:container mx-auto ">
    {{-- header --}}
    <header class="fixed top-0 left-0 right-0 z-50 border-black border-solid border-2 shadow-md">
        <nav class="bg-white">
           <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
             <div class="flex justify-between">
               <div class="mx-w-10 text-2xl font-bold text-black flex items-center"><a href="/">haber sitesi</a></div>

               <div class="flex flex-row">
                 <!-- nav menu -->
                 <ul class="navbar hidden lg:flex lg:flex-row text-black text-sm items-center font-bold">
                    @foreach ($categories as $category)
                        <li class="active relative border-l border-gray-800 hover:text-white hover:bg-gray-900">
                            <a class="block py-3 px-6 border-b-2 border-transparent" href="index.html">{{ $category->name }}</a>
                        </li>
                    @endforeach
                 </ul>

                 <div class="flex flex-row items-center text-gray-300">
                    <div class="dropdown-menu left-auto  z-50 text-left bg-white text-gray-700 border border-gray-100 mt-1 p-3" style="min-width: 15rem;">

                            <form action="{{ route('search') }}" class="flex flex-wrap items-stretch w-full relative">
                                <input type="text" class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-5 text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" name="query" placeholder="Ara..." aria-label="search">
                                <div class="flex -mr-px">
                                    <button class="flex items-center py-2 px-5 -ml-1 leading-5 text-gray-100 bg-black hover:text-white hover:bg-gray-900 hover:ring-0 focus:outline-none focus:ring-0" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>

                    </div>

                    <div class="relative hover:bg-gray-800 block lg:hidden">
                      <button type="button" class="menu-mobile block py-3 px-6 border-b-2 border-transparent">
                        <span class="sr-only">Mobil menü</span>
                        <svg class="inline-block h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg> Menü
                      </button>
                    </div>
                  </div>
             </div>
           </div>
        </nav>
     </header><!-- end header -->


    {{ $slot }}

    {{-- Footer --}}

    <footer class="bg-white bottom-0 text-black border-black border-solid border-2 fixed left-0 right-0">
        <!--Footer content-->
        <div id="footer-content" class="relative pt-8 xl:pt-16 pb-6 xl:pb-12">
          <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2 overflow-hidden">
            <div class="flex flex-wrap flex-row lg:justify-between -mx-3">
              <div class="flex-shrink max-w-full w-full lg:w-2/5 px-3 lg:pr-16">
                <div class="flex items-center mb-2">
                  <span class="text-3xl leading-normal mb-2 font-bold text-black mt-2">haber sitesi</span>
                  <!-- <img src="src/img-min/logo.png" alt="LOGO"> -->
                </div>
                <p>Herhangi bir haber sitesi.</p>
                <ul class="space-x-3 mt-6 mb-6 Lg:mb-0">
                  <!--facebook-->
                  <li class="inline-block">
                    <a target="_blank" class="hover:text-gray-100" rel="noopener noreferrer" href="https://facebook.com" title="Facebook">
                      <!-- <i class="fab fa-facebook fa-2x"></i> -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 512 512"><path fill="currentColor" d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"></path></svg>
                    </a>
                  </li>
                  <!--twitter-->
                  <li class="inline-block">
                    <a target="_blank" class="hover:text-gray-100" rel="noopener noreferrer" href="https://twitter.com" title="Twitter">
                      <!-- <i class="fab fa-twitter fa-2x"></i> -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 512 512"><path fill="currentColor" d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"></path></svg>
                    </a>
                  </li>
                  <!--youtube-->
                  <li class="inline-block">
                    <a target="_blank" class="hover:text-gray-100" rel="noopener noreferrer" href="https://youtube.com" title="Youtube">
                      <!-- <i class="fab fa-youtube fa-2x"></i> -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 512 512"><path fill="currentColor" d="M508.64,148.79c0-45-33.1-81.2-74-81.2C379.24,65,322.74,64,265,64H247c-57.6,0-114.2,1-169.6,3.6-40.8,0-73.9,36.4-73.9,81.4C1,184.59-.06,220.19,0,255.79q-.15,53.4,3.4,106.9c0,45,33.1,81.5,73.9,81.5,58.2,2.7,117.9,3.9,178.6,3.8q91.2.3,178.6-3.8c40.9,0,74-36.5,74-81.5,2.4-35.7,3.5-71.3,3.4-107Q512.24,202.29,508.64,148.79ZM207,353.89V157.39l145,98.2Z"></path></svg>
                    </a>
                  </li>
                  <!--instagram-->
                  <li class="inline-block">
                    <a target="_blank" class="hover:text-gray-100" rel="noopener noreferrer" href="https://instagram.com" title="Instagram">
                      <!-- <i class="fab fa-instagram fa-2x"></i> -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 512 512"><path fill="currentColor" d="M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z"></path><path fill="currentColor" d="M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z"></path><path fill="currentColor" d="M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z"></path></svg>
                    </a>
                  </li><!--end instagram-->
                </ul>
              </div>
              <div class="flex-shrink max-w-full w-full lg:w-3/5 px-3">
                <div class="flex flex-wrap flex-row">
                  <div class="flex-shrink max-w-full w-1/2 md:w-1/4 mb-6 lg:mb-0">
                    <h4 class="text-base leading-normal mb-3 text-black">KATEGORİLER</h4>
                    <ul>
                        @foreach ($footerCategories as $footerCategory)
                            <li class="py-1 hover:text-white"><a href="#">{{ $footerCategory->name }}</a></li>
                        @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="footer-dark">
          <div class="container py-4 border-t border-gray-200 border-opacity-10 mx-auto">
            <div class="row">
              <div class="col-12 col-md text-center">
                <p class="d-block my-3">Copyright © haber sitesi | Tüm hakları saklıdır.</p>
              </div>
            </div>
          </div>
        </div>
      </footer>



     {{-- Scroll-top --}}
    <a href="#" class="back-top fixed p-4 rounded bg-gray-100 border border-gray-100 text-gray-500 dark:bg-gray-900 dark:border-gray-800 right-4 bottom-4 hidden" aria-label="Scroll To Top">
      <svg width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
        <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z" clip-rule="evenodd"></path>
      </svg>
    </a>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  const progressCircle = document.querySelector(".autoplay-progress svg");
  const progressContent = document.querySelector(".autoplay-progress span");
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + "</span>";
      },
    },
    autoplay: {
        delay: 4500,
        disableOnInteraction: false
        },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty("--progress", 1 - progress);
          progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        }
      }
    });
</script>
</body>
</html>
