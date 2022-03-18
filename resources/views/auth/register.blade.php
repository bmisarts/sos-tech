@extends('layouts.app')

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card" style="margin-top: 30px">
                <div class="card-body">
                    <img class="rounded mx-auto d-block logo" src="{{ asset('assets/images/logo.jpg') }}" alt="">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">

                            <div class="col-md-12">
                                <input id="name" type="text" placeholder="Nom" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Addresse email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input id="password" placeholder="Mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input id="password-confirm" placeholder="Confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <button class="btn btn-lg btn1 text-white btn-block" type="submit">S'inscrire </button>
                        <p class="mt-5 mb-3 text-muted text-center">© {{ config('app.name').' '.now()->year}}</p>
                        <p class="text-center">Déjà membre {{ config('app.name', 'Laravel') }}? <a href="{{ url('connexion') }}" class="fg1">Connexion</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
