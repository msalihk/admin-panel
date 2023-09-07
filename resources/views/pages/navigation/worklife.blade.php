@extends('layouts.default')

@section('content')
<div class="">
    <div class="bg-blue-700 w-full py-3 mb-20">
        <div class="container mx-auto max-w-7xl">
            <span class="uppercase mx-4 xl:mx-0 text-white text-4xl font-bold py-2">Worklife</span>
        </div>
    </div>
    <div class="container max-w-7xl mx-auto">
        @if ($posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                @foreach ($posts as $item)
                    <div class="col-span-1 border-2 shadow-md relative">
                        <div class="p-4">
                            <img src="{{ $item->image_url }}" alt="{{ $item->short_title }}" width="" height="" class="aspect-video object-cover mb-3">
                            <span style="display: block; font-weigth: 500; font-size:18px; line-height: 26px; color: black;">{{ $item->short_title }}</span>
                        </div>
                        <a href="/post-detail/{{ $item->id }}" class="absolute z-30 left-0 bottom-0 right-0 top-0"></a>
                    </div>
                @endforeach
            </div>
        @else
        <div class="flex justify-center items-center h-40 my-40 flex-col">
            <p class="text-gray-600 text-lg">There are no post in "Worklife" Category</p>
            <p class="bg-black mt-8 text-white p-2"><a href="/">Anasayfaya dön</a></p>
        </div>
        @endif
    </div>
</div>
@endsection
