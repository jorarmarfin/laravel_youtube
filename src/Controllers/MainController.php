<?php namespace JorarMarfin\LaravelYoutube\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getData($link)
    {
        $enlace = 'https://www.youtube.com/';
        $enlace .= 'oembed?';
        $enlace .= 'url=';
        $enlace .= $link;
        $enlace .= '&format=json';
        $params = file_get_contents($enlace);
        $params = json_decode($params);
        return $params;
    }
}