<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Filament\Resources\TestimonialResource\RelationManagers;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function getNavigationLabel(): string
    {
        return __('Testimonials');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Testimonials');
    }

    public static function getModelLabel(): string
    {
        return __('Testimonial');
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Name')
                    ->translateLabel()
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('position')
                    ->label('Position')
                    ->translateLabel()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('content')
                    ->label('Content')
                    ->translateLabel()
                    ->required()
                    ->autosize()
                    ->columnSpanFull(),
                SpatieMediaLibraryFileUpload::make('image')
                    ->collection('Testimonials')
                    ->label('Image')
                    ->translateLabel()
                    ->required()
                    ->imageEditor()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('image')
                    ->label('Image')
                    ->translateLabel()
                    ->circular()
                    ->height('80px')
                    ->collection('Testimonials'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->translateLabel()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('position')
                    ->label('Position')
                    ->translateLabel()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('content')
                    ->label('Content')
                    ->translateLabel()
                    ->searchable()
                    ->words(10)
                    ->sortable(),

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
            'index' => Pages\ListTestimonials::route('/'),
//            'create' => Pages\CreateTestimonial::route('/create'),
//            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
