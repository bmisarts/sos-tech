@extends('layouts.app')

@section('body')

<div class="container py-4">
    <div class="row">

        @include('partials.back-link')

        <div class="col-12">
            <div class="card">
                <div class="card-header bg1 text-white">
                    Nouvelle catégorie
                </div>

                <div class="card-body">
                <form action="{{ route('categorie_store') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" name="name" value="{{ old('name') }}" required class="form-control">

                            @error('name')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> 
                            @enderror
                        </div>

                        <button class="btn  btn1 text-white" type="submit">Enregistrer</button>

                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>


@endsection
