<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Contact;
use Filament\Actions\Action;
use Illuminate\Support\Facades\Log;
use Filament\Notifications\Notification;
use App\Filament\Resources\Contacts\ContactResource;

class ContactObserver
{
    /**
     * Handle the Contact "created" event.
     */
    public function created(Contact $contact): void
    {
        $positions = ['admin', 'super_admin'];
        $admins = User::whereHas('positions', function ($query) use ($positions) {
                $query->whereIn('name', $positions);
            })->get();

        if ($admins->isEmpty()) {
            Log::info('No admins found to notify for new order');
            return;
        }

        $title = 'New Message Received!';
        $body = sprintf(
            "New Message has just been added with the subject of <strong>%s</strong>.<br>
            Please review and take necessary actions.",
            $contact?->subject
        );
        
        

        // Reusable Filament-style notification
        $notification = Notification::make()
            ->title($title)
            ->body($body)
            ->icon('heroicon-o-shopping-cart')
            ->color('success')
            ->actions([
                Action::make('View Message')
                    ->button()
                    ->url(ContactResource::getUrl('view', ['record' => $contact])) // Link to admin panel
            ])
            ->toDatabase();

        foreach ($admins as $admin) {
            $admin->notify($notification);
        }

        Log::info('Admins notified of new order', [
            'subject' => $contact->subject,
            'recipients' => $admins->pluck('email')->toArray(),
        ]);
    }

    /**
     * Handle the Contact "updated" event.
     */
    public function updated(Contact $contact): void
    {
        //
    }

    /**
     * Handle the Contact "deleted" event.
     */
    public function deleted(Contact $contact): void
    {
        //
    }

    /**
     * Handle the Contact "restored" event.
     */
    public function restored(Contact $contact): void
    {
        //
    }

    /**
     * Handle the Contact "force deleted" event.
     */
    public function forceDeleted(Contact $contact): void
    {
        //
    }
}
