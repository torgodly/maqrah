<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FQAResource\Pages;
use App\Filament\Resources\FQAResource\RelationManagers;
use App\Models\FQA;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class FQAResource extends Resource
{
    protected static ?string $model = FQA::class;

    protected static ?string $navigationIcon = 'tabler-help-hexagon';

    public static function getNavigationLabel(): string
    {
        return __('F Q A');
    }

    public static function getPluralLabel(): ?string
    {
        return __('F Q As');
    }

    public static function getModelLabel(): string
    {
        return __('F Q A');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('question')
                    ->translateLabel()
                    ->columnSpanFull()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('answer')
                    ->translateLabel()
                    ->columnSpanFull()
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('question')
                    ->searchable(),
                Tables\Columns\TextColumn::make('answer')
                    ->limit(50)
                    ->searchable(),
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
            'index' => Pages\ListFQAS::route('/'),
//            'create' => Pages\CreateFQA::route('/create'),
//            'edit' => Pages\EditFQA::route('/{record}/edit'),
        ];
    }
}
