<?php

namespace App\Filament\Clusters\Setting\Resources\Pages\Pages;

use App\Filament\Clusters\Setting\Resources\Pages\PageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPages extends ListRecords
{
    protected static string $resource = PageResource::class;
}
