<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RootController extends Controller
{
    public function index(){
        return view('Pages.welcome');
    }
    public function about(){
        return view('Pages.about');
    }
}
