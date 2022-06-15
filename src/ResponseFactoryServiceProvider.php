<?php

namespace Paylivre\CsvResponse;

use Illuminate\Support\ServiceProvider;
use Routing\ResponseFactory;

class ResponseFactoryServiceProvider extends ServiceProvider
{
    /**
     * Register the response factory implementation.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \Illuminate\Contracts\Routing\ResponseFactory::class,
            fn($app) => new ResponseFactory($app[\Illuminate\Contracts\View\Factory::class], $app['redirect'])
        );
    }
}
