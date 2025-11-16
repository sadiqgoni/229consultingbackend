<?php

namespace App\Filament\Resources\Comments;

use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use App\Models\Comment;
use App\Filament\Resources\Comments\Pages\ListComments;
use App\Filament\Resources\Comments\Pages\CreateComment;
use App\Filament\Resources\Comments\Pages\EditComment;
use App\Filament\Resources\Comments\Schemas\CommentForm;
use Firefly\FilamentBlog\Resources\Comments\Schemas\CommentInfolist;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class; // Use our custom Comment model

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    protected static string | \UnitEnum | null $navigationGroup = 'Blog';

    protected static ?int $navigationSort = 5;

    public static function form(Schema $schema): Schema
    {
        return CommentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn($query) => $query->with(['user', 'post']))
            ->columns([
                Tables\Columns\TextColumn::make('user_name')
                    ->label('User')
                    ->getStateUsing(function ($record) {
                        if ($record->user) {
                            return $record->user->name;
                        }
                        return $record->name ?? 'Guest';
                    })
                    ->badge()
                    ->color(function ($record) {
                        return $record->user ? 'success' : 'gray';
                    }),
                Tables\Columns\TextColumn::make('post.title')
                    ->label('Post')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('comment')
                    ->limit(50)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= 50) {
                            return null;
                        }
                        return $state;
                    }),
                Tables\Columns\BooleanColumn::make('approved')
                    ->label('Approved'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('approved')
                    ->options([
                        true => 'Approved',
                        false => 'Pending',
                    ]),
                Tables\Filters\SelectFilter::make('post')
                    ->relationship('post', 'title'),
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
            ])
            ->defaultSort('created_at', 'desc');
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

