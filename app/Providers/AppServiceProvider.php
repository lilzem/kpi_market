<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::creator('parts.header', function (ViewView $view) {
            $view->with('_categories', Category::all());
        });
    }
}
