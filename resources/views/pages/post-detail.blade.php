@extends('layouts.default')

@section('content')
    <div class="bg-newsRed w-full py-3">
        <div class="container mx-auto max-w-7xl">
            <span class="uppercase mx-4 xl:mx-0 text-white text-4xl font-bold py-2">{{$category}}</span>
        </div>
    </div>
    <div class="container mx-auto max-w-7xl pt-20">
        <div class="grid grid-cols-4">
            <section class="col-span-3">
                <h1 class="text-4xl">{{ $post->title }}</h1>
            </section>
            <aside class="col-span-1">
                <h2>Top Stories</h2>
            </aside>
        </div>
    </div>
@endsection
