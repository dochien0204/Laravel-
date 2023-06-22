<?php

namespace App\Providers;

use App\Repository\UserRepository;
use App\Service\User\UseCase;
use App\Service\User\UserRepository as IUserRepository;
use App\Service\User\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(IUserRepository::class, UserRepository::class);
        $this->app->bind(UseCase::class, UserService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
