<?php

namespace App;

use App\Filament\Resources\PostResource\Pages\ListPosts;
use App\Models\Post;
use App\Models\Sorting;
use Illuminate\Support\Facades\DB;

class Helper
{
    public static function sort(): array
    {
        $location1Posts = Post::where('location', 1)
            ->orderBy('created_at', 'desc')
            ->take(20)
            ->get();

        $location2Posts = Post::where('location', 2)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        DB::table('sortings')->delete();


        foreach ($location1Posts as $index => $post) {
            $sortingEntry = Sorting::where('location', $post->location)
                ->where('post_id', $post->id)
                ->first();

            if ($sortingEntry) {
                $sortingEntry->order = $index + 1;
                $sortingEntry->save();
            } else {
                Sorting::create([
                    'location' => $post->location,
                    'order' => $index + 1,
                    'post_id' => $post->id
                ]);
            }
        }

        foreach ($location2Posts as $index => $post) {
            $sortingEntry = Sorting::where('location', $post->location)
                ->where('post_id', $post->id)
                ->first();

            if ($sortingEntry) {
                $sortingEntry->order = $index + 1;
                $sortingEntry->save();
            } else {
                Sorting::create([
                    'location' => $post->location,
                    'order' => $index + 1,
                    'post_id' => $post->id
                ]);
            }
        }

        return Filament\Resources\PostResource\Pages\ListPosts::route('/');
    }
}
