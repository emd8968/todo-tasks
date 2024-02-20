<?php

namespace App\Providers;

use App\Repository\Eloquent\Base;
use App\Repository\Eloquent\Tasks\TaskRepository;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\Interfaces\Tasks\TaskRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(EloquentRepositoryInterface::class, Base::class);
        $this->app->bind(TaskRepositoryInterface::class, TaskRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
