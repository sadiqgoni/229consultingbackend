<?php

namespace App\Filament\Resources\Blog\SeoDetails\Pages;

use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Blog\SeoDetails\SeoDetailResource;

class CreateSeoDetail extends CreateRecord
{
    protected static string $resource = SeoDetailResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }   
}
