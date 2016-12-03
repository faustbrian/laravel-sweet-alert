<?php

/*
 * This file is part of Laravel Sweet Flash.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\SweetFlash;

use BrianFaust\ServiceProvider\ServiceProvider;

class SweetFlashServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishViews();

        $this->loadViews();
    }

    public function register(): void
    {
        parent::register();

        $this->app->singleton('sweet-flash', function ($app) {
            return new Notifier($app['session.store']);
        });
    }

    public function provides(): array
    {
        return array_merge(parent::provides(), ['sweet-flash']);
    }

    public function getPackageName(): string
    {
        return 'sweet-flash';
    }
}
