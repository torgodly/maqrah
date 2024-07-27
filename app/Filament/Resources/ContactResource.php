<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'tabler-messages';

    public static function getNavigationLabel(): string
    {
        return __('Messages');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Messages');
    }

    public static function getModelLabel(): string
    {
        return __('Message');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label(__('Name')),
                Tables\Columns\TextColumn::make('email')->label(__('Email')),
                Tables\Columns\TextColumn::make('subject')->label(__('Subject')),
                Tables\Columns\TextColumn::make('message')->label(__('Message'))->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('name')->translateLabel()->columnSpanFull()->markdown()->size(TextEntry\TextEntrySize::Large),
                TextEntry::make('email')->translateLabel()->columnSpanFull()->markdown()->size(TextEntry\TextEntrySize::Large),
                TextEntry::make('subject')->translateLabel()->columnSpanFull()->markdown()->size(TextEntry\TextEntrySize::Large),
                TextEntry::make('message')->translateLabel()->columnSpanFull()->markdown()->size(TextEntry\TextEntrySize::Large),
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
            'index' => Pages\ListContacts::route('/'),
//            'create' => Pages\CreateContact::route('/create'),
//            'view' => Pages\ViewContact::route('/{record}'),
//            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
