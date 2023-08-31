<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body class="text-base leading-none font-roboto">
<div>

    @include('includes.header')

    <main class="">
        @yield('content')
    </main>

    @include('includes.footer')

</div>
</body>
</html>
