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
        $newLocation = $post->location;

        $existingSorting = Sorting::where('post_id', $post->id)->first();

        if ($existingSorting) {
            if ($existingSorting->location !== $newLocation) {
                $existingSorting->update(['location' => $newLocation, 'order' => 1]);
            }
        } else {
            $location = PostLocation::from($newLocation);
            $max = $location->getMaxNumber();

            Sorting::create([
                'location' => $newLocation,
                'order' => 1,
                'post_id' => $post->id,
            ]);

            $sortingPosts = Sorting::where('location', $newLocation)
                ->orderBy('created_at', 'desc')
                ->get();

            foreach ($sortingPosts as $key => $sortingPost) {
                if ($key + 1 > $max) {
                    $sortingPost->delete();
                    continue;
                }

                $sortingPost->order = $key + 1;
                $sortingPost->save();
            }
        }
    }
}
