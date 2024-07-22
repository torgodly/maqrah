<?php

namespace App\Filament\Resources\FQAResource\Pages;

use App\Filament\Resources\FQAResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFQAS extends ListRecords
{
    protected static string $resource = FQAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label(__('Create FQA'))
                ->requiresConfirmation()
                ->modalIcon('tabler-help-hexagon')
                ->modalHeading(__('Create FQA'))
                ->modalDescription(__('Create a new question and answer.'))
            ->createAnother(false),
        ];
    }
}
