<?php

namespace App\Filament\Resources\Blog\Comments;

use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Firefly\FilamentBlog\Models\Comment;
use App\Filament\Resources\Blog\Comments\Pages\ListComments;
use App\Filament\Resources\Blog\Comments\Pages\CreateComment;
use App\Filament\Resources\Blog\Comments\Pages\EditComment;
use App\Filament\Resources\Blog\Comments\Schemas\CommentForm;
use App\Filament\Resources\Blog\Comments\Schemas\CommentInfolist;
use App\Filament\Resources\Blog\Comments\Tables\CommentsTable;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    protected static string | \UnitEnum | null $navigationGroup = 'Blog';

    protected static ?int $navigationSort = 5;

    public static function form(Schema $schema): Schema
    {
        return CommentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CommentsTable::configure($table);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CommentInfolist::configure($schema);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListComments::route('/'),
            'create' => CreateComment::route('/create'),
            'edit' => EditComment::route('/{record}/edit'),
        ];
    }
}
