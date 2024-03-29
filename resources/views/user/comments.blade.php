@extends('layouts.app')

@section('body')

<div class="container py-4">
    <div class="row">

        <div class="col-12">
            <div class="card">
                
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="display-4"> Commentaires</span>
                        
                        {{-- <a href="{{ route('categorie_create') }}" class="btn btn-primary">Create New</a> --}}
                        
                    </div>
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Utilisateur</th>
                                <th>Commentaire</th>
                                <th>Post</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($comments as $comment)
                                <tr>
                                    <td>{{ $comment->user->name }}</td>
                                    <td>{{ $comment->body }}</td>
                                    <td>{{ $comment->post->title }}</td>

                                    <td class="d-flex">
                                        <form action="{{ route('comment_destroy', $comment) }}" method="POST">
                                            @csrf @method('DELETE')

                                            <button class="btn btn-xs  btn1 text-white" type="submit">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="6">Aucun commentaire disponible.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{ $comments->links() }}
    </div>
</div>


@endsection
