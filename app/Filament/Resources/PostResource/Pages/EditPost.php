<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Enums\PostLocation;
use App\Filament\Resources\PostResource;
use App\Helper;
use App\Models\Post;
use App\Models\Sorting;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(fn(Post $post) => Helper::sort($post)),
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $record->update($data);
        Helper::sort($record);
        return $record;
    }
}
