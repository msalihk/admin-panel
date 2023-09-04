<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function activeCategories(): Collection
    {
        return Category::where('is_active', 1)->get();
    }

    public function footerCategories(): Collection
    {
        return Category::where('is_active', 1)->get();
    }

    public function news(): View
    {
        $posts = Post::where('is_active', 1)->whereHas('categories', function ($query) {
            $query->where('name', "News");
        })
            ->latest()
            ->get();

        return view('pages.navigation.news', compact('posts'));
    }

    public function sports(): View
    {
        $posts = Post::where('is_active', 1)->whereHas('categories', function ($query) {
            $query->where('name', "Sports");
        })
            ->latest()
            ->get();

        return view('pages.navigation.sport', compact('posts'));
    }

    public function reels(): View
    {
        $posts = Post::where('is_active', 1)->whereHas('categories', function ($query) {
            $query->where('name', "Reels");
        })
            ->latest()
            ->get();

        return view('pages.navigation.reels', compact('posts'));
    }

    public function worklife(): View
    {
        $posts = Post::where('is_active', 1)->whereHas('categories', function ($query) {
            $query->where('name', "Worklife");
        })
            ->latest()
            ->get();

        return view('pages.navigation.worklife', compact('posts'));
    }

    public function travel(): View
    {
        $posts = Post::where('is_active', 1)->whereHas('categories', function ($query) {
            $query->where('name', "Travel");
        })
            ->latest()
            ->get();

        return view('pages.navigation.travel', compact('posts'));
    }

    public function future(): View
    {
        $posts = Post::where('is_active', 1)->whereHas('categories', function ($query) {
            $query->where('name', "Future");
        })
            ->latest()
            ->get();

        return view('pages.navigation.future', compact('posts'));
    }

    public function culture(): View
    {
        $posts = Post::where('is_active', 1)->whereHas('categories', function ($query) {
            $query->where('name', "Culture");
        })
            ->latest()
            ->get();

        return view('pages.navigation.culture', compact('posts'));
    }

    public function tv(): View
    {
        $posts = Post::where('is_active', 1)->whereHas('categories', function ($query) {
            $query->where('name', "Tv");
        })
            ->latest()
            ->get();

        return view('pages.navigation.tv', compact('posts'));
    }

    public function weather(): View
    {
        $posts = Post::where('is_active', 1)->whereHas('categories', function ($query) {
            $query->where('name', "Weather");
        })
            ->latest()
            ->get();

        return view('pages.navigation.weather', compact('posts'));
    }

    public function sounds(): View
    {
        $posts = Post::where('is_active', 1)->whereHas('categories', function ($query) {
            $query->where('name', "Sounds");
        })
            ->latest()
            ->get();

        return view('pages.navigation.sounds', compact('posts'));
    }
}
