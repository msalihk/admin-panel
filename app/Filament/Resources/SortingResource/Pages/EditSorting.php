<?php

namespace App\Filament\Resources\SortingResource\Pages;

use App\Filament\Resources\SortingResource;
use App\Models\Post;
use App\Models\Sorting;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\DB;

class EditSorting extends EditRecord
{
    protected static string $resource = SortingResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
