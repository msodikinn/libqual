<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::composer(['quote.motivasi', 'quote.inspirasi'], 'App\Http\ViewComposer\AppNameComposer');
	 //  \View::share(['app_name'=>'Aplikasi Kur Online'], 'quote.motivasi');
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
