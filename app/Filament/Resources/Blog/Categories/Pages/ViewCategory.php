<?php

namespace App\Filament\Resources\Blog\Categories\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\Blog\Categories\CategoryResource;

class ViewCategory extends ViewRecord
{
    protected static string $resource = CategoryResource::class;

    public function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
