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

        $posts = Post::search($query)->get();

        // $posts = Post::where('short_title', 'LIKE', "%$query%")
        //     ->orWhere('title', 'LIKE', "%$query%")
        //     ->get();;

        return view('pages.search-results', compact('query', 'posts'));
    }

    public function postDetail($id) : View
    {
        $post = Post::find($id);

        $hours = $post->created_at->diffForHumans();

        $topStories = Post::where('is_active', 1)->latest()->take(10)->get();

        $category = $post->categories->first()->name;

        return view('pages.post-detail', compact('post', 'category', 'hours', 'topStories'));
    }
}
