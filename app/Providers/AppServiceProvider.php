<?php

namespace App\Providers;

use App\Services\Login\LoginService;
use App\Services\Login\LoginServiceImplement;
use App\Services\Register\RegisterService;
use App\Services\Register\RegisterServiceImplement;
use App\Services\User\UserService;
use App\Services\User\UserServiceImplement;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            abstract: UserService::class,
            concrete: UserServiceImplement::class
        );
        $this->app->bind(RegisterService::class, RegisterServiceImplement::class);
        $this->app->bind(LoginService::class, LoginServiceImplement::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
