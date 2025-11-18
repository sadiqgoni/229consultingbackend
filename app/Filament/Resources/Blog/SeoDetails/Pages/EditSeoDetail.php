<?php

namespace App\Filament\Resources\Blog\SeoDetails\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\Blog\SeoDetails\SeoDetailResource;

class EditSeoDetail extends EditRecord
{
    protected static string $resource = SeoDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
    
}
