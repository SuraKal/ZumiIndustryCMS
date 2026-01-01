<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Builder;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DatePicker;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Schemas\Components\Utilities\Get;

class Dashboard extends BaseDashboard
{
    public function filtersForm(Schema $schema): Schema
    {
        return $schema
            ->schema([  // Use ->schema() for the whole form; ->components() is for sections
            ]);
    }
}