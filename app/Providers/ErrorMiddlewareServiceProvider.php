<?php

namespace App\Providers;

use Zeuxisoo\Whoops\Slim\WhoopsMiddleware;

/**
 * Class ErrorMiddlewareServiceProvider
 * @package App\Providers
 */
class ErrorMiddlewareServiceProvider extends ServiceProvider
{

    /**
     *
     */
    public function register()
    {
        $this->app->add(new WhoopsMiddleware());
    }

    /**
     *
     */
    public function boot()
    {
        // TODO: Implement boot() method.
    }
}