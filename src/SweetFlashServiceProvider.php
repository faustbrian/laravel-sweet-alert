<?php



declare(strict_types=1);

namespace BrianFaust\SweetFlash;

use BrianFaust\ServiceProvider\AbstractServiceProvider;

class SweetFlashServiceProvider extends AbstractServiceProvider
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
