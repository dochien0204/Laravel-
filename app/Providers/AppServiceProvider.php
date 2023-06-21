<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Usecase\User\UseCase;
use Usecase\User\UserService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(\Usecase\User\UserRepository::class, \Infrastructure\Repository\UserRepository::class);
        $this->app->bind(UseCase::class, UserService::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
    }
}
