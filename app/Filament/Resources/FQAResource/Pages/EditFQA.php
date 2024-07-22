<?php

namespace App\Filament\Resources\FQAResource\Pages;

use App\Filament\Resources\FQAResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFQA extends EditRecord
{
    protected static string $resource = FQAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
