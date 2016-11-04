<?php

namespace BrianFaust\SweetFlash;

class ServiceProvider extends \BrianFaust\ServiceProvider\ServiceProvider
{
    public function boot()
    {
        $this->publishViews();

        $this->loadViews();
    }

    public function register()
    {
        parent::register();

        $this->app->singleton('sweet-flash', function ($app) {
            return new Notifier($app['session.store']);
        });
    }

    public function provides()
    {
        return array_merge(parent::provides(), ['sweet-flash']);
    }

    public function getPackageName()
    {
        return 'sweet-flash';
    }
}
