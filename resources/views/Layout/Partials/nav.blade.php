<?php namespace App\Helpers; ?>
<div class="container-fluide ">
    <!--Navbar -->
<nav class=" navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar elegant-color-dark">
  <a class="navbar-brand" href="{{route('Home')}}">{{config('app.name')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ helpers::set_active('Home') }}">
        <a class="nav-link " href="{{route('Home')}}">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item {{ helpers::set_active('About') }}">
        <a class="nav-link" href="{{route('About')}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Artisans</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Planet
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="laravel.com">Laravel.com</a>
          <a class="dropdown-item" href="laravel.io">Laravel.io</a>
          <a class="dropdown-item" href="laracasts.com">Laracasts</a>
        
          <a class="dropdown-item" href="larajobs.com">Larajobs</a>
          <a class="dropdown-item" href="laravel-news.com">Laravel News</a>
          <a class="dropdown-item" href="larachat.com">Larachat</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fas fa-sign-in-alt"></i>
        Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="far fa-registered"></i>
        Register</a>
      </li><!--
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-google-plus-g"></i>
        </a>
      </li>  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
      
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>-->
    </ul>
  </div>
</nav>
<!--/.Navbar -->
</div>