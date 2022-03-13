@extends('layouts.app')

@section('body')

<div class="container py-4">
    <div class="row">

        <div class="col-12">
            <div class="card">
                
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="display-4"> Posts</span>
                        
                        <a href="{{ route('post_create') }}" class="btn btn1 text-white">Poster</a>
                    </div>
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Corps</th>
                                <th>Auteur</th>
                                <th>Catégorie</th>
                                <th>Public</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ substr($post->body, 0, 60) }}</td>
                                    <td>{{ $post->user->name }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>{{ $post->published }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('post_show', $post) }}" class="btn btn-xs btn2 text-white"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('post_edit', $post) }}" class="btn btn-xs btn-primary"><i class="fa fa-pen"></i></a>

                                        <form action="{{ route('post_destroy', $post) }}" method="POST">
                                            @csrf @method('DELETE')

                                            <button class="btn btn-xs btn1 text-white" type="submit"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="6">Aucune publication disponible.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        {{ $posts->links() }}
    </div>
</div>


@endsection
