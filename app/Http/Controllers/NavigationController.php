<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NavigationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Category $category): View
    {
        $posts = Post::where('is_active', 1)->whereHas('categories', function ($query) {
            $query->where('id', 'category_id');
        })->latest()->get();

        return view('pages.navigation', compact('posts'));
    }
}
