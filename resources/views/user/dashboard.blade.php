@extends('layouts.app')

@section('body')

<div class="container py-4">
    <div class="row text-center">

        <div class="col-12 mb-4">
            <h3 class="display-4">Salut, {{ auth()->user()->name }}</h3>
        </div>

        <div class="col-md-3">
            <div class="card mb-3" style="max-width: 18rem;">
                <div class="card-header bg1 text-white">Utilisateurs</div>
                <div class="card-body">
                    <h5 class="card-title fg1">{{ $users }}</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-3" style="max-width: 18rem;">
                <div class="card-header bg1 text-white">Posts</div>
                <div class="card-body">
                    <h5 class="card-title fg1">{{ $posts }}</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-3" style="max-width: 18rem;">
                <div class="card-header bg1 text-white">Categories</div>
                <div class="card-body">
                    <h5 class="card-title fg1">{{ $categories }}</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-3" style="max-width: 18rem;">
                <div class="card-header bg1 text-white">Commentaires</div>
                <div class="card-body">
                    <h5 class="card-title fg1">{{ $comments }}</h5>
                </div>
            </div>
        </div>


    </div>
</div>


@endsection
