<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SpecialSortController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $latestPosts = Post::orderByDesc('created_at')->take(20)->get();

        $order = 1;
        foreach ($latestPosts as $latestPost) {
            $sorting = $latestPost->sorting;
            if ($sorting) {

                $sorting->location = $latestPost->location;

                $sorting->order = $order;

                $sorting->save();
            }
            $order++;
        }

        return response()->json(['message' => 'Sorting updated successfully'], 200);
    }
}
