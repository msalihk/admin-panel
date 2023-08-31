<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Category;
use App\Models\Post;
use App\Models\Sorting;


class HomeController extends Controller
{
    public function index() : View
    {
        $categories = Category::where('is_active', 1)->get();
        $footerCategories = Category::where('is_active',1)->where('is_shown_in_footer', 1)->get();
        $sortedPosts = Sorting::where('location', 1)->orderBy('order', 'asc')->get();
        $headlineRightNews = Sorting::where('location', 2)->orderBy('order', 'asc')->get();
        $editorsPicks = Post::where('is_active', 1)->orderBy('created_at', 'desc')->get();
        $editorsPicksBottom = Post::where('is_active', 1)->orderBy('created_at', 'desc')->skip(1)->take(6)->get();
        $newsPosts = Post::where('location', 0)->whereHas('categories', function ($query) {
                $query->where('name', "News");
            })
            ->orderBy('created_at', 'desc')
            ->take(3)->get();
        $sportsPosts = Post::where('location', 0)->whereHas('categories', function ($query) {
                $query->where('name', "Sports");
            })
            ->orderBy('created_at', 'desc')
            ->take(3)->get();
        $topStoryIndex = 1;
        $topStories = Post::where('is_active', 1)->orderBy('created_at', 'desc')->get();
        $worldInPictures = Post::where('is_active', 1)->orderBy('created_at', 'desc')->take(5)->get();

        return view('pages.home', compact('categories', 'footerCategories', 'sortedPosts', 'headlineRightNews',
                    'editorsPicks','editorsPicksBottom', 'newsPosts', 'sportsPosts', 'topStoryIndex', 'worldInPictures', 'topStories'));
    }
}
