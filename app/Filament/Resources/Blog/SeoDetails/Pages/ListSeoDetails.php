<?php

namespace App\Filament\Resources\Blog\SeoDetails\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\Blog\SeoDetails\SeoDetailResource;

class ListSeoDetails extends ListRecords
{
    protected static string $resource = SeoDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
