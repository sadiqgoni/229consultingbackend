<?php

namespace App\Filament\Resources\Posts\Pages;

use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\Posts\PostResource;
use Illuminate\Contracts\Support\Htmlable;

class ViewPost extends ViewRecord
{
    protected static string $resource = PostResource::class;

    public function getTitle(): string|Htmlable
    {
        $record = $this->getRecord();

        return $record->title;
    }

    protected function getHeaderActions(): array
    {
        return [
            // Removed Send Notification and Preview actions
        ];
    }
}
