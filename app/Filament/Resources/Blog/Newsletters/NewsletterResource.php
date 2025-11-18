<?php

namespace App\Filament\Resources\Blog\Newsletters;

use BackedEnum;
use Filament\Schemas\Schema;
use App\Filament\Resources\Blog\Newsletters\Pages\ListNewsletters;
use App\Filament\Resources\Blog\Newsletters\Pages\CreateNewsletter;
use App\Filament\Resources\Blog\Newsletters\Pages\EditNewsletter;
use App\Filament\Resources\Blog\Newsletters\Schemas\NewsletterForm;
use App\Filament\Resources\Blog\Newsletters\Tables\NewslettersTable;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Firefly\FilamentBlog\Models\NewsLetter;
use UnitEnum;

class NewsletterResource extends Resource
{
    protected static ?string $model = NewsLetter::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-newspaper';

    protected static string | UnitEnum | null $navigationGroup = 'Blog';

    protected static ?int $navigationSort = 6;

    public static function form(Schema $schema): Schema
    {
        return NewsletterForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NewslettersTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListNewsletters::route('/'),
            'create' => CreateNewsletter::route('/create'),
            'edit' => EditNewsletter::route('/{record}/edit'),
        ];
    }
}
