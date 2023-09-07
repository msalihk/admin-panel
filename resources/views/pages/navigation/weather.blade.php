@extends('layouts.default')

@section('content')
<div class="">
    <div class="bg-cyan-500 w-full py-3 mb-20">
        <div class="container mx-auto max-w-7xl">
            <span class="uppercase mx-4 xl:mx-0 text-white text-4xl font-bold py-2">Weather</span>
        </div>
    </div>
    <div class="container max-w-7xl mx-auto">
        @if ($posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                @foreach ($posts as $item)
                    <div class="col-span-1 border-2 shadow-md">
                        <div class="p-4">
                            <img src="{{ $item->image_url }}" alt="{{ $item->short_title }}" width="" height="" class="aspect-video object-cover mb-3">
                            <span style="display: block; font-weigth: 500; font-size:18px; line-height: 26px; color: black;">{{ $item->short_title }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
        <div class="flex justify-center items-center h-40 my-40 flex-col">
            <p class="text-gray-600 text-lg">There are no post in "Weather" Category</p>
            <p class="bg-black mt-8 text-white p-2"><a href="/">Anasayfaya dön</a></p>
        </div>
        @endif
    </div>
</div>
@endsection
