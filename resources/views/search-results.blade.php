<x-layout :categories="$categories" :footerCategories="$footerCategories">
    @if ($posts->count() > 0)
    <h2>Arama Sonuçları</h2>
    <ul>
        @foreach ($posts as $post)
        <div class="bg-white border-2 my-20">
            <div class="">
                <div class="bg-white p-4 shadow-md border-black border-dashed cursor-pointer">
                    <img src="{{$post->image_url}} alt="News Image" class=" h-40 object-cover">
                    <h3 class="mt-2 text-xl font-semibold">{{$post->short_title}}</h3>
                </div>
            </div>
        </div>
        @endforeach
    </ul>
@else
    <div class="flex justify-center items-center h-40 my-40 flex-col">
        <p class="text-gray-600 text-lg">Aradığınız kelimeyle ilişkili haber bulunamadı.</p>
        <p class="bg-black mt-8 text-white p-2"><a href="/">Anasayfaya dön</a></p>
    </div>
@endif
</x-layout>
