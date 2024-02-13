<?php

namespace App\Providers;

use App\Repositories\Notify\NotifyEloquentRepository;
use App\Repositories\Notify\NotifyRepositoryInterface;
use App\Repositories\User\UserEloquentRepository;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserEloquentRepository::class);
        $this->app->bind(NotifyRepositoryInterface::class, NotifyEloquentRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
