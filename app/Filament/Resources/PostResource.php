<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Filament\Forms;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Radio::make('location')
                    ->options([
                        0 => 'Manset',
                        1 => 'Sağ Manşet',
                        2 => 'Normal'
                    ]),
                Forms\Components\TextInput::make('short_title')->label('Kısa Başlık')->required(),
                Forms\Components\TextInput::make('title')->label('Ana Başlık')->required(),
                Forms\Components\TextInput::make('summary')->label('Özet')->required(),
                Forms\Components\RichEditor::make('content')->required(),
                Forms\Components\Toggle::make('is_active')->required(),
                Forms\Components\FileUpload::make('image_url'),
                Select::make('category_id')
                    ->label('Kategori')
                    ->searchable()
                    ->relationship('categories', 'name')
                    ->multiple()
                    ->options(Category::all()->pluck('name', 'id')->toArray()),
                Select::make('tag_id')
                    ->label('Etiket')
                    ->searchable()
                    ->relationship('tags', 'name')
                    ->multiple()
                    ->options(Tag::all()->pluck('name', 'id')->toArray()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('location')->searchable(),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
                Tables\Columns\TextColumn::make('short_title')->searchable(),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('summary'),
                Tables\Columns\TextColumn::make('content'),
                Tables\Columns\ImageColumn::make('image_url'),
                Tables\Columns\TextColumn::make('created_at')->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
