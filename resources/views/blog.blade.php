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
                @foreach ($posts as $post)
                   <!-- Blog Post -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <p>
                                <a href="{{ $post->category->path() }}">
                                    <span class="badge badge-pill badge btn2">{{ $post->category->name }}</span>
                                </a>
                            </p>
                            <h2 class="card-title">
                                <a class="fg1" href="{{ url('posts/'.$post->id) }}">
                                    {{ $post->title }}
                                </a>
                            </h2>
                            <p class="card-text">{{ substr($post->body, 0, 200) }}</p>
                            <img src="{{$post->image}}" alt="" style="width:100%">
                            <a href="{{ url('posts/'.$post->id) }}" class="btn btn1 text-white mt-1">
                                Lire Plus
                            </a>
                        </div>
                        <div class="card-footer text-muted">
                            {{ $post->created_at->diffForHumans() }} par <a href="#">{{ $post->user->name }}</a>
                            <span class="badge badge-pill float-right btn2  text-white">Commentaires {{ $post->comments_count }}</span>
                        </div>
                    </div>
                @endforeach
            </div>

            @include('includes.sidebar')

        </div>
    </div>
    
    
@endsection