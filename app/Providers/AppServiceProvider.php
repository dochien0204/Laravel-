<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Usecase\User\UseCase as IUserService;
use Usecase\User\UserService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    $this->app->bind(IUserService::class, UserService::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
    }
}
