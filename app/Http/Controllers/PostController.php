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

        $posts = Post::where('short_title', 'LIKE', "%$query%")
            ->orWhere('title', 'LIKE', "%$query%")
            ->get();;

        return view('pages.search-results', compact('query', 'posts'));
    }

    public function navigation($category)
    {
        return view('pages.navigation',['category' => $category]);
    }
}
