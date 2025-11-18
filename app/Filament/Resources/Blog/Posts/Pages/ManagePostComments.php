<?php

namespace App\Filament\Resources\Blog\Posts\Pages;

use BackedEnum;
use Filament\Schemas\Schema;
use Filament\Resources\Pages\ManageRelatedRecords;
use Filament\Tables\Table;
use App\Filament\Resources\Blog\Comments\Schemas\CommentForm;
use App\Filament\Resources\Blog\Comments\Schemas\CommentInfolist;
use App\Filament\Resources\Blog\Comments\Tables\CommentsTable;
use App\Filament\Resources\Blog\Posts\PostResource;
use Illuminate\Contracts\Support\Htmlable;

class ManagePostComments extends ManageRelatedRecords
{
    protected static string $resource = PostResource::class;

    protected static string $relationship = 'comments';

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';

    public function getTitle(): string|Htmlable
    {
        $recordTitle = $this->getRecordTitle();

        $recordTitle = $recordTitle instanceof Htmlable ? $recordTitle->toHtml() : $recordTitle;

        return 'Manage Comments';
    }

    public function getBreadcrumb(): string
    {
        return 'Comments';
    }

    public static function getNavigationLabel(): string
    {
        return 'Manage Comments';
    }

    public function form(Schema $schema): Schema
    {
        return CommentForm::configure($schema, $this->getRecord());
    }

    public function table(Table $table): Table
    {
        return CommentsTable::configure($table, $this->getRecord());
    }

    public function infolist(Schema $schema): Schema
    {
        return CommentInfolist::configure($schema, $this->getRecord());
    }
}
