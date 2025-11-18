<?php

namespace App\Filament\Resources\Blog\Newsletters\Pages;

use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Blog\Newsletters\NewsletterResource;

class CreateNewsletter extends CreateRecord
{
    protected static string $resource = NewsletterResource::class;
}
