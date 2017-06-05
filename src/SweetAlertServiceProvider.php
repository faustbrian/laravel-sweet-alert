<?php

/*
 * This file is part of Laravel Sweet Flash.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\SweetAlert;

use Illuminate\Support\ServiceProvider;

class SweetAlertServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/laravel-sweet-alert'),
        ], 'views');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-sweet-alert');
    }

    public function register()
    {
        $this->app->singleton('sweet-alert', function ($app) {
            return new Notifier($app['session.store']);
        });
    }
}
