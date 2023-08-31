<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>

  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <title>Haber Sitesi</title>

  <style>
    .swiper-pagination-bullet {
      width: 20px;
      height: 20px;
      text-align: center;
      line-height: 20px;
      font-size: 12px;
      color: #000;
      opacity: 1;
      /* background: rgba(0, 0, 0, 0.2); */
      background: white;
    }

    .swiper-pagination-bullet-active {
      color: #fff;
      background: #007aff;
    }

    .swiper-pagination-bullet {
        text-indent: -99999px;
        height: 2px;
    }

    .swiper-pagination-bullet-active {
        background-color: red;
    }

    h1, h2, h3, p {
        padding: 0px;
    }

    [x-cloak] {
        display: none !important;
    }
  </style>

  @vite('resources/css/app.css')
