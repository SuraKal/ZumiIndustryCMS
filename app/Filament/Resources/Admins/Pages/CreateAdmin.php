<?php

namespace App\Filament\Resources\Admins\Pages;

use App\Models\Position;
use Illuminate\Support\Facades\Log;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\Admins\AdminResource;

class CreateAdmin extends CreateRecord {
    protected static string $resource = AdminResource::class;

    protected function afterCreate(): void {
        // Attach the 'Attendee' position to the new user
        // $AttendeePosition = Position::where( 'name', 'admin' )->first();
        $adminPosition = Position::firstOrCreate(['name' => 'admin']);
 
        if ( $adminPosition ) {
            $this->record->positions()->attach( $adminPosition->id );
        } else {
            Log::warning( 'Admin position not found during user creation.' );
        }

        // $this->record->assignRole('Admin'); 
    }
}
