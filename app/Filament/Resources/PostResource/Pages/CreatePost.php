<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Helper;
use App\Models\Post;
use App\Models\Sorting;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    protected function handleRecordCreation(array $data): Model
    {
        $post = static::getModel()::create($data);
        Helper::sort($post);
        return $post;
    }
}
