<?php

namespace App\Filament\Resources\Posts\Pages;

use Carbon\Carbon;
use Filament\Resources\Pages\CreateRecord;
use Firefly\FilamentBlog\Events\BlogPublished;
use Firefly\FilamentBlog\Jobs\PostScheduleJob;
use App\Filament\Resources\Posts\PostResource;
use App\Filament\Resources\SeoDetails\SeoDetailResource;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function afterCreate()
    {
        if ($this->record->isScheduled()) {
            $now = Carbon::now();
            $scheduledFor = Carbon::parse($this->record->scheduled_for);
            PostScheduleJob::dispatch($this->record)->delay($now->diffInSeconds($scheduledFor));
        }

        if ($this->record->isStatusPublished()) {
            $this->record->published_at = date('Y-m-d H:i:s');
            $this->record->save();
            event(new BlogPublished($this->record));
        }
    }

    protected function getRedirectUrl(): string
    {
        // Redirect to SEO table instead of SEO detail create page
        return SeoDetailResource::getUrl('index');
    }
}

