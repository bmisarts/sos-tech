@extends('layouts.app')

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card" style="margin-top: 30px">
                <div class="card-body">
                    <img class="rounded mx-auto d-block logo" src="{{ asset('assets/images/logo.jpg') }}" alt="">
                    <form method="POST" action="{{ route('unsubscription') }}">
                        @csrf

                        @if($errors->any())
                            <span class="text-danger mb-20">{{$errors->first()}}</span> <br> <br> 
                        @endif
                        <div class="form-group">
                            <label for="inputEmail" class="sr-only">Adresse e-mail</label>
                            <input id="email" placeholder="Adresse e-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="inputPassword" class="sr-only">Mot de passe</label>
                            <input id="password" placeholder="Mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button class="btn btn-lg btn1 text-white btn-block" type="submit">Se désabonner </button>

                        <p class="mt-5 mb-3 text-muted text-center">© {{ config('app.name').' '.now()->year}}</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

