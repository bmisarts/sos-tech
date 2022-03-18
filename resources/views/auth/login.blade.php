@extends('layouts.app')

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card" style="margin-top: 30px">
                <div class="card-body">
                    <img class="rounded mx-auto d-block logo" src="{{ asset('assets/images/logo.jpg') }}" alt="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="inputEmail" class="sr-only">Adresse e-mail</label>
                            <input id="email" placeholder="Adresse e-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="inputPassword" class="sr-only">Mot de passe</label>
                            <input id="password" placeholder="Mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" name="remember" value="remember-me"> Se souvienir de moi
                            </label>
                        </div>
                        

                        <button class="btn btn-lg btn1 text-white btn-block" type="submit">Connexion </button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">Mot de passe oublié?</p></a>

                        <p class="mt-5 mb-3 text-muted text-center">© {{ config('app.name').' '.now()->year}}</p>
                        <p class="text-center">Nouveau sur {{ config('app.name', 'Laravel') }}? <a href="{{ url('account-new') }}" class="fg1">Créer un compte</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

