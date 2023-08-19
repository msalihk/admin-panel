<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\View\View;
use App\Models\Category;

class PostController extends Controller
{
    public function search(Request $request): View
    {
        $query = $request->input('query');

        $categories = Category::where('is_active', 1)->get();
        $footerCategories = Category::where('is_active', 1)->where('is_shown_in_footer', 1)->get();

        // $posts = Post::where(function ($queryBuilder) use ($query) {
        //     $queryBuilder->where('short_title', 'like', '%' . $query . '%')
        //              ->orWhereHas('categories', function ($categoryQuery) use ($query) {
        //                  $categoryQuery->where('name', 'like', '%' . $query . '%');
        //              })
        //              ->orWhereHas('tags', function ($tagQuery) use ($query) {
        //                  $tagQuery->where('name', 'like', '%' . $query . '%');
        //              });
        // })->get();

        $posts = Post::where('short_title', 'like', '%' . $query . '%')
            ->get();

    return view('search-results', compact('posts', 'categories', 'footerCategories'));
    }

    public function navigation($category)
    {
        return view('pages.navigation',['category' => $category]);
    }
}
