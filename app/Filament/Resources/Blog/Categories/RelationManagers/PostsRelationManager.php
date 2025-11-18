<?php

namespace App\Filament\Resources\Blog\Categories\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use App\Filament\Resources\Blog\Posts\Schemas\PostForm;
use App\Filament\Resources\Blog\Posts\Schemas\PostInfolist;
use App\Filament\Resources\Blog\Posts\Tables\PostsTable;

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
        return PostsTable::configure($table);
    }
}
