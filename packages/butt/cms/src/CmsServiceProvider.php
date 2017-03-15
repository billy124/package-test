<?php

namespace Butt\Cms;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class CmsServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        // get the laravel view path
        $viewPath = Config::get('view.paths')[0];
        
        // set the view name space 
        if (file_exists($viewPath . '/cms')) {
            $this->loadViewsFrom($viewPath . '/cms', 'cms');
        } else {
            $this->loadViewsFrom(__DIR__ . '/views', 'cms');
        }

        // publish these files : php artisan vendor:publish
        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/cms'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        include __DIR__ . '/routes.php';
        $this->app->make('Butt\Cms\Controllers\PageController');
    }

}
