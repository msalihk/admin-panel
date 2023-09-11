<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Category;
use App\Models\Post;
use App\Models\Sorting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;


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
        $travelPosts = Post::where('location', 0)->whereHas('categories', function ($query) {
                $query->where('name', "Travel");
            })
            ->orderBy('created_at', 'desc')
            ->take(3)->get();
        $soundsPosts = Post::where('location', 0)->whereHas('categories', function ($query) {
                $query->where('name', "Sounds");
            })
            ->orderBy('created_at', 'desc')
            ->take(3)->get();
        $topStoryIndex = 1;
        $topStories = Post::where('is_active', 1)->orderBy('created_at', 'desc')->get();
        $worldInPictures = Post::where('is_active', 1)->orderBy('created_at', 'desc')->take(5)->get();

        return view('pages.home', compact('categories', 'footerCategories', 'sortedPosts', 'headlineRightNews',
                    'editorsPicks','editorsPicksBottom', 'newsPosts', 'sportsPosts', 'topStoryIndex', 'worldInPictures', 'topStories', 'travelPosts', 'soundsPosts'));
    }


    public function indexCached() : View
    {
        $categories = Cache::remember('categories', 600, function () {
            return Category::where('is_active', 1)->get();
        });

        $footerCategories = Cache::remember('footerCategories', 600, function () {
            return Category::where('is_active',1)->where('is_shown_in_footer', 1)->get();
        });

        $sortedPosts = Cache::remember('sortedPosts', 600, function () {
            return Sorting::where('location', 1)->orderBy('order', 'asc')->get();
        });

        $headlineRightNews = Cache::remember('headlineRightNews', 600, function () {
            return Sorting::where('location', 2)->orderBy('order', 'asc')->get();
        });

        $editorsPicks = Cache::remember('editorsPicks', 600, function () {
            return Post::where('is_active', 1)->orderBy('created_at', 'desc')->get();
        });

        $editorsPicksBottom = Cache::remember('editorsPicksBottom', 600, function () {
            return Post::where('is_active', 1)->orderBy('created_at', 'desc')->skip(1)->take(6)->get();
        });

        $newsPosts = Cache::remember('newsPosts', 600, function () {
            return Post::where('location', 0)->whereHas('categories', function ($query) {
                $query->where('name', "News");
            })
            ->orderBy('created_at', 'desc')
            ->take(3)->get();
        });

        $sportsPosts = Cache::remember('sportsPosts', 600, function () {
            return Post::where('location', 0)->whereHas('categories', function ($query) {
                $query->where('name', "Sports");
            })
            ->orderBy('created_at', 'desc')
            ->take(3)->get();
        });

        $travelPosts = Cache::remember('travelPosts', 600, function () {
            return Post::where('location', 0)->whereHas('categories', function ($query) {
                $query->where('name', "Travel");
            })
            ->orderBy('created_at', 'desc')
            ->take(3)->get();
        });

        $soundsPosts = Cache::remember('soundsPosts', 600, function () {
            return Post::where('location', 0)->whereHas('categories', function ($query) {
                $query->where('name', "Sounds");
            })
            ->orderBy('created_at', 'desc')
            ->take(3)->get();
        });

        $topStoryIndex = 1;

        $topStories = Cache::remember('topStories', 600, function () {
            return Post::where('is_active', 1)->orderBy('created_at', 'desc')->get();
        });

        $worldInPictures = Cache::remember('worldInPictures', 600, function () {
            return Post::where('is_active', 1)->orderBy('created_at', 'desc')->take(5)->get();
        });



        return view('pages.home', compact('categories', 'footerCategories', 'sortedPosts', 'headlineRightNews',
                    'editorsPicks','editorsPicksBottom', 'newsPosts', 'sportsPosts', 'topStoryIndex', 'worldInPictures', 'topStories', 'travelPosts', 'soundsPosts'));
    }
}
