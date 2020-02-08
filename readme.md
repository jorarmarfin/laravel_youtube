# Laravel 6.0 Youtube 
[![Latest Stable Version](https://poser.pugx.org/jorarmarfin/laravel_youtube/v/stable)](https://packagist.org/packages/jorarmarfin/laravel_youtube) [![Total Downloads](https://poser.pugx.org/jorarmarfin/laravel_youtube/downloads)](https://packagist.org/packages/jorarmarfin/laravel_youtube) [![Latest Unstable Version](https://poser.pugx.org/jorarmarfin/laravel_youtube/v/unstable)](https://packagist.org/packages/jorarmarfin/laravel_youtube) [![License](https://poser.pugx.org/jorarmarfin/laravel_youtube/license)](https://packagist.org/packages/jorarmarfin/laravel_youtube)
A simple way to show the metadata of a YouTube video in [Laravel](http://www.laravel.com) 

## Installation
The LaravelYoutube service provider can be installed via [composer](http://getcomposer.org) by requiring the `jorarmarfin/laravel_youtube` package in your project's composer.json.

Laravel 5.5+ will use the auto-discovery function.

```json
{
    "require": {
        "jorarmarfin/laravel_youtube": "0.0.2"
    }
}
```

If you don't use auto-discovery you will need to include the service provider / facade in `config/app.php`.


```php
'providers' => [
    //...
    JorarMarfin\LaravelYoutube\LaravelYoutubeServiceProvider::class,
]

//...

'aliases' => [
    //...
    'LaravelYoutube' => JorarMarfin\LaravelYoutube\Facades\LaravelYoutubeFacade::class
]
```

That's it! You're good to go.

Here is a little example:

```php
use LaravelYoutube; // at the top of the file

$data = LaravelYoutube::getData('https://www.youtube.com/watch?v=cYgkfQUUwWQ');
$data is object
+"thumbnail_url": "https://i.ytimg.com/vi/cYgkfQUUwWQ/hqdefault.jpg"
  +"version": "1.0"
  +"type": "video"
  +"html": "<iframe width="480" height="270" src="https://www.youtube.com/embed/cYgkfQUUwWQ?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; ▶"
  +"provider_url": "https://www.youtube.com/"
  +"thumbnail_width": 480
  +"width": 480
  +"thumbnail_height": 360
  +"author_url": "https://www.youtube.com/user/CocinoThai"
  +"height": 270
  +"author_name": "Kwan Homsai"
  +"title": "Receta de Pollo Teriyaki - Chicken Teriyaki Recipe l Kwan Homsai"
  +"provider_name": "YouTube"
```