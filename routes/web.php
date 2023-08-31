<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavigationController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/categories/{$category}', NavigationController::class);

Route::get('/post-detail/{id}', [PostController::class, 'postDetail'])->name('post-detail');

Route::get('/search', [PostController::class, 'search'])->name('search');


