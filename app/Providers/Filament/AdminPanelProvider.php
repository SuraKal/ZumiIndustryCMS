<?php

namespace App\Providers\Filament;

use Filament\Panel;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Filament\PanelProvider;
use App\Filament\Pages\Dashboard;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Filament\Http\Middleware\Authenticate;
use pxlrbt\FilamentSpotlight\SpotlightPlugin;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Filament\Http\Middleware\AuthenticateSession;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

class AdminPanelProvider extends PanelProvider
 {
    public function panel( Panel $panel ): Panel
 {
        return $panel
        ->default()
        ->id( 'admin' )
        ->path( 'admin' )
        ->login()
        ->colors( [
            'primary' => Color::Amber,
        ] )
        ->brandName( 'Amen Trading' )
        ->unsavedChangesAlerts()
        ->discoverClusters( in: app_path( 'Filament/Clusters' ), for: 'App\\Filament\\Clusters' )
        ->discoverResources( in: app_path( 'Filament/Resources' ), for: 'App\Filament\Resources' )
        ->discoverPages( in: app_path( 'Filament/Pages' ), for: 'App\Filament\Pages' )
        ->discoverWidgets( in: app_path( 'Filament/Widgets' ), for: 'App\Filament\Widgets' )
        ->pages( [
            Dashboard::class,
        ] )
        ->navigationGroups( [
            'Management',
        ] )
        ->discoverWidgets( in: app_path( 'Filament/Widgets' ), for: 'App\Filament\Widgets' )
        ->widgets( [
            AccountWidget::class,
            // FilamentInfoWidget::class,
        ] )
        ->middleware( [
            EncryptCookies::class,
            AddQueuedCookiesToResponse::class,
            StartSession::class,
            AuthenticateSession::class,
            ShareErrorsFromSession::class,
            VerifyCsrfToken::class,
            SubstituteBindings::class,
            DisableBladeIconComponents::class,
            DispatchServingFilamentEvent::class,
        ] )
        // ->viteTheme( 'resources/css/filament/admin/theme.css' )
        ->databaseNotifications()
        ->plugins( [
            FilamentShieldPlugin::make(),
            // SpotlightPlugin::make(),
        ] )
        ->resourceCreatePageRedirect( 'index' )
        ->resourceEditPageRedirect( 'index' )
        ->authMiddleware( [
            Authenticate::class,
        ] );
    }
}
