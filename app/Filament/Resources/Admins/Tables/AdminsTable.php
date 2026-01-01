<?php

namespace App\Filament\Resources\Admins\Tables;

use App\Enums\UserStatus;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\SelectColumn;

class AdminsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name'),
                TextColumn::make('email')->label('Email')->searchable(),
                TextColumn::make('phone')->label('Phone')->searchable(),
                SelectColumn::make('status')
                ->label('Status')
                ->options(UserStatus::class)
                ->default(UserStatus::Active->value)
                ->rules(['required', 'in:active,inactive,suspended']),
                TextColumn::make('createdDate')->label('Created Date')->date()->sortable(),
            ])
            ->filters([
                //
            ])
            ->defaultSort('created_at', 'desc')
            ->modifyQueryUsing(function ($query) {
                return $query->whereHas('positions', fn ($q) => $q->where('name', 'admin'));
            })
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
