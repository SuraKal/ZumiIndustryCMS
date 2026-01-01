<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Contacts\ContactResource;
use App\Models\Contact;
use Filament\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Table;

class UnreadMessages extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    protected static ?int $sort = 1;

    public function table(Table $table): Table
    {
        return $table
            // ->query(Contact::where('is_read', false)->latest()) // Only unread messages
            ->query(ContactResource::getEloquentQuery())

            ->defaultPaginationPageOption(5)
            ->columns([
                TextColumn::make('created_at')
                    ->label('Received At')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('name')
                    ->label('Sender')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('subject')
                    ->limit(20) // show first 50 chars
                    ->wrap()
                    ->searchable()
            ])
            ->modifyQueryUsing(function ($query) {
                return $query->where('is_read', false)->latest();
            })
            ->recordActions([
                Action::make('open')
                    ->label('View')
                    ->url(fn (Contact $record) => ContactResource::getUrl('view', ['record' => $record])),
            ]);
    }
}
