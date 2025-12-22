<?php

namespace App\Providers;

use App\Repositories\DbTherapistRepository;
use App\Repositories\TherapistRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TherapistRepository::class, DbTherapistRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
