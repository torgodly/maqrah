<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TagResource\Pages;
use App\Filament\Resources\TagResource\RelationManagers;
use App\Models\Tag;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TagResource extends Resource
{
    protected static ?string $model = Tag::class;

    protected static ?string $navigationIcon = 'tabler-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label(__('Name'))
                    ->columnSpanFull()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('type')
                    ->label(__('Type'))
                    ->columnSpanFull()
                    ->options([
                        'عام' => 'عام',
                        "ختمات" => "ختمات",
                        "مسابقات" => "مسابقات",
                        "دروس" => "دروس",
                        "مخيمات" => "مخيمات",

                    ])
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->label(__('Description'))
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    public static function getNavigationLabel(): string
    {
        return __('Tag');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Tags');
    }

    public static function getModelLabel(): string
    {
        return __('Tag');
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('Name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->label(__('Type'))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label(__('Description'))
                    ->limit(50)
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->requiresConfirmation()
                    ->modalIcon('tabler-tag')
                    ->modelLabel(__("Create Tag"))
                    ->modalDescription(__("Create a new tag."))
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
            'index' => Pages\ListTags::route('/'),
//            'create' => Pages\CreateTag::route('/create'),
//            'edit' => Pages\EditTag::route('/{record}/edit'),
        ];
    }
}
