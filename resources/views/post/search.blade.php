@extends('layouts.app')

@section('body')

    <div class="container-fluid bg-primary p-5 hero-header mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">Recherche</h1>
                <a href="#" class="h4 text-white">{{ substr(request('query'), 0, 20) }}</a>
            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="row">
        
            <div class="col-md-8">

                <h3 class="my-4">Resultat de recherche
                    <small>"{{ request('query') }}"</small>
                </h3>

                @each('partials.post', $posts, 'post', 'partials.empty-post')

                {{ $posts->appends(request()->only('search'))->links() }}

            </div>

            @include('includes.sidebar')

        </div>
    </div>
    
    
@endsection