<?php

namespace App\Filament\Resources\Blog\Categories\Pages;

use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Blog\Categories\CategoryResource;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
}
