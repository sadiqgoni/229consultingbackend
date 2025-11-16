<?php

namespace App\Filament\Resources\Posts;

use BackedEnum;
use Filament\Pages\Enums\SubNavigationPosition;
use UnitEnum;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Firefly\FilamentBlog\Models\Post;
use App\Filament\Resources\Posts\Schemas\PostForm;
use Firefly\FilamentBlog\Resources\Posts\Schemas\PostInfolist;
use App\Filament\Resources\Posts\Tables\PostsTable;
use Firefly\FilamentBlog\Resources\Posts\Widgets\BlogPostPublishedChart;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-document-text';

    protected static string | UnitEnum | null $navigationGroup = 'Blog';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?int $navigationSort = 3;

    protected static ?SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    public static function getNavigationBadge(): ?string
    {
        return strval(Post::count());
    }

    public static function form(Schema $schema): Schema
    {
        return PostForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PostsTable::configure($table);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PostInfolist::configure($schema);
    }

    public static function getWidgets(): array
    {
        return [
            BlogPostPublishedChart::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => \Firefly\FilamentBlog\Resources\Posts\Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => \Firefly\FilamentBlog\Resources\Posts\Pages\EditPost::route('/{record}/edit'),
            'view' => Pages\ViewPost::route('/{record}'),
            'comments' => \Firefly\FilamentBlog\Resources\Posts\Pages\ManagePostComments::route('/{record}/comments'),
            'seoDetail' => \Firefly\FilamentBlog\Resources\Posts\Pages\ManagePostSeoDetail::route('/{record}/seo-details'),
        ];
    }
}
