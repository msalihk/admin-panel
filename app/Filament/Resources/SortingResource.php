<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SortingResource\Pages;
use App\Http\Controllers\SpecialSortController;
use App\Models\Post;
use App\Models\Sorting;
use Faker\Provider\Text;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Http\Request;

class SortingResource extends Resource
{
    protected static ?string $model = Sorting::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('location'),
                Forms\Components\TextInput::make('order'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('post.location'),
                Tables\Columns\TextColumn::make('post.short_title'),
                Tables\Columns\TextColumn::make('post.created_at')->sortable(),
            ])
            ->filters([
//
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
//                Action::make('sort')
//                    ->label('Özel Sıralama')
//                    ->action()
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])->defaultSort('post.created_at', 'desc');
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
            'create' => Pages\CreateSorting::route('/create'),
            'edit' => Pages\EditSorting::route('/{record}/edit'),
        ];
    }
}
