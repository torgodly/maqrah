<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'tabler-users';

    public static function getNavigationLabel(): string
    {
        return __('Team');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Team');
    }

    public static function getModelLabel(): string
    {
        return __('Team');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Name')
                    ->translateLabel()
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\Select::make('readings')
                    ->label('Readings')
                    ->translateLabel()
                    ->columnSpanFull()
                    ->options([
                        'حفص' => 'حفص',
                        'ورش' => 'ورش',
                        'الدوري' => 'الدوري',
                        'السوسي' => 'السوسي',
                        'شعبة' => 'شعبة',
                        'قالون' => 'قالون',
                        'الكسائي' => 'الكسائي'
                    ])
                    ->multiple()
                    ->required(),
                SpatieMediaLibraryFileUpload::make('image')
                    ->collection('Team')
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
                    ->collection('Team'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->translateLabel()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('readings')
                    ->label('Readings')
                    ->translateLabel()
                    ->badge()
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
            'index' => Pages\ListTeams::route('/'),
//            'create' => Pages\CreateTeam::route('/create'),
//            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
