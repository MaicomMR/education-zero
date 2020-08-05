<?php

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\EventRepository;
use App\Repositories\Interfaces\EventRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Abstract class
        $this->app->bind(
            BaseRepository::class
        );

        // Event Repositories
        $this->app->bind(
            EventRepositoryInterface::class,
            EventRepository::class
        );
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
