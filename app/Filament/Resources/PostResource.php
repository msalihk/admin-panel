<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Helper;
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
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $pluralLabel = 'Haberler';

    protected static ?string $modelLabel = 'Haber';

    protected static ?string $navigationLabel = 'Haberler';

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Radio::make('location')
                        ->options([
                            0 => 'Normal',
                            1 => 'Manşet',
                            2 => 'Sağ Manşet'
                        ])->label('Manşet türü')->default(0),
                    Forms\Components\TextInput::make('short_title')->label('Kısa Başlık')->required(),
                    Forms\Components\TextInput::make('title')->label('Ana Başlık')->required(),
                    Forms\Components\TextInput::make('summary')->label('Özet')->required(),
                    Forms\Components\RichEditor::make('content')->label('İçerik')->required(),
                    Forms\Components\FileUpload::make('image_url')->label('Görüntü Linki'),
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
                    Forms\Components\Toggle::make('is_active')->label('Aktif')->required(),
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_url')->label('Görsel'),
                Tables\Columns\TextColumn::make('title')->label('Ana başlık')->searchable(),
                Tables\Columns\TextColumn::make('location')->label('Manşet türü')->searchable(),
                Tables\Columns\IconColumn::make('is_active')->label('Aktif')->boolean(),
                Tables\Columns\TextColumn::make('created_at')->label('Oluşturulma tarihi')->dateTime('D, d M Y H:i:s')->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Filter::make('is_active')
                    ->label('Aktif olanlar')
                    ->query(fn (Builder $query): Builder => $query->where('is_active', true)),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->after(function (): array {
                    return Helper::sort();
                }),
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
