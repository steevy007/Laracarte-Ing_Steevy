@extends('Layout.layout')
@section('titre')
Laracarte | About
@stop 
@section('contenue')
<div class="container ">
    <h2>C est Quoi Laracarte ?</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit maiores consectetur enim quibusdam neque quis. <a href="laramap.com" target="_blank">Laramap.com</a>
    </p>

    <div class="row">
        <div class="col">
            <div class="col-md-6">
                <div class="alert alert-info" role="alert">
                    <strong>
                    <i class="fas fa-exclamation-triangle"></i> Lorem ipsum dolor sit amet.
                    </strong>
                </div>
            </div>
        </div>
    </div>

    <p>
        Lorem ipsum dolor sit amet. <a href="#">Code Source</a>
    </p>

    <hr>
    <h2>C est Quoi Laramap ?</h2>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde voluptate voluptas aliquam dolorum veritatis cum.
    </p>
    <p>
        More Infos
        <a href="laramap.com">Laramap.com</a>
    </p>

    <hr>

    <h2>Quel sont les services et les outils utilise dans Laracarte</h2>
    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae molestiae eum omnis voluptatum culpa earum.
    </p>
    <ul>
        <li>Laravel</li>
        <li>Boostrap</li>
        <li>MDB <strong>Material Design Boostrap</strong> </li>
        <li>Google Map</li>
        <li>Mandrill</li>
        <li>Gravatar</li>
        <li>Amazon S3</li>
        <li>Heroku</li>
    </ul>
</div>
@stop