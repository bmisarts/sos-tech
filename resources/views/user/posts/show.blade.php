@extends('layouts.app')

@section('body')

    <div class="container-fluid bg2 p-5 hero-header mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">Article</h1>
                <a href="{{ url('/posts/'.$post->id) }}" class="h4 text-white">{{ substr($post->title, 0, 20) }}</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->
   
<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            
            <!-- Author -->
            <p class="lead">
                <a href="#">{{ $post->user->name }}</a> <br>
                <h6>{{ $post->created_at->diffForHumans() }}</h6>
            </p>

            <!-- <hr> -->
            <!-- Title -->
            <h1 class="mt-4 fg1">{{ $post->title }}</h1>

             <!-- Category -->
             <p>
                <a href="{{ $post->category->path() }}">
                    <span class="badge badge-pill fg2">{{ $post->category->name }}</span>
                </a>
            </p>


            <!-- Post Content -->
            <p class="lead">{{ $post->body }}</p>

            <hr>

            <!-- Comments Form -->
            @auth @include('partials.comment-form') @endauth

            <h3>Commententaires</h3>

            <hr>

            @if($post->comments->isNotEmpty()) 

                @foreach ($post->comments as $comment)

                    @include('partials.comment')

                @endforeach

            @endif

        </div>

        @include('includes.sidebar')

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
@endsection
