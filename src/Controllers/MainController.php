<?php namespace JorarMarfin\LaravelYoutube\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getData($link=null)
    {
        if (isset($link)) {
            $enlace = 'https://www.youtube.com/';
            $enlace .= 'oembed?';
            $enlace .= 'url=';
            $enlace .= $link;
            $enlace .= '&format=json';
            $params = file_get_contents($enlace);
            $params = json_decode($params);
            return $params;
        } else {
            return 'no ingreso un enlace de youtube';
        }
        
    }
}