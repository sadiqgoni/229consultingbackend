<?php

namespace App\Filament\Resources\Blog\Comments\Pages;

use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Blog\Comments\CommentResource;

class CreateComment extends CreateRecord
{
    protected static string $resource = CommentResource::class;

    protected function afterCreate(): void
    {
        if($this->record->approved) {
            $this->record->approved_at = now();
            $this->record->save();
        }
    }
}
