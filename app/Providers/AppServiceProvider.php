<?php

namespace App\Providers;

use App\Models\CommonSection\Copyright;
use App\Models\CommonSection\FooterSocial;
use App\Models\CommonSection\IdeaLogo;
use App\Models\CommonSection\TopSocial;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        View::composer('*', function ($view){
            $view->with('idea_logos', IdeaLogo::all());
        });
        View::composer('*', function ($view){
            $view->with('top_socials', TopSocial::all());
        });
        View::composer('*', function ($view){
            $view->with('copyrights', Copyright::all());
        });
        View::composer('*', function ($view){
            $view->with('footer_socials', FooterSocial::all());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
