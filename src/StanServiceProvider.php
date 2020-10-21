<?php

declare(strict_types=1);

namespace ARKEcosystem\Stan;

use Illuminate\Support\ServiceProvider;

class StanServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPublishers();
    }

    /**
     * Register the publishers.
     *
     * @return void
     */
    public function registerPublishers(): void
    {
        $this->publishes([
            __DIR__.'/../.php_cs'      => base_path('.php_cs'),
            __DIR__.'/../phpstan.neon' => base_path('phpstan.neon'),
            __DIR__.'/../psalm.xml'    => base_path('psalm.xml'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../.github' => base_path('.github'),
        ], 'workflows');
    }
}
