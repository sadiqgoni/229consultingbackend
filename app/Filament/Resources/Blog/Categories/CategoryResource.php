<?php

namespace App\Filament\Resources\Blog\Categories;

use BackedEnum;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Firefly\FilamentBlog\Models\Category;
use App\Filament\Resources\Blog\Categories\Pages\EditCategory;
use App\Filament\Resources\Blog\Categories\Pages\ListCategories;
use App\Filament\Resources\Blog\Categories\Pages\ViewCategory;
use App\Filament\Resources\Blog\Categories\Schemas\CategoryForm;
use App\Filament\Resources\Blog\Categories\Schemas\CategoryInfolist;
use App\Filament\Resources\Blog\Categories\Tables\CategoriesTable;
use App\Filament\Resources\Blog\Categories\RelationManagers;
use UnitEnum;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-squares-plus';

    protected static string | UnitEnum | null $navigationGroup = 'Blog';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return CategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CategoriesTable::configure($table);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CategoryInfolist::configure($schema);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\PostsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCategories::route('/'),
            'edit' => EditCategory::route('/{record}/edit'),
            'view' => ViewCategory::route('/{record}'),
        ];
    }
}
