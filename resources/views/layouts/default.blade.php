<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body class="text-base leading-none font-roboto">
<div>

    @include('includes.header')

    <main class="mx-4 xl:mx-0">
        @yield('content')
    </main>

    @include('includes.footer')

</div>
</body>
</html>
