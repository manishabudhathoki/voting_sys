<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\PartyRepositoryInterface;
use App\Repositories\PartyRepository;
use App\Repositories\CandidateRepositoryInterface;
use App\Repositories\CandidateRepository;
//REPOS USE
class TaskProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->app->bind(
            CandidateRepositoryInterface::class,
            CandidateRepository::class
        );

        $this->app->bind(
            PartyRepositoryInterface::class,
            PartyRepository::class
        );


        //REPOS BIND END
    }
}
