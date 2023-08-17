<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\Sorting;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SortNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sort-news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $location1Posts = Post::where('location', 1)
            ->orderBy('created_at', 'desc')
            ->take(20)
            ->get();

        $location2Posts = Post::where('location', 2)
            ->orderBy('created_at', 'desc')
            ->take(3)
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

    }
}
