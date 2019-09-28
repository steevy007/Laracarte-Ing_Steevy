<?php
namespace App\Helpers;
use Illuminate\Support\Facades\Route;
class helpers{
    public static function set_active($route){
        return Route::is($route)? 'active':'';
    }
}