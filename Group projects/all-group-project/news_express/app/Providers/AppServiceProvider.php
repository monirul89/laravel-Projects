<?php

namespace App\Providers;

use App\Category;
use App\News;
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
        View::composer('front-end.includes.header', function ($view){
            $view->with('categories', Category::where('publication_status', 1)->get());
        });
        View::composer('front-end.includes.footer', function ($view){
            $view->with('categories', Category::where('publication_status', 1)->get());
        });
        View::composer('front-end.includes.sidebar', function ($view){
            $view->with('newses', News::where('publication_status', 1)->inRandomOrder()->take(10)->get());
        });
        View::composer('front-end.includes.breaking-news', function ($view){
            $view->with('news', News::where('breaking_news_status', 1)->get());
        });
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
