<?php

namespace App\Filament\Resources\Blog\Newsletters\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\Blog\Newsletters\NewsletterResource;

class EditNewsletter extends EditRecord
{
    protected static string $resource = NewsletterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
