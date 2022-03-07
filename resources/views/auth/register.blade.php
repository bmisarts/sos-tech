@extends('layouts.register')

@section('body')
    <form class="form-signin" action="{{ route('register') }}" method="POST">
        @csrf

        <h1 class="h3 mb-3 font-weight-normal">Créer un compte</h1>

        <div class="form-group">
            <label for="inputName" class="sr-only">Nom d'utilisateur</label>
            <input type="text" name="name" class="form-control" placeholder="Nom" value="{{ old('name') }}" required="">

            @error('name')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        
        <div class="form-group">
            <label for="inputEmail" class="sr-only">Adresse e-mail</label>
            <input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}" required="">

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

        <div class="form-group">
            <label for="inputPasswordConfirmation" class="sr-only">Confirmation mot de passe</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmation" required="">

            @error('password_confirmation')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">S'inscrire</button>

    
        <a  href="{{ url('/') }}"><p class="mt-5 mb-3 text-muted">© {{ config('app.name').' '.now()->year}}</p></a>
        <p>Vous avez déjà un compte? <a href="{{ route('login') }}">Connectez-vous ici</a></p>
    </form>
@endsection