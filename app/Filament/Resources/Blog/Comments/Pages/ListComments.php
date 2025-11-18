<?php

namespace App\Filament\Resources\Blog\Comments\Pages;

use Filament\Actions\CreateAction;
    use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\Blog\Comments\CommentResource;

class ListComments extends ListRecords
{
    protected static string $resource = CommentResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         CreateAction::make(),
    //     ];
    // }
}
