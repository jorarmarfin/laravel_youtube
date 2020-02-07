<?php namespace JorarMarfin\LaravelYoutube\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelYoutubeFacade extends Facade 
{
    protected static function getFacadeAccessor()
    {
        return 'LaravelYoutube';
    }
}
