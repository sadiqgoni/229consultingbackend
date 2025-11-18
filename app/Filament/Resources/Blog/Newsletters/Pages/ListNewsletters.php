<?php

namespace App\Filament\Resources\Blog\Newsletters\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\Blog\Newsletters\NewsletterResource;

class ListNewsletters extends ListRecords
{
    protected static string $resource = NewsletterResource::class;

    protected static ?string $title = 'Newsletters Subscriber';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
            ->label('Add Newsletter Subscriber'),
        ];
    }
}
