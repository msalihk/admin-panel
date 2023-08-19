<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body class="text-base leading-none bg-gray-100">
<div>

    @include('includes.header')

    <main>
        @yield('content')
    </main>

    @include('includes.footer')

</div>
</body>
</html>
