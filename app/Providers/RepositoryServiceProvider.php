<?php

namespace App\Providers;

use App\Http\Interfaces\AuthInterface;
use Illuminate\Support\ServiceProvider;
use App\Http\Interfaces\ProfileInterface;
use App\Http\Repositories\AuthRepository;
use App\Http\Repositories\ProfileRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AuthInterface::class, AuthRepository::class);
        $this->app->bind(ProfileInterface::class, ProfileRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
