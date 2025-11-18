<?php

namespace App\Filament\Resources\Blog\Tags\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\Blog\Tags\TagResource;

class EditTag extends EditRecord
{
    protected static string $resource = TagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
