<?php

namespace App;

use App\Enums\PostLocation;
use App\Filament\Resources\PostResource\Pages\ListPosts;
use App\Models\Post;
use App\Models\Sorting;
use Illuminate\Support\Facades\DB;

class Helper
{
    public static function sort(Post $post): void
    {
        $location = PostLocation::from($post->location);

        $max = $location->getMaxNumber();

        Sorting::create([
            'location' => $post->location,
            'order' => 1,
            'post_id' => $post->id,
        ]);

        $sortingPosts = Sorting::where('location', $post->location)->orderBy('created_at', 'desc')->get();
        foreach ($sortingPosts as $key => $sortingPost) {
            if ($key + 1 >  $max) {
                $sortingPost->delete();
                continue;
            }

            $sortingPost->order = $key + 1;
            $sortingPost->save();
        }
    }

}
