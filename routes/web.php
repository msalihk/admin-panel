<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SpecialSortController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Sorting;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\search;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home', [
        'categories' => Category::where('is_active', 1)->get(),
        'footerCategories' => Category::where('is_active',1)->where('is_shown_in_footer', 1)->get(),
        'sortedPosts' => Sorting::where('location', 1)->orderBy('order', 'asc')->get(),
        'headlineRightNews' => Sorting::where('location', 2)->orderBy('order', 'asc')->get(),
        'editorsPicks' => Post::where('is_active', 1)->orderBy('created_at', 'desc')->get(),
        'editorsPicksBottom' => Post::where('is_active', 1)->orderBy('created_at', 'desc')->skip(1)->take(6)->get(),
        'newsPosts' => Post::where('location', 0)->whereHas('categories', function ($query) {
            $query->where('name', "News");
        })->orderBy('created_at', 'desc')
        ->take(3)->get(),
        'sportsPosts' => Post::where('location', 0)->whereHas('categories', function ($query) {
            $query->where('name', "Sports");
        })->orderBy('created_at', 'desc')
        ->take(3)->get(),
        'topStoryIndex' => 1,
        'worldInPictures' => Post::where('is_active', 1)->orderBy('created_at', 'desc')->take(5)->get()
    ]);
});

Route::get('/categories/news', [PostController::class, 'navigation'])->name('news');



Route::get('/search', [PostController::class, 'search'])->name('search');


