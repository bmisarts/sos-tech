@extends('layouts.register')

@section('body')
    <form class="form-signin" action="{{ route('login') }}" method="POST">
        @csrf

        <h1 class="h3 mb-3 font-weight-normal">S'identifier</h1>

        <div class="form-group">
            <label for="inputEmail" class="sr-only">Adresse e-mail</label>
            <input type="email" name="email" class="form-control" placeholder="Adresse e-mail" required="">

            @error('email')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="inputPassword" class="sr-only">Mot de passe</label>
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="">

            @error('password')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span> 
            @enderror
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me">Se souvienir de moi
            </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>

    
        <a  href="{{ url('/') }}"><p class="mt-5 mb-3 text-muted">© {{ config('app.name').' '.now()->year}}</p></a>
        <p>Nouveau  {{ config('app.name', 'Laravel') }}? <a href="{{ route('register') }}">Créer un compte</a></p>
    </form>
@endsection