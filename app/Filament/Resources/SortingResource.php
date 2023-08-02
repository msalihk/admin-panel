<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SortingResource\Pages;
use App\Http\Controllers\SpecialSortController;
use App\Models\Post;
use App\Models\Sorting;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Http\Request;

class SortingResource extends Resource
{
    protected static ?string $model = Sorting::class;


    protected static ?string $modelLabel = 'Haber Sıralama';

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';
    protected static ?string $navigationGroup = 'Manşet Sıralaması';
    protected static bool $shouldRegisterNavigation = false;
    protected $queryString = [
        'tableFilters',
        'tableSortColumn',
        'tableSortDirection',
        'tableSearchQuery' => ['except' => ''],
        'tableColumnSearchQueries',
    ];

    public static function canCreate(): bool
    {
        return false;
    }
    public static function canEdit(Model $record): bool
    {
        return false;
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
//                Tables\Columns\TextColumn::make('location')->label('Manşet'),
                Tables\Columns\TextColumn::make('order')->label('Sıra'),
//                Tables\Columns\TextColumn::make('post.id'),
                Tables\Columns\ImageColumn::make('post.image_url')->label('Görsel'),
                Tables\Columns\TextColumn::make('post.short_title')->label('Kısa Başlık'),
            ])
            ->filters([
                SelectFilter::make('location')
                    ->options([
                        '1' => 'Manşet',
                        '2' => 'Sağ Manşet',
                    ])->default(request()->get('location'))
            ])

            ->actions([
            ])
            ->bulkActions([
            ])->defaultSort('order', 'asc')->reorderable('order');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSortings::route('/'),
            'edit' => Pages\EditSorting::route('/{record}/edit'),
        ];
    }
}
