<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use \App\Billing\Stripe;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('layouts.sidebar', function($view){
            $archives = \App\Post::archives();
            $tags = \App\Tag::allInUsage();
            $view->with(compact('archives','tags'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \App::bind(Stripe::class, function(){
            return new Stripe(config('services.stripe.secret'));
        });
        // Instead of bind() i could use singleton() which always returns the same instance
    }
}
