<?php

namespace App\Filament\Resources\Blog\Authors\Pages;

use App\Filament\Resources\Blog\Authors\AuthorResource;
use Filament\Actions\CreateAction;
use Filament\Actions\ExportAction;
use Filament\Resources\Pages\ManageRecords;

class ManageAuthors extends ManageRecords
{
    protected static string $resource = AuthorResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
