<?php

/*
 * This file is part of Laravel Sweet Flash.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\SweetFlash;

use BrianFaust\ServiceProvider\ServiceProvider;

class SweetFlashServiceProvider extends ServiceProvider
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
