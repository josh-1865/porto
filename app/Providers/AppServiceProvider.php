<?php

namespace App\Providers;

use App\Models\Core;
use App\Models\Maintenance;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\QueryException;

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
        try {
            // Attempt DB connection
            DB::connection()->getPdo();

            if (Schema::hasTable('settings')) {
                $maintenance = optional(Maintenance::first(['is_active', 'is_discovery']));
                view()->share([
                    'discovery'   => $maintenance->is_discovery ?? false,
                    'maintenance' => $maintenance->is_active ?? false,
                ]);
            }

            if (Schema::hasTable('cores')) {
                $data = Core::first(['footer', 'header']);
                view()->share([
                    'footer_core' => $data->footer ?? false,
                    'header_core' => $data->header ?? false,
                ]);
            }
        } catch (QueryException $e) {
            // Log and silently fail if DB is not ready (e.g., during deployment)
            Log::warning('Skipping DB-dependent boot logic: ' . $e->getMessage());
        }
    }
}
