<?php

namespace App\Filament\Plugins;

use App\Filament\Resources\Categories\CategoryResource;
use App\Filament\Resources\Posts\PostResource;
use App\Filament\Resources\Tags\TagResource;
use App\Filament\Resources\SeoDetails\SeoDetailResource;
use App\Filament\Resources\Newsletters\NewsletterResource;
use App\Filament\Resources\Comments\CommentResource;
use Filament\Contracts\Plugin;
use Filament\Panel;

class CustomBlog implements Plugin
{
    public static function make()
    {
        return new static();
    }

    public function getId(): string
    {
        return 'custom-blog';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            CategoryResource::class,
            PostResource::class,
            TagResource::class,
            SeoDetailResource::class,
            // NewsletterResource::class,
            CommentResource::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
        // 
    }
}

