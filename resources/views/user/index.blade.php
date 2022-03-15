@extends('layouts.app')

@section('body')

<div class="container py-4">
    <div class="row">

        <div class="col-12">
            <div class="card">
                
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="display-4"> Utilisateurs</span>                        
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>email</th>
                                <th>Membre depuis</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at->diffForHumans() }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="6">Aucun Utilisateur disponible.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{ $users->links() }}
    </div>
</div>


@endsection
