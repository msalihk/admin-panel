<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Models\Post;
use App\Models\Sorting;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
//        $data['user_id'] = Auth::id();
        return array_merge($data, [
            'user_id' => Auth::id(),
        ]);
    }

//    protected function afterCreate(): void
//    {
//        $posts = Post::all();
//
//        $sortings = Sorting::all();
//
//        foreach ($posts as $post) {
//            foreach ($sortings as $sorting) {
//                if ($post->location === $sorting->location) {
//                    $sortingPosts = $sorting->posts ?: [];
//
//                    if (!in_array($post->id, $sortingPosts)) {
//                        array_unshift($sortingPosts, $post->id);
//
//                        if ($post->location === 1) {
//                            $sortingPosts = array_slice($sortingPosts, 0, 20);
//                        } elseif ($post->location === 2) {
//                            $sortingPosts = array_slice($sortingPosts, 0, 5);
//                        }
//
//                        $sorting->posts = $sortingPosts;
//                        $sorting->save();
//                    }
//                }
//            }
//        }
//    }

    protected function afterCreate(): void
    {
        $location1Posts = Post::where('location', 1)
            ->orderBy('created_at', 'desc')
            ->take(20)
            ->get();

        $location2Posts = Post::where('location', 2)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $sortingData = [];

        foreach ($location1Posts as $index => $post) {
            $sortingData[] = [
                'location' => $post->location,
                'order' => $index + 1,
                'post_id' => $post->id,
                'created_at' => $post->created_at,
                'updated_at' => $post->updated_at,
            ];
        }

        foreach ($location2Posts as $index => $post) {
            $sortingData[] = [
                'location' => $post->location,
                'order' => $index + 1,
                'post_id' => $post->id,
                'created_at' => $post->created_at,
                'updated_at' => $post->updated_at,
            ];
        }
        
        Sorting::insert($sortingData);
    }
}
