<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SpecialSortController;
use App\Http\Controllers\TagController;
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

Route::get('/', [HomeController::class, 'indexCached']);

Route::get('/tag-filter/{id}', [TagController::class, 'filterTags'])->name('tag-detail');

Route::get('/post-detail/{id}', [PostController::class, 'postDetail'])->name('post-detail');

Route::get('/search', [PostController::class, 'search'])->name('search');

// Navigation
Route::prefix('/categories')->group(function () {
    Route::get('/news', [CategoryController::class, 'news']);
    Route::get('/sports', [CategoryController::class, 'sports']);
    Route::get('/reels', [CategoryController::class, 'reels']);
    Route::get('/worklife', [CategoryController::class, 'worklife']);
    Route::get('/travel', [CategoryController::class, 'travel']);
    Route::get('/future', [CategoryController::class, 'future']);
    Route::get('/culture', [CategoryController::class, 'culture']);
    Route::get('/tv', [CategoryController::class, 'tv']);
    Route::get('/weather', [CategoryController::class, 'weather']);
    Route::get('/sounds', [CategoryController::class, 'sounds']);
});
