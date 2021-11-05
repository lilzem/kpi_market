<?php

namespace App\Providers;

use App\Services\CategoryService;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function(View $view) {
            $view->with('currentRouteName', Route::getCurrentRoute()->getName());
        });

        view()->composer('parts.header', fn (View $view) =>$view->with('_categories', CategoryService::getCategories()));
    }
}
