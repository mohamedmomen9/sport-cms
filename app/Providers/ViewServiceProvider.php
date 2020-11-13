<?php

namespace App\Providers;
use App\Models\Week;
use App\Models\Season;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['matches.fields'], function ($view) {
            $weekItems = Week::pluck('title','id')->toArray();
            $view->with('weekItems', $weekItems);
        });
        View::composer(['weeks.fields'], function ($view) {
            $seasonItems = Season::pluck('name','id')->toArray();
            $view->with('seasonItems', $seasonItems);
        });
        //
    }
}