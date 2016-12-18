<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Tag;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('templates.partials.sidebar', function ($view) {
            return $view->with('tags', Tag::get());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
