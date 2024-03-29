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
        \App\Services\Contracts\OrderServiceService::class => \App\Services\OrderServiceService::class,
        \App\Services\Contracts\NewsService::class => \App\Services\NewsService::class,
        \App\Services\Contracts\PromotionService::class => \App\Services\PromotionService::class,
        \App\Services\Contracts\WorkerService::class => \App\Services\WorkerService::class,
        \App\Services\Contracts\JobStepService::class => \App\Services\JobStepService::class,
        \App\Services\Contracts\OurClientService::class => \App\Services\OurClientService::class,
        \App\Services\Contracts\UserService::class => \App\Services\UserService::class,
        \App\Services\Contracts\RequestService::class => \App\Services\RequestService::class,
        \App\Services\Contracts\TelegramService::class => \App\Services\TelegramService::class,
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
