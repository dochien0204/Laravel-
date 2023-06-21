<?php 

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Infrastructure\Repository\UserRepository;
use Usecase\User\UserRepository as IUserRepository;

class RepositoryServiceProvider extends ServiceProvider {
    public function register() 
    {
        $this->app->bind(IUserRepository::class, UserRepository::class);
    }
    
    public function boot() {

    }
}