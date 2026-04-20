<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Volt::route('/', 'public.landing')->name('home');
Volt::route('/about', 'public.pages.about')->name('public.about');
Volt::route('/contact', 'public.pages.contact')->name('public.contact');
Volt::route('/products', 'public.pages.contact')->name('public.contact');



Volt::route('/blog', 'public.pages.blogs')->name('public.blogs');
Volt::route('/blog/{post:slug}', 'public.pages.blog.show')->name('public.blogs.show');

Volt::route('/blog/category/{category:slug}', 'public.pages.blog.category.blog')->name('public.blogs.category.show');


Volt::route('/project/{project:uuid}', 'public.pages.projects.show')->name('public.projects.show');
Volt::route('/product/{product:uuid}', 'public.pages.products.show')->name('public.products.show');

Volt::route('/404', 'public.pages.error.404')->name('errors.404');

// 404 route
Route::fallback(function () {
    return redirect()->route('errors.404');
});









Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



// require __DIR__.'/auth.php';
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});
