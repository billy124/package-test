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
        
        $this->registerNamespace();
        
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        
        // publish these files : php artisan vendor:publish
        $this->publishes([
            __DIR__ . '/Views' => base_path('resources/views/cms'),
            __DIR__ . '/Database/migrations' => base_path('database/migrations'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        
        $this->app->make('Butt\Cms\Controllers\PageController');
    }
    
    /**
     * register the namespace for the views
     */
    protected function registerNamespace() {
        // get the laravel view path
        $viewPath = Config::get('view.paths')[0];
        
        // set the view name space 
        if (file_exists($viewPath . '/cms')) {
            $this->loadViewsFrom($viewPath . '/cms', 'cms');
        } else {
            $this->loadViewsFrom(__DIR__ . '/views', 'cms');
        }
    }

}
