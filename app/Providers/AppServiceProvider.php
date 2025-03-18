<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        Filament::registerRenderHook('head.start', function () {
            if (!Schema::hasTable('general_settings')) {
                return ''; // Prevent Filament from querying the missing table
            }
        });
        // Check if the 'general_settings' table exists before calling gs()
        if (Schema::hasTable('general_settings')) {
            $general = gs();
            $viewShare['general'] = $general;
            view()->share($viewShare);
        }
    }
}
