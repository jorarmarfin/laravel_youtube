<?php namespace JorarMarfin\LaravelYoutube;

use Illuminate\Support\Facades\App;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use JorarMarfin\LaravelYoutube\Controllers\MainController;

class LaravelYoutubeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('LaravelYoutube', function()
        {
            return new MainController;
        });
        App::booting( function()
        {
            $loader = AliasLoader::getInstance();
            $loader->alias('LaravelYoutube', 'JorarMarfin\LaravelYoutube\Facades\LaravelYoutubeFacade');
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
