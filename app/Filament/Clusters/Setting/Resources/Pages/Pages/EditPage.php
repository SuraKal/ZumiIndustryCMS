<?php

namespace App\Filament\Clusters\Setting\Resources\Pages\Pages;

use App\Filament\Clusters\Setting\Resources\Pages\PageResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPage extends EditRecord
{
    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
        ];
    }
}
