<?php

namespace App\Filament\Resources\TagResource\Pages;

use App\Filament\Resources\TagResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTags extends ListRecords
{
    protected static string $resource = TagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->requiresConfirmation()
            ->modalIcon('tabler-tag')
            ->modelLabel(__("Tag"))
            ->modalDescription(__("Create a new tag."))
            ->createAnother(false)

        ];
    }
}
