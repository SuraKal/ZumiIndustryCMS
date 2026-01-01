<?php

namespace App\Filament\Resources\Contacts\Pages;

use App\Filament\Resources\Contacts\ContactResource;
use Filament\Resources\Pages\ViewRecord;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

    public function mount($record): void
    {
        parent::mount($record);

        // Automatically mark as read if not already
        if (!$this->record->is_read) {
            $this->record->update(['is_read' => true]);
        }
    }
}
