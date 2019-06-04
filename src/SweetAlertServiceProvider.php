<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Sweet Alert.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\SweetAlert;

use Illuminate\Support\ServiceProvider;

class SweetAlertServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/laravel-sweet-alert'),
        ], 'views');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-sweet-alert');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton('sweet-alert', function ($app) {
            return new Notifier($app['session.store']);
        });
    }
}
