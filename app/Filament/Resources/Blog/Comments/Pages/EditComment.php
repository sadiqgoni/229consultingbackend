<?php

namespace App\Filament\Resources\Blog\Comments\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\Blog\Comments\CommentResource;

class EditComment extends EditRecord
{
    protected static string $resource = CommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function afterSave(): void
    {
        if ($this->record->approved) {
            $this->record->approved_at = now();
            $this->record->save();
        } else {
            $this->record->approved_at = null;
            $this->record->save();
        }
    }
}
