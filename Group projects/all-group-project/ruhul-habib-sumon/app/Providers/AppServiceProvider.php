<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    View::composer('front-end.sports.news-details',function ($view){

            $view->with('catergories', Category:: where('publication_status', 1)->get());


    });
//    View::composer('front-end.home.home',function ($view){
//
//            $view->with('name','Rasel');
//
//
//    });
        }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
