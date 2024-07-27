<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'tabler-file-text';


    public static function getNavigationLabel(): string
    {
        return __('post');
    }

    public static function getPluralLabel(): ?string
    {
        return __('posts');
    }

    public static function getModelLabel(): string
    {
        return __('post');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->translateLabel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('tag_id')
                    ->translateLabel()
                    ->relationship('tag', 'name')
                    ->required(),
                Forms\Components\FileUpload::make('thumbnail')
                    ->translateLabel()
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\SpatieMediaLibraryFileUpload::make('images')
                    ->translateLabel()
                    ->collection('images')
                    ->multiple()
                    ->image()
                    ->columnSpanFull(),
                RichEditor::make('content')
                    ->translateLabel()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('youtube_link')
                    ->translateLabel()
                    ->url()
                    ->columnSpanFull(),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->translateLabel()
                    ->searchable(),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('images')
                    ->translateLabel()
                    ->collection('images')
                    ->stacked()
                    ->circular(),
                Tables\Columns\TextColumn::make('title')
                    ->translateLabel()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tag.name')
                    ->translateLabel()
                    ->badge()
                    ->sortable(),
                Tables\Columns\IconColumn::make('youtube_link')
                    ->icon('tabler-brand-youtube')
                    ->url(fn($record) => $record->youtube_link)
                    ->label(__('Youtube Link'))

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
