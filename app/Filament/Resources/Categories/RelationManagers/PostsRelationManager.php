<?php

namespace App\Filament\Resources\Categories\RelationManagers;

use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Schemas\Schema;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Firefly\FilamentBlog\Models\Post;
use Firefly\FilamentBlog\Enums\PostStatus;
use Firefly\FilamentBlog\Resources\Posts\Schemas\PostForm;
use Firefly\FilamentBlog\Resources\Posts\Schemas\PostInfolist;
use Firefly\FilamentBlog\Tables\Columns\UserPhotoName;
use Illuminate\Support\Str;

class PostsRelationManager extends RelationManager
{
    protected static string $relationship = 'posts';

    public function isReadOnly(): bool
    {
        return false;
    }

    public function infolist(Schema $schema): Schema
    {
        return PostInfolist::configure($schema, $this->getOwnerRecord());
    }

    public function form(Schema $schema): Schema
    {
        return PostForm::configure($schema, $this->getOwnerRecord());
    }

    public function table(Table $table): Table
    {
        $postsTable = config('filamentblog.tables.prefix') . 'posts';
        
        return $table
            ->deferLoading()
            ->columns([
                TextColumn::make('title')
                    ->description(function (Post $record) {
                        return Str::limit($record->sub_title, 40);
                    })
                    ->searchable()
                    ->limit(20),

                TextColumn::make('status')
                    ->badge()
                    ->color(function ($state) {
                        return $state->getColor();
                    }),

                ImageColumn::make('feature_photo')
                    ->label('Cover Photo')
                    ->getStateUsing(function (Post $record) {
                        return $record->cover_photo_path ? asset('storage/' . $record->cover_photo_path) : null;
                    })
                    ->defaultImageUrl('/images/placeholder.png')
                    ->height(40)
                    ->width(60),

                UserPhotoName::make('user')
                    ->label('Author'),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('user')
                    ->relationship('user', config('filamentblog.user.columns.name'))
                    ->searchable()
                    ->preload()
                    ->multiple(),
            ])
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    Action::make('publish')
                        ->label('Publish')
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->visible(function (Post $record) {
                            return $record->status === PostStatus::PENDING || $record->status === PostStatus::SCHEDULED;
                        })
                        ->requiresConfirmation()
                        ->modalHeading('Publish Post')
                        ->modalDescription('Are you sure you want to publish this post? It will be immediately visible to visitors.')
                        ->modalSubmitActionLabel('Yes, Publish')
                        ->action(function (Post $record) {
                            $record->update([
                                'status' => PostStatus::PUBLISHED,
                                'published_at' => $record->published_at ?? now(),
                            ]);
                        }),
                ]),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort($postsTable . '.id', 'desc');
    }
}

