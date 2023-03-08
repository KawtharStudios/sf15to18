<?php

namespace KawtharStudios;

use Illuminate\Support\ServiceProvider;

class KawtharStudiosServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('sf15to18', SF15to18::class);
    }
}