<?php

namespace App\Filament\Resources\Blog\Posts\Pages;

use Filament\Actions\DeleteAction;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Firefly\FilamentBlog\Enums\PostStatus;
use App\Filament\Resources\Blog\Posts\PostResource;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function beforeSave()
    {
        if ($this->data['status'] === PostStatus::PUBLISHED->value) {
            $this->record->published_at = $this->record->published_at ?? date('Y-m-d H:i:s');
        }
    }
}
