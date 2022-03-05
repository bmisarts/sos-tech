@extends('layouts.app')

@section('body')
    <div class="container-fluid bg-primary p-5 hero-header mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">Articles du Blog</h1>
                <a href="{{ url('/') }}" class="h4 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="{{ url('/blog') }}" class="h4 text-white">blog</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->
   

    <div class="container py-4">
        <div class="row">
            
            <div class="col-md-8">

                @each('partials.post', $posts, 'post', 'partials.empty-post')

                {{ $posts->appends(request()->only('search'))->links() }}

            </div>

            @include('includes.sidebar')

        </div>
    </div>
    
    
@endsection