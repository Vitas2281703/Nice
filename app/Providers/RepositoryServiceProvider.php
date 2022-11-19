<?php

namespace App\Providers;

use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * All of the container singletons that should be registered.
     *
     * @var array<string|int, \Closure(Container, array<mixed>):mixed|string|null>
     */
    public array $singletons = [
        \App\Repositories\Contracts\DeviceRepository::class => \App\Repositories\DeviceRepository::class,
        \App\Repositories\Contracts\FabricatorRepository::class => \App\Repositories\FabricatorRepository::class,
        \App\Repositories\Contracts\CategoryRepository::class => \App\Repositories\CategoryRepository::class,
        \App\Repositories\Contracts\ServiceRepository::class => \App\Repositories\ServiceRepository::class,
        \App\Repositories\Contracts\PromotionRepository::class => \App\Repositories\PromotionRepository::class,
        \App\Repositories\Contracts\WorkerRepository::class => \App\Repositories\WorkerRepository::class,
        \App\Repositories\Contracts\JobStepRepository::class => \App\Repositories\JobStepRepository::class,
        \App\Repositories\Contracts\RequestRepository::class => \App\Repositories\RequestRepository::class,
        \App\Repositories\Contracts\OurClientRepository::class => \App\Repositories\OurClientRepository::class,
        \App\Repositories\Contracts\UserRepository::class => \App\Repositories\UserRepository::class,
    ];

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
        //
    }
}
