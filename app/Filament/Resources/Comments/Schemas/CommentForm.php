<?php

namespace App\Filament\Resources\Comments\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CommentForm
{
    public static function configure(Schema $schema, ?\Firefly\FilamentBlog\Models\Post $post = null): Schema
    {
        return $schema->components([
            Select::make('user_id')
                ->relationship('user', config('filamentblog.user.columns.name'))
                ->nullable() // Make nullable for guest comments
                ->label('User (Optional)'),
            Select::make('post_id')
                ->relationship('post', 'title')
                ->hidden(fn() => $post?->exists())
                ->required(),
            TextInput::make('name')
                ->label('Commenter Name')
                ->maxLength(255)
                ->nullable()
                ->visible(fn($record) => !$record || !$record->user_id), // Show when no user
            Textarea::make('comment')
                ->required()
                ->maxLength(65535)
                ->columnSpanFull(),
            Toggle::make('approved'),
        ]);
    }
}




