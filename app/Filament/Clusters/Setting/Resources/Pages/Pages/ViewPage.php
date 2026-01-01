<?php

namespace App\Filament\Clusters\Setting\Resources\Pages\Pages;

use App\Filament\Clusters\Setting\Resources\Pages\PageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPage extends ViewRecord
{
    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
