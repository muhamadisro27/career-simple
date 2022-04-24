<?php

namespace App\Providers;

use App\Http\Interfaces\JobInterface;
use App\Http\Interfaces\AuthInterface;
use Illuminate\Support\ServiceProvider;
use App\Http\Repositories\JobRepository;
use App\Http\Interfaces\ProfileInterface;
use App\Http\Repositories\AuthRepository;
use App\Http\Interfaces\CandidateInterface;
use App\Http\Repositories\ProfileRepository;
use App\Http\Repositories\CandidateRepository;

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
        $this->app->bind(JobInterface::class, JobRepository::class);
        $this->app->bind(CandidateInterface::class, CandidateRepository::class);
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
