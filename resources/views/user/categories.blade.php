@extends('layouts.app')

@section('body')

<div class="container py-4">
    <div class="row">

        <div class="col-12">
            <div class="card">
                
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="display-4"> Categories</span>
                        
                        <a href="{{ route('categorie_create') }}" class="btn btn-primary">Créer</a>
                        
                    </div>

                    <div class="alert alert-warning">
                        Avertissement! La suppression de catégories supprimera également tous les messages associés.
                    </div>
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('categorie_edit', $category) }}" class="btn btn-xs btn2 text-white"><i class="fa fa-pen"></i></a>

                                        <form action="{{ route('categorie_destroy', $category) }}" method="POST">
                                            @csrf @method('DELETE')

                                            <button class="btn btn-xs btn1 text-white" type="submit"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="6">Aucune catégorie disponible.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
