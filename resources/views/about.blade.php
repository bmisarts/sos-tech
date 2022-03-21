@extends('layouts.app')

@section('body')
    <div class="container-fluid bg-primary p-5 hero-header mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">À propos</h1>
                <a href="{{ url('/') }}" class="h4 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="{{ url('/about') }}" class="h4 text-white">A propos</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    @include('includes.about-more')
    
    @endsection