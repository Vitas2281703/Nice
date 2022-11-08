<?php

namespace App\Providers;

use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * All of the container singletons that should be registered.
     *
     * @var array<string|int, \Closure(Container, array<mixed>):mixed|string|null>
     */
    public array $singletons = [
        \App\Services\Contracts\FabricatorService::class => \App\Services\FabricatorService::class,
        \App\Services\Contracts\CategoryService::class => \App\Services\CategoryService::class,
        \App\Services\Contracts\DeviceService::class => \App\Services\DeviceService::class,
        \App\Services\Contracts\ServiceService::class => \App\Services\ServiceService::class,
        \App\Services\Contracts\PromotionService::class => \App\Services\PromotionService::class,
        \App\Services\Contracts\WorkerService::class => \App\Services\WorkerService::class,
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
