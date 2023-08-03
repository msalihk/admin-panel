<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Helper;
use App\Models\Post;
use App\Models\Sorting;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\DB;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(function (): array {
                return Helper::sort();
            }),
        ];
    }

    protected function afterSave(): array
    {
        return Helper::sort();
    }
}
